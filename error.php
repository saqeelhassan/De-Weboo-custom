<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/seo.php';
dw_load_page_seo(basename(__FILE__, '.php'));
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
<!-- Banner Section Start -->
    <section class="breadcrumb-section position-relative fix">
        <div class="container">
            <div class="bread-content text-center">
                <ul class="d-flex align-items-center gap-3 justify-content-center">
                    <li>
                        <a href="/" class="p3-clr">Home</a>
                    </li>
                    <li class="p3-clr">/</li>
                    <li class="white">Error</li>
                </ul>
                <h1 class="white visible-from-right">Error page</h1>
            </div>
        </div>
        <!-- bread Element -->
        <img loading="lazy" src="/assets/img/element/bread-ele.png" alt="Illustration" class="bread-ele">
    </section>
    <!-- Banner Section Start -->

    <!-- Team Section Start -->
    <section class="error-section fix section-padding">
        <div class="container">
            <div class="error-wrapper w-100 text-center">
                <div class="error-thumb mb-4">
                    <img loading="lazy" src="/assets/img/error/erro.png" alt="Illustration" class="w-100">
                </div>
                <h2 class="black mb-4 pb-xxl-4">
                    This page could not be found. Return home or contact De-Weboo for web, cloud, and healthcare IT support.
                </h2>
                <a href="/"
                    class="common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg">
                    Back To Home
                </a>
            </div>
        </div>
    </section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
