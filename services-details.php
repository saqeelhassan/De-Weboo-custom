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
                    <li class="white">Service details</li>
                </ul>
                <h1 class="white visible-from-right">Service details</h1>
            </div>
        </div>
        <!-- bread Element -->
        <img loading="lazy" src="/assets/img/element/bread-ele.png" alt="Illustration" class="bread-ele">
    </section>
    <!-- Banner Section Start -->

    <!-- Service Dev Section Start -->
    <section class="services-development-section fix section-padding whitebg">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 pe-5">
                    <div class="common-left-sidebar">
                        <div class="common-left-barbox mb-xl-5 mb-4">
                            <h4 class="black mb-xxl-4 mb-3">
                                Service category
                            </h4>
                            <div class="d-grid gap-2">
                                <a href="/services-details"
                                    class="cate-tags d-flex align-items-center justify-content-between gap-2 fs-seven pra wow fadeInUp"
                                    data-wow-delay=".3s">
                                    Managed IT & infrastructure <i class="fa-solid fa-angle-right"></i>
                                </a>
                                <a href="/services-details"
                                    class="cate-tags d-flex align-items-center justify-content-between gap-2 fs-seven pra wow fadeInUp"
                                    data-wow-delay=".4s">
                                    UI/UX designing <i class="fa-solid fa-angle-right"></i>
                                </a>
                                <a href="/services-details"
                                    class="cate-tags d-flex align-items-center justify-content-between gap-2 fs-seven pra wow fadeInUp"
                                    data-wow-delay=".5s">
                                    Digital marketing <i class="fa-solid fa-angle-right"></i>
                                </a>
                                <a href="/services-details"
                                    class="cate-tags d-flex align-items-center justify-content-between gap-2 fs-seven pra wow fadeInUp"
                                    data-wow-delay=".6s">
                                    Data analytics <i class="fa-solid fa-angle-right"></i>
                                </a>
                                <a href="/services-details"
                                    class="cate-tags d-flex align-items-center justify-content-between gap-2 fs-seven pra wow fadeInUp"
                                    data-wow-delay=".7s">
                                    Security system <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="question-talk-box text-center wow fadeInUp" data-wow-delay=".4s">
                            <h4 class="white mb-xl-4 mb-3">
                                Any questions? <br>
                                Let’s talk
                            </h4>
                            <a href="/contact"
                                class="common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded-2 p3-bg mb-xl-4 mb-4">
                                Let’s Talk <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="#" class="d-flex align-items-center justify-content-center gap-2 fs-six white">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.08443 4.77045L7.84597 6.13502C8.53323 7.36647 8.25734 8.98192 7.17492 10.0643C7.17492 10.0643 7.17492 10.0643 7.17492 10.0643C7.1748 10.0645 5.86209 11.3774 8.24247 13.7578C10.6222 16.1375 11.9351 14.8262 11.9359 14.8254C11.936 14.8253 11.9359 14.8253 11.936 14.8253C13.0184 13.7429 14.6338 13.467 15.8653 14.1543L17.2298 14.9158C19.0893 15.9536 19.3089 18.5614 17.6745 20.1958C16.6923 21.178 15.4892 21.9422 14.1592 21.9926C11.9202 22.0775 8.11782 21.5108 4.30364 17.6966C0.489452 13.8824 -0.0771917 10.0801 0.00768762 7.84111C0.0581084 6.51109 0.822313 5.30794 1.80444 4.32581C3.43891 2.69134 6.04667 2.91095 7.08443 4.77045Z"
                                        fill="white" />
                                    <g opacity="0.65">
                                    </g>
                                </svg>
                                +1 305 882 3730
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="service-details-content">
                        <div class="thumb rounded-3 mb-xl-5 mb-4 wow fadeInUp" data-wow-delay=".4s">
                            <img loading="lazy" src="/assets/img/services/service-details.png" alt="Illustration" class="w-100 rounded-3">
                        </div>
                        <div class="mb-xl-5 mb-4 pb-2">
                            <h3 class="black mb-xl-4 mb-lg-4 mb-3 wow fadeInUp" data-wow-delay=".3s">
                                Custom web design & development
                            </h3>
                            <p class="pra fs-seven mb-3 wow fadeInUp" data-wow-delay=".4s">
                                De-Weboo builds fast, mobile-friendly websites that reflect your brand and convert visitors into customers. We handle strategy, UI/UX, development, and launch—so you get a professional site without the technical headaches.
                            </p>
                            <p class="pra fs-seven wow fadeInUp" data-wow-delay=".5s">
                                From landing pages to full e-commerce platforms, we use modern frameworks, clean code, and SEO best practices. Every project includes responsive design, performance optimization, and post-launch support options.
                            </p>
                        </div>
                        <div class="mb-xl-5 mb-4 pb-sm-2 mb-1">
                            <h4 class="black mb-xxl-4 mb-3 wow fadeInUp" data-wow-delay=".4s">
                                Going beyond the usual
                            </h4>
                            <ul class="about-list d-grid gap-2">
                                <li class="d-flex gap-2">
                                    <span class="icon mt-1 d-center">
                                        <i class="fa-solid fa-check p1-clr fs-eight"></i>
                                    </span>
                                    <div class="fw-semibold black">
                                        <div class="fs-six fw_700 d-block mb-1">
                                            Product quality:
                                        </div>
                                        <p class="fs-seven fw_400 pra">
                                            Pixel-perfect layouts, accessible components, and designs tested on real users before build.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex gap-2">
                                    <span class="icon mt-1 d-center">
                                        <i class="fa-solid fa-check p1-clr fs-eight"></i>
                                    </span>
                                    <div class="fw-semibold black">
                                        <div class="fs-six fw_700 d-block mb-1">
                                            On demand design:
                                        </div>
                                        <p class="fs-seven fw_400 pra">
                                            Flexible design systems that scale as your product and marketing needs grow.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex gap-2">
                                    <span class="icon mt-1 d-center">
                                        <i class="fa-solid fa-check p1-clr fs-eight"></i>
                                    </span>
                                    <div class="fw-semibold black">
                                        <div class="fs-six fw_700 d-block mb-1">
                                            Choice of service:
                                        </div>
                                        <p class="fs-seven fw_400 pra">
                                            Web design, development, SEO, and maintenance packages tailored to your goals and budget.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="quote-box1 mb-lg-5 mb-4 wow fadeInUp" data-wow-delay=".5s">
                            <img loading="lazy" src="/assets/img/icon/quot1.png" alt="Illustration" class="quote">
                            <div class="cont">
                                <h4 class="black mb-sm-4 mb-3">
                                    De-Weboo delivers reliable websites with ongoing support, performance monitoring, and clear communication throughout your project.
                                </h4>
                                <div class="d-flex align-items-center gap-2">
                                    <h5 class="black">Syed Aqeel Hassan Gillani</h5> <span class="fs-eight pra">CEO &amp; Founder</span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-0">
                            <div class="section-title text-start mb-lg-5 mb-4">
                                <h2 class="wow fadeInUp black fw-bold visible-slowly-right" data-wow-delay=".3s">
                                    Frequently asked questions
                                </h2>
                            </div>
                            <div class="accordion accordion-custom05 border-0 d-flex flex-column"
                                id="accordionExample1">
                                <div class="accordion-item active">
                                    <div class="accordion-header" id="headingOne001">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne001" aria-expanded="true"
                                            aria-controls="collapseOne001">
                                            Can De-Weboo help improve my Google rankings?
                                        </button>
                                        <div id="collapseOne001" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne001" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <p class="fs-seven pra">
                                                    Yes. We improve site speed, on-page SEO, structured data, and content strategy to help you rank for keywords that drive qualified leads.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingTwo001">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo001"
                                            aria-expanded="false" aria-controls="collapseTwo001">
                                            How long does a typical website project take?
                                        </button>
                                        <div id="collapseTwo001" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo001" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <p class="fs-seven pra">
                                                    Most projects take 4–12 weeks depending on pages, features, and content readiness. We provide a clear timeline after discovery.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingThree001">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree001"
                                            aria-expanded="false" aria-controls="collapseThree001">
                                            How does your project process work?
                                        </button>
                                        <div id="collapseThree001" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree001" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <p class="fs-seven pra">
                                                    We follow discovery → design → development → QA → launch. You get regular updates, staging previews, and documentation at each milestone.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingfour001">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsefour001"
                                            aria-expanded="false" aria-controls="collapsefour001">
                                            How much does a new website cost?
                                        </button>
                                        <div id="collapsefour001" class="accordion-collapse collapse"
                                            aria-labelledby="headingfour001" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body">
                                                <p class="fs-seven pra">
                                                    Pricing depends on scope—page count, custom features, and integrations. Request a quote and we will send a transparent proposal with no hidden fees.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Dev Section end -->

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
