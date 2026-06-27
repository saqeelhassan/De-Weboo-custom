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
                        <a href="index.php" class="p3-clr">Home</a>
                    </li>
                    <li class="p3-clr">/</li>
                    <li class="white">Our Services</li>
                </ul>
                <h1 class="white visible-from-right">Our Services</h1>
            </div>
        </div>
        <!-- bread Element -->
        <img loading="lazy" src="assets/img/element/bread-ele.png" alt="Illustration" class="bread-ele">
    </section>
    <!-- Banner Section Start -->

    <!-- Service Dev Section Start -->
    <section class="services-development-section fix section-padding bg-color">
        <div class="container">
            <div class="row justify-content-center mb-lg-5 mb-sm-5 mb-4 pb-lg-1">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <span class="sub-badge p1-clr fw-semibold fs-seven text-uppercase d-block mb-3">
                            SOFTWARE & IT EXPERTISE
                        </span>
                        <p class="pra fs-six fw-semibold wow fadeInUp mb-0" data-wow-delay=".3s">
                            Development &amp; AI Engineering · Growth &amp; Infrastructure
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-xl-4 g-3">
                <div class="col-md-6 col-lg-4">
                    <div class="gateway-items d-center border style2 service-development-item service-bg-web rounded-4 w-100">
                        <img loading="lazy" src="assets/img/icon/se-dev1.png" alt="Illustration"
                            class="mb-4 position-absolute top-0 start-0 m-4">
                        <div class="text-statics px-5 pb-3">
                            <h5 class="white mb-3 fs-five fw_500">Web &amp; Mobile Development</h5>
                            <a href="#" class="white right-arrow"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="assets/img/icon/se-dev1.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="services-details.php" class="white">Web
                                        &amp; Mobile Development</a></h5>
                                <p class="white mb-3">
custom web apps, e-commerce, and secure B2B/B2C/B2A portals under NAICS 541511. Includes high-security medical websites and patient portals.
                                </p>
                                <a href="services-details.php" class="arrosses d-center rounded-circle whitebg">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gateway-items service-bg-mobile d-center border style2 service-development-item rounded-4 w-100">
                        <img loading="lazy" src="assets/img/icon/se-dev2.png" alt="Illustration"
                            class="mb-4 position-absolute top-0 start-0 m-4">
                        <div class="text-statics px-5 pb-3">
                            <h5 class="white mb-3 fs-five fw_500">Mobile App Development</h5>
                            <a href="#" class="white right-arrow"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="assets/img/icon/se-dev2.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="services-details.php" class="white">Mobile
                                        App Development</a>
                                </h5>
                                <p class="white mb-3">
native and cross-platform mobile applications with secure APIs for enterprise, consumer, and public-sector workflows (NAICS 541511).
                                </p>
                                <a href="services-details.php" class="arrosses d-center rounded-circle whitebg">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gateway-items service-bg-ecommerce d-center border style2 service-development-item rounded-4 w-100">
                        <img loading="lazy" src="assets/img/icon/se-dev3.png" alt="Illustration"
                            class="mb-4 position-absolute top-0 start-0 m-4">
                        <div class="text-statics px-5 pb-3">
                            <h5 class="white mb-3 fs-five fw_500">Web &amp; Mobile — E-commerce</h5>
                            <a href="#" class="white right-arrow"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="assets/img/icon/se-dev3.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="services-details.php" class="white">E-commerce
                                        &amp; Custom Apps</a></h5>
                                <p class="white mb-3">
custom software, business logic, and scalable e-commerce backends for B2B, B2C, and B2A delivery models (NAICS 541511).
                                </p>
                                <a href="services-details.php" class="arrosses d-center rounded-circle whitebg">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gateway-items service-bg-medical d-center border style2 service-development-item rounded-4 w-100">
                        <img loading="lazy" src="assets/img/icon/se-dev4.png" alt="Illustration"
                            class="mb-4 position-absolute top-0 start-0 m-4">
                        <div class="text-statics px-5 pb-3">
                            <h5 class="white mb-3 fs-five fw_500">Medical Websites &amp; Portals</h5>
                            <a href="#" class="white right-arrow"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="assets/img/icon/se-dev4.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="services-details.php" class="white">Medical Websites
                                        &amp; Portals</a></h5>
                                <p class="white mb-3">
