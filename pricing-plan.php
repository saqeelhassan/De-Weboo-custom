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
                    <li class="white">Pricing plans</li>
                </ul>
                <h1 class="white visible-from-right">Pricing plans</h1>
            </div>
        </div>
        <!-- bread Element -->
        <img loading="lazy" src="assets/img/element/bread-ele.png" alt="Illustration" class="bread-ele">
    </section>
    <!-- Banner Section Start -->

    <!-- Pricing Section Start -->
    <section class="pricing-section section-padding bg-white fix">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="pricing-items">
                        <div class="heading">
                            <div class="text-center mb-lg-4 mb-4">
                                <span class="d-inline-block border rounded-2 fw_500 py-2 px-4 fs-seven pra">
                                    Silver
                                </span>
                            </div>
                            <h2
                                class="black d-flex justify-content-center mb-lg-4 mb-4 align-items-start fw-bold text-center">
                                <span class="fs-two">$</span>180
                            </h2>
                            <a href="pricing-plan.php"
                                class="common-btn box-style cmn-style1 w-100 black d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 overflow-hidden bg-color rounded-3">
                                Choose Package
                            </a>
                        </div>
                        <span class="text-decoration-underline pra d-block mb-lg-5 mb-4 text-center mt-3">Get your 30
                            days free trial</span>
                        <ul class="price-list text-center d-grid gap-3">
                            <li class="black fs-seven fw_500">24/7 hours support</li>
                            <li class="line"></li>
                            <li class="black fs-seven fw_500">Dedicated tech expert</li>
                            <li class="line"></li>
                            <li class="black fs-seven fw_500">Full backup system</li>
                            <li class="line"></li>
                            <li class="black fs-seven fw_500">Unlimited database</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="pricing-items active">
                        <div class="heading">
                            <div class="text-center mb-lg-4 mb-4">
                                <span class="d-inline-block border rounded-2 fw_500 py-2 px-4 fs-seven pra">
                                    Golden
                                </span>
                            </div>
                            <h2
                                class="black d-flex justify-content-center mb-lg-4 mb-4 align-items-start fw-bold text-center">
                                <span class="fs-two">$</span>280
                            </h2>
                            <a href="pricing-plan.php"
                                class="common-btn box-style cmn-style1 w-100 black d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 overflow-hidden bg-color rounded-3">
                                Choose Package
                            </a>
                        </div>
                        <span class="text-decoration-underline pra d-block mb-lg-5 mb-4 text-center mt-3">Get your 30
                            days free trial</span>
                        <ul class="price-list text-center d-grid gap-3">
                            <li class="black fs-seven fw_500">24/7 hours support</li>
                            <li class="line"></li>
                            <li class="black fs-seven fw_500">Dedicated tech expert</li>
                            <li class="line"></li>
                            <li class="black fs-seven fw_500">Full backup system</li>
                            <li class="line"></li>
                            <li class="black fs-seven fw_500">Unlimited database</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="pricing-items">
                        <div class="heading">
                            <div class="text-center mb-lg-4 mb-4">
                                <span class="d-inline-block border rounded-2 fw_500 py-2 px-4 fs-seven pra">
                                    Premium
                                </span>
                            </div>
                            <h2
                                class="black d-flex justify-content-center mb-lg-4 mb-4 align-items-start fw-bold text-center">
                                <span class="fs-two">$</span>480
                            </h2>
                            <a href="pricing-plan.php"
                                class="common-btn box-style cmn-style1 w-100 black d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 overflow-hidden bg-color rounded-3">
                                Choose Package
                            </a>
                        </div>
                        <span class="text-decoration-underline pra d-block mb-lg-5 mb-4 text-center mt-3">Get your 30
                            days free trial</span>
                        <ul class="price-list text-center d-grid gap-3">
                            <li class="black fs-seven fw_500">24/7 hours support</li>
                            <li class="line"></li>
                            <li class="black fs-seven fw_500">Dedicated tech expert</li>
                            <li class="line"></li>
                            <li class="black fs-seven fw_500">Full backup system</li>
                            <li class="line"></li>
                            <li class="black fs-seven fw_500">Unlimited database</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faq Section Start -->
    <section class="faq-section space-bottom fix">
        <div class="container">
            <div class="row g-4 justify-content-between">
                <div class="col-lg-6">
                    <div class="section-title pe-xxl-5 mb-lg-5 mb-4">
                        <h6 class="sub-badge4 p1-clr fw-bold fs-seven text-uppercase d-block mb-xl-3 mb-2">
                            OUR QUESTIONS AND ANSWER
                        </h6>
                        <h2 class="wow fadeInUp black fw-bold visible-slowly-right" data-wow-delay=".3s">
                            Answers about working with De-Weboo
                        </h2>
                    </div>
                    <div class="faq-stresh d-flex align-items-center">
                        <?php
                        $call_show_rep = true;
                        require __DIR__ . '/includes/contact-call-block.php';
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion border-0 d-flex flex-column gap-xxl-4 gap-3" id="accordionExample">
                        <div class="accordion-item active">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What services does De-Weboo offer?
                                </button>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="fs-seven pra">
                                            De-Weboo delivers web development, mobile apps, secure cloud architecture, digital marketing, SEO, managed IT, and HIPAA-aligned healthcare IT. We are an official SLED contractor (NAICS 541511, 541512, 541519, 541810 & 541910). Every engagement starts with a structured discovery call.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do you provide website maintenance after launch?
                                </button>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            De-Weboo delivers web development, mobile apps, secure cloud architecture, digital marketing, SEO, managed IT, and HIPAA-aligned healthcare IT. We are an official SLED contractor (NAICS 541511, 541512, 541519, 541810 & 541910). Every engagement starts with a structured discovery call.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How does your project process work?
                                </button>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            De-Weboo delivers web development, mobile apps, secure cloud architecture, digital marketing, SEO, managed IT, and HIPAA-aligned healthcare IT. We are an official SLED contractor (NAICS 541511, 541512, 541519, 541810 & 541910). Every engagement starts with a structured discovery call.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    How much does a new website cost?
                                </button>
                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            De-Weboo delivers web development, mobile apps, secure cloud architecture, digital marketing, SEO, managed IT, and HIPAA-aligned healthcare IT. We are an official SLED contractor (NAICS 541511, 541512, 541519, 541810 & 541910). Every engagement starts with a structured discovery call.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
