<?php

declare(strict_types=1);

require_once __DIR__ . '/seo-config.php';

$org = dw_org_config();
$canonical = $page_canonical ?? dw_canonical_url();
$page_keywords = $page_keywords ?? $org['defaultKeywords'];
$page_robots = $page_robots ?? 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';
$page_og_type = $page_og_type ?? 'website';
$og_image = $page_og_image ?? ($org['logo']);
$page_twitter_card = $page_twitter_card ?? 'summary_large_image';
$site_name = 'De-Weboo';
?>
    <meta name="keywords" content="<?php echo e($page_keywords); ?>">
    <meta name="robots" content="<?php echo e($page_robots); ?>">
    <meta name="googlebot" content="<?php echo e($page_robots); ?>">
    <meta name="bingbot" content="<?php echo e($page_robots); ?>">
    <link rel="canonical" href="<?php echo e($canonical); ?>">
    <meta name="theme-color" content="#5135FF">
    <meta name="format-detection" content="telephone=yes">

    <!-- AEO / GEO intent -->
    <meta name="abstract" content="<?php echo e($page_description); ?>">
    <meta name="topic" content="Web and mobile development, AI automation, data pipeline engineering, digital marketing SEO, cloud services, healthcare IT, SLED procurement">
    <meta name="classification" content="ProfessionalService, SoftwareDevelopment, AIAutomation, DataEngineering, GovernmentContractor, HealthcareIT">
    <meta name="coverage" content="Worldwide; B2B; B2C; B2A; SLED; Healthcare">
    <meta name="target" content="enterprise clients, healthcare organizations, SLED buyers, commercial brands">
    <meta name="audience" content="businesses, public sector authorities, healthcare providers, startups">
    <meta name="geo.region" content="PK-SD">
    <meta name="geo.placename" content="Hyderabad, Sindh, Pakistan">
    <meta name="geo.position" content="<?php echo e((string) $org['geo']['latitude']); ?>;<?php echo e((string) $org['geo']['longitude']); ?>">
    <meta name="ICBM" content="<?php echo e((string) $org['geo']['latitude']); ?>, <?php echo e((string) $org['geo']['longitude']); ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="<?php echo e($page_og_type); ?>">
    <meta property="og:site_name" content="<?php echo e($site_name); ?>">
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="<?php echo e($page_title); ?>">
    <meta property="og:description" content="<?php echo e($page_description); ?>">
    <meta property="og:url" content="<?php echo e($canonical); ?>">
    <meta property="og:image" content="<?php echo e($og_image); ?>">
    <meta property="og:image:alt" content="<?php echo e($site_name); ?> — custom software, AI automation & healthcare IT">
    <meta property="og:email" content="<?php echo e($org['email']); ?>">
    <meta property="og:phone_number" content="<?php echo e($org['telephone']); ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="<?php echo e($page_twitter_card); ?>">
    <meta name="twitter:title" content="<?php echo e($page_title); ?>">
    <meta name="twitter:description" content="<?php echo e($page_description); ?>">
    <meta name="twitter:image" content="<?php echo e($og_image); ?>">
    <meta name="twitter:image:alt" content="<?php echo e($site_name); ?> — SLED-ready software & IT agency">