high-security medical websites, HIPAA-aligned patient portals, and clinical workflows under Web &amp; Mobile Development (NAICS 541511).
                                </p>
                                <a href="services-details.php" class="arrosses d-center rounded-circle whitebg">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gateway-items service-bg-ai d-center border style2 service-development-item rounded-4 w-100">
                        <img loading="lazy" src="assets/img/icon/se-dev2.png" alt="Illustration"
                            class="mb-4 position-absolute top-0 start-0 m-4">
                        <div class="text-statics px-5 pb-3">
                            <h5 class="white mb-3 fs-five fw_500">AI Automation</h5>
                            <a href="contact.php" class="white right-arrow"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="assets/img/icon/se-dev2.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="contact.php" class="white">AI Automation</a>
                                </h5>
                                <p class="white mb-3">
custom AI integrations, workflow automations, and LLM configurations. NAICS 541511 (custom programming for AI integrations and automations).
                                </p>
                                <a href="contact.php" class="arrosses d-center rounded-circle whitebg">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gateway-items service-bg-data d-center border style2 service-development-item rounded-4 w-100">
                        <img loading="lazy" src="assets/img/icon/se-dev3.png" alt="Illustration"
                            class="mb-4 position-absolute top-0 start-0 m-4">
                        <div class="text-statics px-5 pb-3">
                            <h5 class="white mb-3 fs-five fw_500">Data Engineering</h5>
                            <a href="contact.php" class="white right-arrow"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="assets/img/icon/se-dev3.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="contact.php" class="white">Data Engineering</a>
                                </h5>
                                <p class="white mb-3">
