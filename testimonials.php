<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/testimonials-data.php';
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
                    <li class="white">Testimonials</li>
                </ul>
                <h1 class="white visible-from-right">Testimonials</h1>
            </div>
        </div>
        <!-- bread Element -->
        <img loading="lazy" src="/assets/img/element/bread-ele.png" alt="Illustration" class="bread-ele">
    </section>
    <!-- Banner Section Start -->

    <!-- Testimonial Section end -->
    <section class="testimonial-section section-padding fix">
        <div class="container">
            <div class="row g-4 justify-content-center">
<?php
$testimonialDelays = ['.3s', '.5s', '.7s', '.9s', '.3s', '.5s', '.7s', '.9s', '.3s', '.5s'];
foreach (dw_client_testimonials() as $i => $testimonial) {
    dw_render_testimonial_card($testimonial, 'col-md-6 col-lg-4', $testimonialDelays[$i] ?? '.3s');
}
?>
            </div>
        </div>
    </section>

    <!--<< Customer Touch Section Start >>-->
    <section class="customer-touch fix">
        <div class="container">
            <div class="customer-touch-wrap">
                <div class="section-title">
                    <span class="sub-badge white fs-seven text-uppercase d-block mb-2">Ready for enterprise-grade
                        digital delivery?</span>
                    <h2 class="wow fadeInUp white fw-bold visible-slowly-right" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        Commercial speed. Healthcare security. Enterprise-ready capabilities.
                    </h2>
                </div>
                <a href="/contact"
                    class="common-btn text-nowrap heading-font box-style d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold black overflow-hidden bg-white rounded100">
                    Get In Touch
                </a>
            </div>
        </div>
    </section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
