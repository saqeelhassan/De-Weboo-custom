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

$name = trim((string) ($_POST['inquiry_name'] ?? ''));
$email = trim((string) ($_POST['inquiry_email'] ?? ''));
$phone = trim((string) ($_POST['inquiry_phone'] ?? ''));
$organization = trim((string) ($_POST['inquiry_organization'] ?? ''));
$timeline = trim((string) ($_POST['inquiry_timeline'] ?? ''));
$budget = trim((string) ($_POST['inquiry_budget'] ?? ''));
$scope = trim((string) ($_POST['inquiry_scope'] ?? ''));
$features = trim((string) ($_POST['inquiry_features'] ?? ''));
$message = trim((string) ($_POST['inquiry_message'] ?? ''));
$projectName = trim((string) ($_POST['portfolio_project'] ?? ''));
$projectSlug = trim((string) ($_POST['portfolio_slug'] ?? ''));
$projectReference = trim((string) ($_POST['portfolio_reference'] ?? ''));

$errors = [];

if ($name === '') {
    $errors[] = 'Full name is required.';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'A valid work email is required.';
}

if ($scope === '') {
    $errors[] = 'Please describe what you want to build.';
}

if ($projectName === '' || $projectSlug === '') {
    $errors[] = 'Project reference is missing. Please refresh and try again.';
}

if ($errors !== []) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

$subject = 'Portfolio inquiry — Similar build: ' . $projectName;

$bodyLines = [
    'New portfolio inquiry from deweboo.com',
    '',
    'Reference project: ' . $projectReference,
    'Project slug: ' . $projectSlug,
    '',
    'Contact',
    'Name: ' . $name,
    'Email: ' . $email,
    'Phone: ' . ($phone !== '' ? $phone : '—'),
    'Organization: ' . ($organization !== '' ? $organization : '—'),
    '',
    'Project details',
    'Timeline: ' . ($timeline !== '' ? $timeline : '—'),
    'Budget range: ' . ($budget !== '' ? $budget : '—'),
    '',
    'What they want to build:',
    $scope,
    '',
    'Features / capabilities of interest:',
    ($features !== '' ? $features : '—'),
    '',
    'Additional notes:',
    ($message !== '' ? $message : '—'),
    '',
    'Submitted: ' . gmdate('Y-m-d H:i:s') . ' UTC',
];

$body = implode("\n", $bodyLines);

$sent = dw_send_inbound_mail($subject, $body, $name, $email, 'De-Weboo Portfolio');

if (!$sent) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'We could not send your inquiry right now. Please email us at ' . dw_primary_inbound_email() . ' directly.',
    ]);
    exit;
}

echo json_encode([
    'success' => true,
    'message' => 'Thank you. Our team will review your project brief and respond within 1–2 business days.',
]);
