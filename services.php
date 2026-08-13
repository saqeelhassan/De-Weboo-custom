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
                    <li class="white">Our Services</li>
                </ul>
                <h1 class="white visible-from-right">Our Services</h1>
            </div>
        </div>
        <!-- bread Element -->
        <img loading="lazy" src="/assets/img/element/bread-ele.png" alt="Illustration" class="bread-ele">
    </section>
    <!-- Banner Section Start -->

    <!-- Service Dev Section Start - Software Developers -->
    <section class="services-development-section fix section-padding bg-color">
        <div class="container">
            <div class="row justify-content-center mb-lg-5 mb-sm-5 mb-4 pb-lg-1">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <span class="sub-badge p1-clr fw-semibold fs-seven text-uppercase d-block mb-3">
                            SOFTWARE DEVELOPERS
                        </span>
                        <p class="pra fs-six fw-semibold wow fadeInUp mb-0" data-wow-delay=".3s">
                            Full-stack engineering, mobile apps, AI/ML, and enterprise systems
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-xl-4 g-3">
                <div class="col-md-6 col-lg-3">
                    <div class="gateway-items d-center border style2 service-development-item service-bg-web rounded-4 w-100">
                        <img loading="lazy" src="/assets/img/icon/se-dev1.png" alt="Illustration"
                            class="mb-4 position-absolute top-0 start-0 m-4">
                        <div class="text-statics px-5 pb-3">
                            <h5 class="white mb-3 fs-five fw_500">Web Development</h5>
                            <a href="/services-details" class="white right-arrow" aria-hidden="true" tabindex="-1"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="/assets/img/icon/se-dev1.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="/services-details" class="white">Web
                                        Development</a></h5>
                                <p class="white mb-3">
Full-stack, front-end, and back-end development services using modern frameworks.
                                </p>
                                <a href="/services-details" class="arrosses d-center rounded-circle whitebg" aria-hidden="true" tabindex="-1">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="gateway-items service-bg-mobile d-center border style2 service-development-item rounded-4 w-100">
                        <img loading="lazy" src="/assets/img/icon/se-dev2.png" alt="Illustration"
                            class="mb-4 position-absolute top-0 start-0 m-4">
                        <div class="text-statics px-5 pb-3">
                            <h5 class="white mb-3 fs-five fw_500">Mobile App Development</h5>
                            <a href="/services-details" class="white right-arrow" aria-hidden="true" tabindex="-1"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="/assets/img/icon/se-dev2.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="/services-details" class="white">Mobile
                                        App Development</a>
                                </h5>
                                <p class="white mb-3">
Native and cross-platform apps for iOS and Android.
                                </p>
                                <a href="/services-details" class="arrosses d-center rounded-circle whitebg" aria-hidden="true" tabindex="-1">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="gateway-items service-bg-ai d-center border style2 service-development-item rounded-4 w-100">
                        <img loading="lazy" src="/assets/img/icon/se-dev3.png" alt="Illustration"
                            class="mb-4 position-absolute top-0 start-0 m-4">
                        <div class="text-statics px-5 pb-3">
                            <h5 class="white mb-3 fs-five fw_500">AI and Machine Learning</h5>
                            <a href="/services-details" class="white right-arrow" aria-hidden="true" tabindex="-1"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="/assets/img/icon/se-dev3.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="/services-details" class="white">AI &amp;
                                        Machine Learning</a></h5>
                                <p class="white mb-3">
Advanced AI solutions to enhance business efficiency.
                                </p>
                                <a href="/services-details" class="arrosses d-center rounded-circle whitebg" aria-hidden="true" tabindex="-1">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="gateway-items service-bg-enterprise d-center border style2 service-development-item rounded-4 w-100">
                        <img loading="lazy" src="/assets/img/icon/se-dev4.png" alt="Illustration"
                            class="mb-4 position-absolute top-0 start-0 m-4">
                        <div class="text-statics px-5 pb-3">
                            <h5 class="white mb-3 fs-five fw_500">Enterprise Software Development</h5>
                            <a href="/services-details" class="white right-arrow" aria-hidden="true" tabindex="-1"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="/assets/img/icon/se-dev4.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="/services-details" class="white">Enterprise
                                        Software Development</a></h5>
                                <p class="white mb-3">
ERP, CRM, and custom enterprise-grade applications.
                                </p>
                                <a href="/services-details" class="arrosses d-center rounded-circle whitebg" aria-hidden="true" tabindex="-1">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="gateway-items service-bg-realestate d-center border style2 service-development-item rounded-4 w-100">
                        <img loading="lazy" src="/assets/img/icon/se-dev1.png" alt="Illustration"
                            class="mb-4 position-absolute top-0 start-0 m-4">
                        <div class="text-statics px-5 pb-3">
                            <h5 class="white mb-3 fs-five fw_500">Real Estate Website Development</h5>
                            <a href="/real-estate-website-development" class="white right-arrow" aria-hidden="true" tabindex="-1"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="/assets/img/icon/se-dev1.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="/real-estate-website-development" class="white">Real Estate
                                        Website Development</a></h5>
                                <p class="white mb-3">
