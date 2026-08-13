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

// Honeypot
if (!empty($_POST['website'])) {
    echo json_encode(['success' => true, 'message' => 'Thank you. We will be in touch shortly.']);
    exit;
}

$name      = trim((string) ($_POST['career_name']      ?? ''));
$email     = trim((string) ($_POST['career_email']     ?? ''));
$phone     = trim((string) ($_POST['career_phone']     ?? ''));
$position  = trim((string) ($_POST['career_position']  ?? ''));
$portfolio = trim((string) ($_POST['career_portfolio'] ?? ''));
$message   = trim((string) ($_POST['career_message']   ?? ''));

$errors = [];

if ($name === '') {
    $errors[] = 'Full name is required.';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'A valid email address is required.';
}

if ($position === '') {
    $errors[] = 'Please select a position.';
}

if ($message === '') {
    $errors[] = 'Please tell us about yourself and your experience.';
}

if ($errors !== []) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

$subject = 'Career application — ' . $position;

$bodyLines = [
    'New career application from deweboo.com',
    '',
    'Position: ' . $position,
    '',
    'Applicant',
    'Name:      ' . $name,
    'Email:     ' . $email,
    'Phone:     ' . ($phone     !== '' ? $phone     : '—'),
    'Portfolio: ' . ($portfolio !== '' ? $portfolio : '—'),
    '',
    'About the applicant:',
    $message,
    '',
    'Submitted: ' . gmdate('Y-m-d H:i:s') . ' UTC',
];

$body = implode("\n", $bodyLines);

$sent = dw_send_inbound_mail($subject, $body, $name, $email, 'De-Weboo Careers');

if (!$sent) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'We could not send your application right now. Please email us at ' . dw_primary_inbound_email() . ' directly.',
    ]);
    exit;
}

echo json_encode([
    'success' => true,
    'message' => 'Thank you for applying! Our team will review your application and reach out within 3–5 business days.',
]);
