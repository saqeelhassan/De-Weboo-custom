<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$files = glob($root . '/*.php') ?: [];
$files = array_merge($files, [
    $root . '/includes/footer.php',
    $root . '/includes/header.php',
    $root . '/includes/seo-meta.php',
    $root . '/includes/collaboration-sections.php',
]);

$replacements = [
    'De-Weboo is a enterprise software engineering firm' => 'De-Weboo is an enterprise software engineering firm',
    'an engineering-led agency engineering' => 'an enterprise software engineering firm delivering',
    'An engineering-led agency that' => 'An enterprise software engineering firm that',
    'an engineering-led agency and' => 'an enterprise software engineering firm and',
    'an engineering-led agency.' => 'an enterprise software engineering firm.',
    'An engineering-led agency and' => 'An enterprise software engineering firm and',
    'De-Weboo is an engineering-led agency' => 'De-Weboo is an enterprise software engineering firm',
    'Engineering-led agency ·' => 'Software engineering firm ·',
    'Engineering-led solutions with' => 'Enterprise IT solutions with',
    'Engineering-led solutions for' => 'Enterprise IT solutions for',
    'Engineering-led solutions.' => 'Enterprise IT solutions.',
    'Engineering-led delivery trusted by' => 'Enterprise-grade delivery trusted by',
    'Engineering-led delivery.' => 'Enterprise-grade delivery.',
    'Engineering-led delivery:' => 'Software & IT delivery:',
    'engineering-led delivery' => 'enterprise-grade delivery',
    'engineering-led digital delivery' => 'enterprise software delivery',
    'engineering-led, secure' => 'enterprise-grade, secure',
    'Engineering-Led Software, Web, Mobile & Medical Systems' => 'Custom Software, Web, Mobile & IT Solutions',
    'Engineering-Led Digital Agency & SLED Bidder' => 'Enterprise IT Solutions & SLED Bidder',
    'Engineering-Led Agency & SLED Bidder' => 'Enterprise Software Firm & SLED Bidder',
    'Engineering-led agency:' => 'Enterprise software firm:',
    'CORE ENGINEERING EXPERTISE' => 'SOFTWARE & IT EXPERTISE',
    'Core engineering expertise:' => 'Primary expertise:',
];

foreach ($files as $file) {
    if (!is_file($file) || str_contains($file, DIRECTORY_SEPARATOR . 'tools' . DIRECTORY_SEPARATOR)) {
        continue;
    }
    $content = file_get_contents($file);
    if ($content === false) {
        continue;
    }
    $original = $content;
    foreach ($replacements as $search => $replace) {
        $content = str_replace($search, $replace, $content);
    }
    if ($content !== $original) {
        file_put_contents($file, $content);
        echo basename($file) . "\n";
    }
}

echo "Done.\n";