secure data pipelines, data architecture, and administrative dashboards. NAICS 541512 (data architecture &amp; pipeline systems design).
                                </p>
                                <a href="contact.php" class="arrosses d-center rounded-circle whitebg">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gateway-items service-bg-cloud d-center border style2 service-development-item rounded-4 w-100">
                        <img loading="lazy" src="assets/img/icon/se-dev5.png" alt="Illustration"
                            class="mb-4 position-absolute top-0 start-0 m-4">
                        <div class="text-statics px-5 pb-3">
                            <h5 class="white mb-3 fs-five fw_500">Cloud Services</h5>
                            <a href="#" class="white right-arrow"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="assets/img/icon/se-dev5.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="services-details.php" class="white">Cloud
                                        Services</a>
                                </h5>
                                <p class="white mb-3">
                                    Secure cloud architecture, migration, and HIPAA-friendly hosting solutions that scale the platforms we engineer.
                                </p>
                                <a href="services-details.php" class="arrosses d-center rounded-circle whitebg">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gateway-items service-bg-marketing d-center border style2 service-development-item rounded-4 w-100">
                        <img loading="lazy" src="assets/img/icon/se-dev6.png" alt="Illustration"
                            class="mb-4 position-absolute top-0 start-0 m-4">
                        <div class="text-statics px-5 pb-3">
                            <h5 class="white mb-3 fs-five fw_500">Digital Marketing</h5>
                            <a href="#" class="white right-arrow"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="assets/img/icon/se-dev4.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="services-details.php"
                                        class="white">Digital Marketing</a>
                                </h5>
                                <p class="white mb-3">
                                    Consumer marketing, lead generation, and campaign strategy. NAICS 541810 (Advertising Agencies) and NAICS 541910 (Marketing Research).
                                </p>
                                <a href="services-details.php" class="arrosses d-center rounded-circle whitebg">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gateway-items service-bg-seo d-center border style2 service-development-item rounded-4 w-100">
                        <img loading="lazy" src="assets/img/icon/se-dev4.png" alt="Illustration"
                            class="mb-4 position-absolute top-0 start-0 m-4">
                        <div class="text-statics px-5 pb-3">
                            <h5 class="white mb-3 fs-five fw_500">SEO</h5>
                            <a href="#" class="white right-arrow"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="assets/img/icon/se-dev4.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="services-details.php"
                                        class="white">SEO</a>
                                </h5>
                                <p class="white mb-3">
                                    Technical SEO, AEO content strategy, and specialized medical and healthcare SEO. NAICS 541810 &amp; 541910.
                                </p>
                                <a href="services-details.php" class="arrosses d-center rounded-circle whitebg">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gateway-items service-bg-sled d-center border style2 service-development-item rounded-4 w-100">
                        <img loading="lazy" src="assets/img/icon/se-dev3.png" alt="Illustration"
                            class="mb-4 position-absolute top-0 start-0 m-4">
                        <div class="text-statics px-5 pb-3">
                            <h5 class="white mb-3 fs-five fw_500">SLED Bidder</h5>
                            <a href="contact.php" class="white right-arrow"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="assets/img/icon/se-dev3.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="contact.php" class="white">SLED Bidder</a></h5>
                                <p class="white mb-3">
                                    Contract-ready SLED bidder for state, local, and education authorities—NAICS-mapped software, web, mobile, and IT with Section 508 / WCAG accessibility.
                                </p>
                                <a href="contact.php" class="arrosses d-center rounded-circle whitebg">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Dev Section end -->

    <!-- Technology Section start -->
    <section class="techlogy-groth-section fix space-top">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-xl-4 col-lg-9 text-xl-start text-center mb-xl-0 mb-md-3">
                    <div class="growth-path-item">
                        <div class="section-title">
                            <span class="sub-badge p1-clr fw-semibold fs-seven text-uppercase d-block mb-2">
                                TECHNOLOGY GROWTH
                            </span>
                            <h2 class="wow fadeInUp black fw-bold visible-slowly-right tech-growth-heading" data-wow-delay=".3s">
                                Enterprise delivery<br>
                                SLED-ready execution
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 text-md-start text-center">
                    <div class="growth-path-item">
                        <div class="boxes">
                            <p class="pra mb-md-4 mb-2 pb-xl-1">
                                <strong>Development &amp; AI Engineering:</strong> Web &amp; Mobile Development, AI Automation, and Data Engineering—for B2B, B2C, and B2A frameworks.
                            </p>
                            <p class="pra mb-md-4 mb-2 pb-xl-1">
                                <strong>Growth &amp; Infrastructure:</strong> Digital Marketing, SEO, and Cloud Services—as a contract-ready SLED bidder (NAICS 541810, 541910 &amp; 541512).
                            </p>
                            <p class="pra mb-md-4 mb-2 pb-xl-1">
                                <strong>SLED Bidder:</strong> Contract-ready government procurement, NAICS-aligned capabilities, and Section 508 / WCAG accessibility for public-sector delivery.
                            </p>
                            <p class="pra">
                                <strong>Custom Medical Systems:</strong> HIPAA-aligned websites, patient portals, and healthcare UX for regulated B2B and B2A environments.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="growth-path-item company-infowrapper p-0 m-0 bg-transparent">
                        <div class="progress_bar d-grid gap-xxl-4 gap-3">
                            <div class="progress_bar_item">
                                <div class="d-flex align-items-center justify-content-between mb-xxl-2 mb-2">
                                    <div class="item_label black fw-semibold">Web &amp; Mobile Development</div>
                                    <div class="item_value p1-clr fw-semibold">90%</div>
                                </div>
                                <div class="item_bar">
                                    <div class="progress" data-progress="90" style="width: 90%;"></div>
                                </div>
                            </div>
                            <div class="progress_bar_item">
                                <div class="d-flex align-items-center justify-content-between mb-xxl-2 mb-2">
                                    <div class="item_label black fw-semibold">AI Automation</div>
                                    <div class="item_value p1-clr fw-semibold">85%</div>
                                </div>
                                <div class="item_bar">
                                    <div class="progress" data-progress="85" style="width: 85%;"></div>
                                </div>
                            </div>
                            <div class="progress_bar_item">
                                <div class="d-flex align-items-center justify-content-between mb-xxl-2 mb-2">
                                    <div class="item_label black fw-semibold">Data Engineering</div>
                                    <div class="item_value p1-clr fw-semibold">85%</div>
                                </div>
                                <div class="item_bar">
                                    <div class="progress" data-progress="85" style="width: 85%;"></div>
                                </div>
                            </div>
                            <div class="progress_bar_item">
                                <div class="d-flex align-items-center justify-content-between mb-xxl-2 mb-2">
                                    <div class="item_label black fw-semibold">Digital Marketing</div>
                                    <div class="item_value p1-clr fw-semibold">80%</div>
                                </div>
                                <div class="item_bar">
                                    <div class="progress" data-progress="80" style="width: 80%;"></div>
                                </div>
                            </div>
                            <div class="progress_bar_item">
                                <div class="d-flex align-items-center justify-content-between mb-xxl-2 mb-2">
                                    <div class="item_label black fw-semibold">SEO</div>
                                    <div class="item_value p1-clr fw-semibold">80%</div>
                                </div>
                                <div class="item_bar">
                                    <div class="progress" data-progress="80" style="width: 80%;"></div>
                                </div>
                            </div>
                            <div class="progress_bar_item">
                                <div class="d-flex align-items-center justify-content-between mb-xxl-2 mb-2">
                                    <div class="item_label black fw-semibold">SLED Bidder</div>
                                    <div class="item_value p1-clr fw-semibold">90%</div>
                                </div>
                                <div class="item_bar">
                                    <div class="progress" data-progress="90" style="width: 90%;"></div>
                                </div>
                            </div>
                            <div class="progress_bar_item">
                                <div class="d-flex align-items-center justify-content-between mb-xxl-2 mb-2">
                                    <div class="item_label black fw-semibold">Cloud Services</div>
                                    <div class="item_value p1-clr fw-semibold">80%</div>
                                </div>
                                <div class="item_bar">
                                    <div class="progress" data-progress="80" style="width: 80%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Technology Section end -->

    <!-- Techgon -->
    <section class="techgon-section fix space-top position-relative">
        <div class="container">
            <div class="section-title pb-md-5 mb-4 pb-1 text-center">
                <span class="sub-badge p1-clr fw-semibold fs-seven text-uppercase d-block mb-3">
                    WHY CHOOSE DE-WEBOO
                </span>
                <h2 class="wow fadeInUp black fw-bold visible-slowly-right" data-wow-delay=".3s">
                    Why we are different from <br>
                    others company
                </h2>
            </div>
            <div class="row g-6 align-items-xxl-center">
                <div class="col-xxl-8 col-xl-6 col-lg-6">
                    <div class="techgon-thumb">
                        <img loading="lazy" src="assets/img/services/techgon-thumb.png" alt="Illustration">
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-6">
                    <div class="techgon-content">
                        <div class="mb-lg-5 mb-4">
                            <h3 class="black mb-lg-3 mb-2 wow fadeInUp" data-wow-delay=".3s">
                                De-Weboo is an enterprise software engineering firm and contract-ready SLED bidder
                            </h3>
                            <p class="fs-seven pra wow fadeInUp" data-wow-delay=".4s">
                                Development &amp; AI Engineering: Web &amp; Mobile Development, AI Automation (NAICS 541511), and Data Engineering (NAICS 541512). Growth &amp; Infrastructure: Digital Marketing, SEO (NAICS 541810 &amp; 541910), and Cloud Services. Contract-ready SLED bidder.
                            </p>
                        </div>
                        <ul class="d-grid gap-3">
                            <li class="d-flex align-items-center gap-2 fs-six fw_500 black wow fadeInUp"
                                data-wow-delay=".5s">
                                <span class="d-center"><i class="fa-solid fa-plus"></i></span> 24/7 delivery across time zones
                            </li>
                            <li class="d-flex align-items-center gap-2 fs-six fw_500 black wow fadeInUp"
                                data-wow-delay=".6s">
                                <span class="d-center"><i class="fa-solid fa-plus"></i></span> Direct access to senior engineers & strategists
                            </li>
                            <li class="d-flex align-items-center gap-2 fs-six fw_500 black wow fadeInUp"
                                data-wow-delay=".7s">
                                <span class="d-center"><i class="fa-solid fa-plus"></i></span> Rapid mobilization for RFP & sprint timelines
                            </li>
                            <li class="d-flex align-items-center gap-2 fs-six fw_500 black wow fadeInUp"
                                data-wow-delay=".8s">
                                <span class="d-center"><i class="fa-solid fa-plus"></i></span> Scalable teams for enterprise & SLED programs
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- ele -->
        <img loading="lazy" src="assets/img/services/techgon-ele.png" alt="Illustration" class="techgon-ele">
    </section>

    <!-- Sponsor Section Start -->
    <section class="sponsor-section section-padding fix">
        <div class="container">
            <div class="sponsor-wrapper swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <img loading="lazy" src="assets/img/sponsor/google.png" alt="Illustration">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <img loading="lazy" src="assets/img/sponsor/amazon.png" alt="Illustration">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <img loading="lazy" src="assets/img/sponsor/mircrosoft.png" alt="Illustration">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <img loading="lazy" src="assets/img/sponsor/ola.png" alt="Illustration">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <img loading="lazy" src="assets/img/sponsor/fedex.png" alt="Illustration">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <img loading="lazy" src="assets/img/sponsor/walmart.png" alt="Illustration">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sponsor Section end -->

    <!--<< Customer Touch Section Start >>-->
    <section class="customer-touch fix">
        <div class="container">
            <div class="customer-touch-wrap">
                <div class="section-title">
                    <span class="sub-badge white fs-seven text-uppercase d-block mb-2">Ready for enterprise-grade
                        digital delivery?</span>
                    <h2 class="wow fadeInUp white fw-bold visible-slowly-right" data-wow-delay=".3s">
                        Commercial speed. Healthcare security. SLED-ready capabilities.
                    </h2>
                </div>
                <a href="contact.php"
                    class="common-btn text-nowrap heading-font box-style d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold black overflow-hidden bg-white rounded100">
                    Get In Touch
                </a>
            </div>
        </div>
    </section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
