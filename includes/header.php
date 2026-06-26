<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

$page_title = $page_title ?? 'De-Weboo | Custom Software, Web, Mobile & IT Solutions';
$page_description = $page_description ?? 'Enterprise software firm: Development & AI Engineering (web, mobile, AI, data) plus Growth & Infrastructure (marketing, SEO, cloud). SLED-ready bidder.';
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
    <link rel="shortcut icon" href="assets/img/logo/favs.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/brand.css">
<?php
$extra_stylesheets = $extra_stylesheets ?? [];
foreach ($extra_stylesheets as $stylesheet) :
    ?>
    <link rel="stylesheet" href="<?php echo e($stylesheet); ?>">
<?php endforeach; ?>
</head>

<body>
