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
    echo json_encode(['success' => true, 'message' => 'Thanks for subscribing!']);
    exit;
}

$email = trim((string) ($_POST['newsletter_email'] ?? ''));

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address.']);
    exit;
}

$subject = 'New newsletter subscriber — ' . $email;

$bodyLines = [
    'New newsletter subscription from deweboo.com',
    '',
    'Email: ' . $email,
    'Page: ' . (string) ($_SERVER['HTTP_REFERER'] ?? '—'),
    '',
    'Submitted: ' . gmdate('Y-m-d H:i:s') . ' UTC',
];

$sent = dw_send_inbound_mail(
    $subject,
    implode("\n", $bodyLines),
    $email,
    $email,
    'De-Weboo Dev Newsletter'
);

if (!$sent) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'We could not process your subscription right now. Please try again later.',
    ]);
    exit;
}

echo json_encode([
    'success' => true,
    'message' => 'Thanks for subscribing! You will hear from us soon.',
]);
