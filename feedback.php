<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/support-pages.php';
require_once __DIR__ . '/includes/seo.php';

$feedbackForm = [
    'name' => '',
    'email' => '',
    'phone' => '',
    'organization' => '',
    'topic' => '',
    'message' => '',
    'testimonial_ok' => false,
];

$result = dw_process_feedback_form($feedbackForm);
$feedbackForm = $result['form'];
$feedbackAlert = $result['alert'];

dw_load_page_seo('feedback');
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

dw_render_support_page('feedback', $feedbackForm, $feedbackAlert);

require_once __DIR__ . '/includes/footer.php';
