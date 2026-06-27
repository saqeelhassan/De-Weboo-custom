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

$name = trim((string) ($_POST['consultation_name'] ?? ''));
$email = trim((string) ($_POST['consultation_email'] ?? ''));
$phone = trim((string) ($_POST['consultation_phone'] ?? ''));
$organization = trim((string) ($_POST['consultation_organization'] ?? ''));
$interest = trim((string) ($_POST['consultation_interest'] ?? ''));
$serviceContext = trim((string) ($_POST['consultation_service'] ?? ''));
$timeline = trim((string) ($_POST['consultation_timeline'] ?? ''));
$message = trim((string) ($_POST['consultation_message'] ?? ''));

$errors = [];

if ($name === '') {
    $errors[] = 'Full name is required.';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'A valid work email is required.';
}

if ($interest === '') {
    $errors[] = 'Please select a service interest.';
}

if ($message === '') {
    $errors[] = 'Please describe your project goals and requirements.';
}

if ($errors !== []) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

$subject = 'Consultation request — ' . $interest;

$bodyLines = [
    'New consultation request from deweboo.com',
    '',
    'Service interest: ' . $interest,
    'Opened from: ' . ($serviceContext !== '' ? $serviceContext : '—'),
    '',
    'Contact',
    'Name: ' . $name,
    'Email: ' . $email,
    'Phone: ' . ($phone !== '' ? $phone : '—'),
    'Organization: ' . ($organization !== '' ? $organization : '—'),
    '',
    'Timeline: ' . ($timeline !== '' ? $timeline : '—'),
    '',
    'Project goals & requirements:',
    $message,
    '',
    'Submitted: ' . gmdate('Y-m-d H:i:s') . ' UTC',
];

$body = implode("\n", $bodyLines);

$sent = dw_send_inbound_mail($subject, $body, $name, $email, 'De-Weboo Consultation');

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
    'message' => 'Thank you. Our team will review your brief and respond within 1–2 business days.',
]);