Property listing platforms, IDX/MLS integrations, and agent &amp; brokerage websites built for lead generation.
                                </p>
                                <a href="/real-estate-website-development" class="arrosses d-center rounded-circle whitebg" aria-hidden="true" tabindex="-1">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Dev Section end - Software Developers -->
    <section class="technology-section fix section-padding">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-xl-4 col-lg-9 text-xl-start text-center mb-xl-0 mb-md-3">
                    <div class="growth-path-item">
                        <div class="section-title">
                            <span class="sub-badge p1-clr fw-semibold fs-seven text-uppercase d-block mb-2" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                TECHNOLOGY GROWTH
                            </span>
                            <h2 class="wow fadeInUp black fw-bold visible-slowly-right tech-growth-heading" data-wow-delay=".3s">
                                Enterprise delivery<br>
                                Contract-ready execution
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 text-md-start text-center">
                    <div class="growth-path-item">
                        <div class="boxes">
                            <p class="pra mb-md-4 mb-2 pb-xl-1">
                                <strong>Web Development:</strong> Full-stack, front-end, and back-end development services using modern frameworks.
                            </p>
                            <p class="pra mb-md-4 mb-2 pb-xl-1">
                                <strong>Mobile App Development:</strong> Native and cross-platform apps for iOS and Android.
                            </p>
                            <p class="pra mb-md-4 mb-2 pb-xl-1">
                                <strong>AI and Machine Learning:</strong> Advanced AI solutions to enhance business efficiency.
                            </p>
                            <p class="pra mb-md-4 mb-2 pb-xl-1">
                                <strong>Enterprise Software Development:</strong> ERP, CRM, and custom enterprise-grade applications.
                            </p>
                            <p class="pra">
                                <strong>Real Estate Website Development:</strong> Property listing platforms, IDX/MLS integrations, and agent &amp; brokerage websites.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="growth-path-item company-infowrapper p-0 m-0 bg-transparent">
                        <div class="progress_bar d-grid gap-xxl-4 gap-3">
                            <div class="progress_bar_item">
                                <div class="d-flex align-items-center justify-content-between mb-xxl-2 mb-2">
                                    <div class="item_label black fw-semibold">Web Development</div>
                                    <div class="item_value p1-clr fw-semibold">90%</div>
                                </div>
                                <div class="item_bar">
                                    <div class="progress" data-progress="90" style="width: 90%;"></div>
                                </div>
                            </div>
                            <div class="progress_bar_item">
                                <div class="d-flex align-items-center justify-content-between mb-xxl-2 mb-2">
                                    <div class="item_label black fw-semibold">Mobile App Development</div>
                                    <div class="item_value p1-clr fw-semibold">88%</div>
                                </div>
                                <div class="item_bar">
                                    <div class="progress" data-progress="88" style="width: 88%;"></div>
                                </div>
                            </div>
                            <div class="progress_bar_item">
                                <div class="d-flex align-items-center justify-content-between mb-xxl-2 mb-2">
                                    <div class="item_label black fw-semibold">AI and Machine Learning</div>
                                    <div class="item_value p1-clr fw-semibold">85%</div>
                                </div>
                                <div class="item_bar">
                                    <div class="progress" data-progress="85" style="width: 85%;"></div>
                                </div>
                            </div>
                            <div class="progress_bar_item">
                                <div class="d-flex align-items-center justify-content-between mb-xxl-2 mb-2">
                                    <div class="item_label black fw-semibold">Enterprise Software Development</div>
                                    <div class="item_value p1-clr fw-semibold">92%</div>
                                </div>
                                <div class="item_bar">
                                    <div class="progress" data-progress="92" style="width: 92%;"></div>
                                </div>
                            </div>
                            <div class="progress_bar_item">
                                <div class="d-flex align-items-center justify-content-between mb-xxl-2 mb-2">
                                    <div class="item_label black fw-semibold">Real Estate Website Development</div>
                                    <div class="item_value p1-clr fw-semibold">86%</div>
                                </div>
                                <div class="item_bar">
                                    <div class="progress" data-progress="86" style="width: 86%;"></div>
                                </div>
                            </div>
                            <div class="progress_bar_item">
                                <div class="d-flex align-items-center justify-content-between mb-xxl-2 mb-2">
                                    <div class="item_label black fw-semibold">Full-stack Engineering</div>
                                    <div class="item_value p1-clr fw-semibold">95%</div>
                                </div>
                                <div class="item_bar">
                                    <div class="progress" data-progress="95" style="width: 95%;"></div>
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
                                    <div class="item_label black fw-semibold">Client Satisfaction</div>
                                    <div class="item_value p1-clr fw-semibold">98%</div>
                                </div>
                                <div class="item_bar">
                                    <div class="progress" data-progress="98" style="width: 98%;"></div>
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
                        <img loading="lazy" src="/assets/img/services/techgon-thumb.png" alt="Illustration">
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-6">
                    <div class="techgon-content">
                        <div class="mb-lg-5 mb-4">
                            <h3 class="black mb-lg-3 mb-2 wow fadeInUp" data-wow-delay=".3s">
                                De-Weboo is an enterprise software engineering firm
                            </h3>
                            <p class="fs-seven pra wow fadeInUp" data-wow-delay=".4s">
                                De-Weboo specializes in custom software development, including full-stack web, native mobile apps, advanced AI/ML solutions, and robust enterprise software (ERP, CRM).
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
                                <span class="d-center"><i class="fa-solid fa-plus"></i></span> Scalable teams for enterprise programs
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- ele -->
        <img loading="lazy" src="/assets/img/services/techgon-ele.png" alt="Illustration" class="techgon-ele">
    </section>

    <!-- Sponsor Section Start -->
    <section class="sponsor-section section-padding fix">
        <div class="container">
            <div class="sponsor-wrapper swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <img loading="lazy" src="/assets/img/sponsor/google.png" alt="Illustration">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <img loading="lazy" src="/assets/img/sponsor/amazon.png" alt="Illustration">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <img loading="lazy" src="/assets/img/sponsor/mircrosoft.png" alt="Illustration">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <img loading="lazy" src="/assets/img/sponsor/ola.png" alt="Illustration">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <img loading="lazy" src="/assets/img/sponsor/fedex.png" alt="Illustration">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-item">
                            <img loading="lazy" src="/assets/img/sponsor/walmart.png" alt="Illustration">
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
