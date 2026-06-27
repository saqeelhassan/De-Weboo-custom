<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/config.php';
require_once dirname(__DIR__) . '/includes/helpers.php';
require_once dirname(__DIR__) . '/includes/mail.php';

header('Content-Type: application/json; charset=utf-8');

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

if (!empty($_POST['website'])) {
    echo json_encode(['success' => true, 'message' => 'Thank you. We will be in touch shortly.']);
    exit;
}

$name = trim((string) ($_POST['collab_name'] ?? ''));
$email = trim((string) ($_POST['collab_email'] ?? ''));
$organization = trim((string) ($_POST['collab_org'] ?? ''));
$rfp = trim((string) ($_POST['collab_rfp'] ?? ''));
$message = trim((string) ($_POST['collab_message'] ?? ''));
$services = array_map('trim', (array) ($_POST['services'] ?? []));
$services = array_values(array_filter($services, static fn (string $s): bool => $s !== ''));

$errors = [];

if ($name === '') {
    $errors[] = 'Full name is required.';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'A valid corporate email is required.';
}

if ($organization === '') {
    $errors[] = 'Organization is required.';
}

if ($errors !== []) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

$subject = 'Group teaming request — ' . $organization;

$bodyLines = [
    'New CaddSight Group teaming request from deweboo.com',
    '',
    'Contact',
    'Name: ' . $name,
    'Email: ' . $email,
    'Organization: ' . $organization,
    'RFP / jurisdiction: ' . ($rfp !== '' ? $rfp : '—'),
    '',
    'Division requirements:',
    ($services !== [] ? implode(', ', $services) : '—'),
    '',
    'Scope outline:',
    ($message !== '' ? $message : '—'),
    '',
    'Submitted: ' . gmdate('Y-m-d H:i:s') . ' UTC',
];

$sent = dw_send_inbound_mail(
    $subject,
    implode("\n", $bodyLines),
    $name,
    $email,
    'De-Weboo Teaming'
);

if (!$sent) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'We could not send your request right now. Please email us at ' . dw_primary_inbound_email() . ' directly.',
    ]);
    exit;
}

echo json_encode([
    'success' => true,
    'message' => 'Thank you. A CaddSight Group manager will review your request and follow up within 2 business hours.',
]);
