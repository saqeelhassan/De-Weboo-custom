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
                    <li class="white">Team details</li>
                </ul>
                <h1 class="white visible-from-right">Team details</h1>
            </div>
        </div>
        <!-- bread Element -->
        <img loading="lazy" src="assets/img/element/bread-ele.png" alt="Illustration" class="bread-ele">
    </section>
    <!-- Banner Section Start -->

    <!-- Team details Section Start -->
    <section class="team-details-section fix section-padding">
        <div class="container">
            <div class="row g-4 align-items-xxl-center space-bottom">
                <div class="col-md-6">
                    <div class="team-details-thumb rounded-3 w-100">
                        <img loading="lazy" src="assets/img/team/team-details-aqeel.jpg" alt="Aqeel, Lead Developer" class="rounded-3 w-100">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="team-details-content ps-xl-5">
                        <div class="mb-xl-5 mb-4 wow fadeInUp" data-wow-delay=".4s">
                            <span class="fs-eight text-uppercase fw_500 d-block mb-1 p1-clr">Lead Developer</span>
                            <h2 class="black mb-2">Aqeel</h2>
                            <h5 class="mb-3">
                                <a href="#" class="p1-clr">hello@website.com</a>
                            </h5>
                            <p class="pra fs-seven">
                                Aqeel leads software development projects, focusing on secure web, mobile, and enterprise architecture for B2B, B2C, and B2A delivery.
                                amet, consectetur adipiscing elit.
                            </p>
                        </div>
                        <div class="more-details mb-xl-5 mb-4 wow fadeInUp" data-wow-delay=".4s">
                            <h4 class="black mb-xxl-3 mb-3">More details</h4>
                            <ul class="d-grid gap-xl-3 gap-2">
                                <li>
                                    <span class="title">Location:</span>
                                    <span class="text">Germany</span>
                                </li>
                                <li>
                                    <span class="title">Position:</span>
                                    <span class="text">Founder & CEO</span>
                                </li>
                                <li>
                                    <span class="title">Email:</span>
                                    <span class="text">Info@deweboo.com</span>
                                </li>
                                <li>
                                    <span class="title">Age:</span>
                                    <span class="text">34</span>
                                </li>
                                <li>
                                    <span class="title">Qualification:</span>
                                    <span class="text">Master Degree</span>
                                </li>
                                <li>
                                    <span class="title">Gender:</span>
                                    <span class="text">Male</span>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex flex-lg-nowrap flex-wrap align-items-center gap-xl-3 gap-2">
                            <div class="social-icon d-flex align-items-center gap-2">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                            <a href="#" class="rounded-5 share-cmn-icon">
                                <svg width="17" height="13" viewBox="0 0 17 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.4668 6.6C1.4668 3.96013 1.4668 2.6402 2.2889 1.8201C3.111 1 4.43415 1 7.08046 1H9.88728C12.5336 1 13.8567 1 14.6788 1.8201C15.5009 2.6402 15.5009 3.96013 15.5009 6.6C15.5009 9.23987 15.5009 10.5598 14.6788 11.3799C13.8567 12.2 12.5336 12.2 9.88728 12.2H7.08045C4.43415 12.2 3.111 12.2 2.2889 11.3799C1.4668 10.5598 1.4668 9.23987 1.4668 6.6Z"
                                        stroke="#49577A" stroke-width="1.5" />
                                    <path
                                        d="M4.27344 3.80005L5.78835 5.0594C7.07713 6.13077 7.72152 6.66646 8.48368 6.66646C9.24584 6.66646 9.89023 6.13078 11.179 5.0594L12.6939 3.80005"
                                        stroke="#49577A" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                                Message
                            </a>
                            <a href="#" class="rounded-5 share-cmn-icon">
                                <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.1 4.90001C11.1281 4.90001 11.9616 4.02696 11.9616 2.95001C11.9616 1.87305 11.1281 1 10.1 1C9.07178 1 8.23828 1.87305 8.23828 2.95001C8.23828 4.02696 9.07178 4.90001 10.1 4.90001Z"
                                        stroke="#49577A" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M2.65465 9.45006C3.68282 9.45006 4.51632 8.57701 4.51632 7.50006C4.51632 6.4231 3.68282 5.55005 2.65465 5.55005C1.62647 5.55005 0.792969 6.4231 0.792969 7.50006C0.792969 8.57701 1.62647 9.45006 2.65465 9.45006Z"
                                        stroke="#49577A" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M10.1 14.0001C11.1281 14.0001 11.9616 13.1271 11.9616 12.0501C11.9616 10.9731 11.1281 10.1001 10.1 10.1001C9.07178 10.1001 8.23828 10.9731 8.23828 12.0501C8.23828 13.1271 9.07178 14.0001 10.1 14.0001Z"
                                        stroke="#49577A" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M4.26172 8.48145L8.50014 11.0685" stroke="#49577A" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.49393 3.93164L4.26172 6.51865" stroke="#49577A" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                Share
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-all-info">
                <div class="section-title mb-xxl-5 mb-4">
                    <h2 class="wow fadeInUp black mb-sm-3 mb-2 fw-bold visible-slowly-right" data-wow-delay=".3s">
                        Aqeel
                    </h2>
                    <p class="pra fs-seven mb-xl-4 mb-3 wow fadeInUp" data-wow-delay=".4s">
                        Aqeel is Lead Developer at De-Weboo with 8+ years of experience building secure web applications, mobile apps, and custom software for enterprise and public-sector clients.
                    </p>
                    <ul class="listing d-grid gap-2 wow fadeInUp" data-wow-delay=".4s">
                        <li class="pra fs-seven">
                            Expert in Figma, responsive UI, and accessibility (WCAG) best practices.
                        </li>
                        <li class="pra fs-seven">
                            Leads user research, wireframing, and prototype testing before development.
                        </li>
                        <li class="pra fs-seven">
                            Collaborates with developers to deliver pixel-perfect, performance-ready interfaces.
                        </li>
                        <li class="pra fs-seven">
                            Passionate about clean design that supports SEO and measurable business outcomes.
                        </li>
                    </ul>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 pe-xxl-5">
                        <h2 class="black mb-xxl-4 mb-sm-3 mb-2 visible-from-right">Check my skills</h2>
                        <p class="pra fs-seven mb-md-4 mb-3 pb-xxl-2 wow fadeInUp">
                            We will help you identify your target market, develop a marketing plan, and grow your
                            customer base.
                        </p>
                        <div class="teco-mail-box d-flex align-items-center gap-xxl-3 gap-2">
                            <div class="icon d-center rounded-circle">
                                <svg width="20" height="17" viewBox="0 0 20 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15 17H5C2 17 0 15.5 0 12V5C0 1.5 2 0 5 0H15C18 0 20 1.5 20 5V12C20 15.5 18 17 15 17Z"
                                        fill="#5135FF" />
                                    <path
                                        d="M9.9988 9.36997C9.1588 9.36997 8.3088 9.10997 7.6588 8.57997L4.5288 6.07997C4.2088 5.81997 4.14881 5.34997 4.4088 5.02997C4.66881 4.70997 5.13881 4.64997 5.45881 4.90997L8.5888 7.40997C9.3488 8.01997 10.6388 8.01997 11.3988 7.40997L14.5288 4.90997C14.8488 4.64997 15.3288 4.69997 15.5788 5.02997C15.8388 5.34997 15.7888 5.82997 15.4588 6.07997L12.3288 8.57997C11.6888 9.10997 10.8388 9.36997 9.9988 9.36997Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <a href="#0" class="fs-seven fw_600 black">
                                Info@deweboo.com
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="growth-path-item company-infowrapper p-0 m-0 bg-transparent">
                            <div class="progress_bar d-grid gap-xxl-4 gap-3">
                                <div class="progress_bar_item">
                                    <div class="d-flex align-items-center justify-content-between mb-xxl-2 mb-2">
                                        <div class="item_label black fw-semibold">Software</div>
                                        <div class="item_value p1-clr fw-semibold">85%</div>
                                    </div>
                                    <div class="item_bar">
                                        <div class="progress" data-progress="90" style="width: 85%;"></div>
                                    </div>
                                </div>
                                <div class="progress_bar_item">
                                    <div class="d-flex align-items-center justify-content-between mb-xxl-2 mb-2">
                                        <div class="item_label black fw-semibold">Development</div>
                                        <div class="item_value p1-clr fw-semibold">55%</div>
                                    </div>
                                    <div class="item_bar">
                                        <div class="progress" data-progress="75" style="width: 55%;"></div>
                                    </div>
                                </div>
                                <div class="progress_bar_item">
                                    <div class="d-flex align-items-center justify-content-between mb-xxl-2 mb-2">
                                        <div class="item_label black fw-semibold">Technology</div>
                                        <div class="item_value p1-clr fw-semibold">95%</div>
                                    </div>
                                    <div class="item_bar">
                                        <div class="progress" data-progress="80" style="width: 95%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">

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

