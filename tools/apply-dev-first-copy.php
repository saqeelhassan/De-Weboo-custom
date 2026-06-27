<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$files = glob($root . '/*.php') ?: [];
$files[] = $root . '/includes/footer.php';
$files[] = $root . '/includes/header.php';
$files[] = $root . '/includes/seo-meta.php';

$replacements = [
    'Capabilities built for commercial growth & contract readiness' => 'Core development first: software, web, mobile & medical systems',
    'EXPLORE OUR EXPERTISE' => 'CORE DEVELOPMENT EXPERTISE',
    'Bridging B2B, B2C & B2A ecosystems seamlessly' => 'What we build first—and what scales it after launch',
    'B2B Enterprise' => 'Custom Development',
    'B2C Commerce' => 'Secure Healthcare Infrastructure',
    'B2A Government' => 'Public Sector Procurement',
    'Complex corporate logic,
                                    integrations &amp; cloud at scale' => 'Software, web &amp; mobile engineering under NAICS 541511',
    'User-centric e-commerce, apps
                                    &amp; marketing that convert' => 'HIPAA-aligned custom medical systems for B2B, B2C &amp; B2A',
    'SLED-ready assets with rigorous
                                    compliance &amp; accessibility' => 'Contract-ready SLED bidding for state, local &amp; education authorities',
    'Elite engineering for brands that cannot afford downtime' => 'De-Weboo is a development-first agency and contract-ready SLED bidder',
    'We operate across B2B, B2C, and B2A models—delivering consumer-grade UX, enterprise-grade architecture, and authority-grade compliance from a single partner.' => 'We engineer custom, secure, and compliant web software for B2B, B2C, and B2A frameworks. Primary work: software, web, mobile, and medical systems. Growth & infrastructure services: cloud, SEO, and marketing.',
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

echo "Pass 1 done.\n";
