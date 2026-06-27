<?php

declare(strict_types=1);

require_once __DIR__ . '/seo-config.php';
require_once __DIR__ . '/mail-config.php';
require_once __DIR__ . '/mail-smtp.php';

/** Valid inbox addresses for client form submissions (see inboundEmails in seo-config.php). */
function dw_form_inbox_emails(): array
{
    $org = dw_org_config();
    $raw = $org['inboundEmails'] ?? [$org['email'] ?? ''];

    $valid = [];
    foreach ((array) $raw as $email) {
        $email = trim((string) $email);
        if ($email !== '' && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $valid[] = $email;
        }
    }

    return array_values(array_unique($valid));
}

function dw_primary_inbound_email(): string
{
    $emails = dw_form_inbox_emails();

    return $emails[0] ?? (string) (dw_org_config()['email'] ?? '');
}

function dw_send_inbound_mail(
    string $subject,
    string $body,
    string $replyName,
    string $replyEmail,
    string $fromLabel = 'De-Weboo'
): bool {
    $recipients = dw_form_inbox_emails();
    if ($recipients === []) {
        return false;
    }

    $fromEmail = dw_mail_from_email();
    $replyName = trim($replyName);
    $replyEmail = trim($replyEmail);
    $replyToEmail = ($replyName !== '' && filter_var($replyEmail, FILTER_VALIDATE_EMAIL)) ? $replyEmail : null;
    $replyToName = $replyToEmail !== null ? $replyName : null;

    if (dw_mail_use_smtp()) {
        return dw_smtp_send(
            $recipients,
            $subject,
            $body,
            $fromEmail,
            $fromLabel !== '' ? $fromLabel : (string) dw_mail_config()['fromName'],
            $replyToEmail,
            $replyToName
        );
    }

    $headerLines = [
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . $fromLabel . ' <' . $fromEmail . '>',
        'Return-Path: <' . $fromEmail . '>',
    ];

    if ($replyToEmail !== null) {
        $headerLines[] = 'Reply-To: ' . $replyName . ' <' . $replyToEmail . '>';
    }

    $headers = implode("\r\n", $headerLines);
    $to = implode(', ', $recipients);
    $additionalParams = '';

    if (PHP_OS_FAMILY !== 'Windows' && filter_var($fromEmail, FILTER_VALIDATE_EMAIL)) {
        $additionalParams = '-f' . escapeshellarg($fromEmail);
    }

    if ($additionalParams !== '') {
        return @mail($to, $subject, $body, $headers, $additionalParams);
    }

    return @mail($to, $subject, $body, $headers);
}

/** @return array{form: array<string, string>, alert: ?array{type: string, message: string}} */
function dw_process_contact_form(array $form): array
{
    if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST' || !isset($_POST['contact_form'])) {
        return ['form' => $form, 'alert' => null];
    }

    if (!empty($_POST['website'])) {
        return [
            'form' => [
                'name' => '',
                'phone' => '',
                'email' => '',
                'subject' => '',
                'message' => '',
            ],
            'alert' => [
                'type' => 'success',
                'message' => 'Thank you. Our team will review your inquiry and respond within 1–2 business days.',
            ],
        ];
    }

    $form = [
        'name' => trim((string) ($_POST['contact_name'] ?? '')),
        'phone' => trim((string) ($_POST['contact_phone'] ?? '')),
        'email' => trim((string) ($_POST['contact_email'] ?? '')),
        'subject' => trim((string) ($_POST['contact_subject'] ?? '')),
        'message' => trim((string) ($_POST['contact_message'] ?? '')),
    ];

    $errors = [];

    if ($form['name'] === '') {
        $errors[] = 'Full name is required.';
    }

    if ($form['email'] === '' || !filter_var($form['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'A valid work email is required.';
    }

    if ($form['message'] === '') {
        $errors[] = 'Please describe your project or inquiry.';
    }

    if ($errors !== []) {
        return [
            'form' => $form,
            'alert' => [
                'type' => 'danger',
                'message' => implode(' ', $errors),
            ],
        ];
    }

    $subjectLine = $form['subject'] !== '' ? $form['subject'] : 'General inquiry';
    $subject = 'Contact form — ' . $subjectLine;

    $bodyLines = [
        'New contact inquiry from deweboo.com',
        '',
        'Subject: ' . $subjectLine,
        '',
        'Contact',
        'Name: ' . $form['name'],
        'Email: ' . $form['email'],
        'Phone: ' . ($form['phone'] !== '' ? $form['phone'] : '—'),
        '',
        'Message:',
        $form['message'],
        '',
        'Submitted: ' . gmdate('Y-m-d H:i:s') . ' UTC',
    ];

    $sent = dw_send_inbound_mail(
        $subject,
        implode("\n", $bodyLines),
        $form['name'],
        $form['email'],
        'De-Weboo Contact'
    );

    if (!$sent) {
        return [
            'form' => $form,
            'alert' => [
                'type' => 'danger',
                'message' => 'We could not send your inquiry right now. Please email us at ' . dw_primary_inbound_email() . ' directly.',
            ],
        ];
    }

    return [
        'form' => [
            'name' => '',
            'phone' => '',
            'email' => '',
            'subject' => '',
            'message' => '',
        ],
        'alert' => [
            'type' => 'success',
            'message' => 'Thank you. Our team will review your inquiry and respond within 1–2 business days.',
        ],
    ];
}
