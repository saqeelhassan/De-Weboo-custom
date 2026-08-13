<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

$page_title = $page_title ?? 'De-Weboo | Custom Software, Web, Mobile & IT Solutions';
$page_description = $page_description ?? 'Enterprise software firm: Development & AI Engineering (web, mobile, AI, data) plus Growth & Infrastructure (marketing, SEO, cloud).';
$page_author = $page_author ?? 'De-Weboo';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="<?php echo e($page_author); ?>">
    <meta name="description" content="<?php echo e($page_description); ?>">
    <title><?php echo e($page_title); ?></title>
<?php
require_once __DIR__ . '/seo-head.php';
require_once __DIR__ . '/seo-schema.php';
?>
    <!-- LCP image preload (page-specific, set via $extra_preloads before including header.php) -->
<?php
$extra_preloads = $extra_preloads ?? [];
foreach ($extra_preloads as $preload) :
    ?>
    <link rel="preload" as="image" href="<?php echo e($preload['href']); ?>" type="<?php echo e($preload['type']); ?>" fetchpriority="high">
<?php endforeach; ?>

    <!-- Resource hints for third-party origins used at runtime -->
    <link rel="dns-prefetch" href="//www.youtube.com">
    <link rel="preconnect" href="https://www.youtube.com" crossorigin>
    <link rel="dns-prefetch" href="//www.youtube-nocookie.com">

    <link rel="shortcut icon" href="/assets/img/logo/favs.png">

    <!-- Self-hosted fonts (Inter, Plus Jakarta Sans) — no Google Fonts CDN -->
    <link rel="stylesheet" href="/assets/css/fonts.css">

    <!-- Critical CSS — render-blocking (above-fold layout & icons) -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/brand.css">

    <!-- Non-critical CSS — async loaded to unblock render -->
    <link rel="preload" href="/assets/css/animate.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/css/animate.css"></noscript>

    <link rel="preload" href="/assets/css/magnific-popup.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/css/magnific-popup.css"></noscript>

    <link rel="preload" href="/assets/css/meanmenu.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/css/meanmenu.css"></noscript>

    <link rel="preload" href="/assets/css/nice-select.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/css/nice-select.css"></noscript>

<?php
$extra_stylesheets = $extra_stylesheets ?? [];
foreach ($extra_stylesheets as $stylesheet) :
    ?>
    <link rel="stylesheet" href="<?php echo e($stylesheet); ?>">
<?php endforeach; ?>
</head>

<body>
