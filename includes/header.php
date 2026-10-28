<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';
$assetManifest = json_decode(file_get_contents(__DIR__ . '/assets-manifest.json'), true, 512, JSON_THROW_ON_ERROR);

$page_title = $page_title ?? 'De-Weboo Dev | Custom Software, Web, Mobile & IT Solutions';
$page_description = $page_description ?? 'Enterprise software firm: Development & AI Engineering (web, mobile, AI, data) plus Growth & Infrastructure (marketing, SEO, cloud).';
$page_author = $page_author ?? 'De-Weboo Dev';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QF1GBHX5QM"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-QF1GBHX5QM');
    </script>
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
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://www.google-analytics.com" crossorigin>

    <link rel="shortcut icon" href="/assets/img/logo/favs.png">

    <link rel="stylesheet" href="<?php echo e($assetManifest['critical']); ?>">
    <link rel="preload" href="<?php echo e($assetManifest['deferred']); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<?php echo e($assetManifest['deferred']); ?>"></noscript>

<?php
$extra_stylesheets = $extra_stylesheets ?? [];
foreach ($extra_stylesheets as $stylesheet) :
    ?>
    <link rel="stylesheet" href="<?php echo e(dw_asset($stylesheet)); ?>">
<?php endforeach; ?>
</head>

<body>
