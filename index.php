<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/portfolio-projects.php';
require_once __DIR__ . '/includes/blog-posts.php';
require_once __DIR__ . '/includes/team-members.php';
require_once __DIR__ . '/includes/seo.php';
require_once __DIR__ . '/includes/home-solution-tabs.php';
$dw_solution_tabs = dw_home_solution_tabs();
dw_load_page_seo(basename(__FILE__, '.php'));
$featuredPortfolioSlots = [
    ['image' => 'assets/img/services/select1.png', 'category' => 'DESIGN', 'title' => 'Technology solution', 'url' => 'portfolio-details.php'],
    ['image' => 'assets/img/services/select2.png', 'category' => 'TECHNOLOGY', 'title' => 'Platform integration', 'url' => 'portfolio-details.php'],
    ['image' => 'assets/img/services/select3.png', 'category' => 'TECHNOLOGY', 'title' => 'Web development', 'url' => 'portfolio-details.php'],
    ['image' => 'assets/img/services/select4.png', 'category' => 'IDEAS', 'title' => 'Smart vision', 'url' => 'portfolio-details.php'],
];
$portfolioSlotIndex = 0;
foreach (dw_portfolio_projects() as $project) {
    if ($portfolioSlotIndex >= count($featuredPortfolioSlots)) {
        break;
    }
    $featuredPortfolioSlots[$portfolioSlotIndex] = [
        'image' => dw_portfolio_image($project['images']['card'], $featuredPortfolioSlots[$portfolioSlotIndex]['image']),
        'category' => $project['category'],
        'title' => $project['shortName'],
        'url' => dw_portfolio_url($project['slug']),
        'alt' => $project['shortName'],
    ];
    $portfolioSlotIndex++;
}
$show_header_top = false;
$header_nav_class = 'header-1 style3 w-100';
$header_logo_src = 'assets/img/logo/logo-white.png';
$nav_search_icon_color_inner = 'white';
$footer_variant = 'style2';
$extra_stylesheets = ['assets/css/home-hero.css'];
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
<!-- Banner Section Start -->
    <section class="banner-section-wrap style3 swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="banner-bg-slide">
                    <div class="container">
                        <div class="banner-content text-center">
                            <span class="hero-badge3 mb-xxl-4 mb-3 d-block white fw_600 text-uppercase hero-badge-lg">
                                Software Engineering · SLED Ready
                            </span>
                            <h1 class="white mb-xxl-3 mb-3 d-block hero-headline-lines">
                                Custom software &amp; IT solutions,<br>
                                contract-ready SLED bidder &amp;<br>
                                secure enterprise IT solutions.
                            </h1>
                            <p class="mb-xxl-4 mb-4 mx-auto hero-lead">
                                <span class="d-block hero-lead-support">Development &amp; AI Engineering. Growth &amp; Infrastructure.</span>
                                <span class="d-block hero-lead-markets">
                                    <span class="hero-market-highlight text-nowrap">B2B, B2C &amp; B2A</span><span class="hero-lead-delivery"> delivery.</span>
                                </span>
                            </p>
                            <div class="d-flex justify-content-center align-items-center gap-sm-3 gap-1">
                                <div class="">
                                    <a href="about.php"
                                        class="common-btn box-style cmn-style1 box-bg w-100 white d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 overflow-hidden rounded-5">
                                        Discover More
                                    </a>
                                </div>
                                <div class="">
                                    <a href="contact.php"
                                        class="common-btn box-style cmn-style1 w-100 white d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 overflow-hidden bg-transparent rounded-5 n0-border">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ele -->
                    <img src="assets/img/element/banner3-ele2.png" alt="Illustration" class="hero-ele1 d-sm-block d-none">
                    <img src="assets/img/element/banner3-ele1.png" alt="Illustration" class="hero-ele2">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner-bg-slide style2">
                    <div class="container">
                        <div class="banner-content text-center">
                            <span class="hero-badge3 mb-xxl-4 mb-3 d-block white fw_600 text-uppercase hero-badge-lg">
                                Mobile &amp; Web Development
                            </span>
                            <h1 class="white mb-xxl-3 mb-3 d-block hero-headline-lines">
                                Custom web apps, mobile apps,<br>
                                e-commerce &amp; high-security<br>
                                medical websites &amp; portals.
                            </h1>
                            <p class="white75 fs-five fw_500 mb-xxl-4 mb-4 mx-auto hero-lead">
                                Web Development under Development &amp; AI Engineering.
                            </p>
                            <div class="d-flex justify-content-center align-items-center gap-sm-3 gap-1">
                                <div class="">
                                    <a href="about.php"
                                        class="common-btn box-style cmn-style1 box-bg w-100 white d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 overflow-hidden rounded-5">
                                        Discover More
                                    </a>
                                </div>
                                <div class="">
                                    <a href="contact.php"
                                        class="common-btn box-style cmn-style1 w-100 white d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 overflow-hidden bg-transparent rounded-5 n0-border">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ele -->
                    <img src="assets/img/element/banner3-ele2.png" alt="Illustration" class="hero-ele1 d-sm-block d-none">
                    <img src="assets/img/element/banner3-ele1.png" alt="Illustration" class="hero-ele2">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="banner-bg-slide style3">
                    <div class="container">
                        <div class="banner-content text-center">
                            <span class="hero-badge3 mb-xxl-4 mb-3 d-block white fw_600 text-uppercase hero-badge-lg">
                                Growth &amp; Infrastructure
                            </span>
                            <h1 class="white mb-xxl-3 mb-3 d-block hero-headline-lines">
                                Digital Marketing, SEO,<br>
                                and secure Cloud Services,<br>
                                HIPAA-friendly hosting &amp; migration.
                            </h1>
                            <p class="white75 fs-five fw_500 mb-xxl-4 mb-4 mx-auto hero-lead">
                                Lifecycle support — Digital Marketing, SEO, and Cloud, separate from development.
                            </p>
                            <div class="d-flex justify-content-center align-items-center gap-sm-3 gap-1">
                                <div class="">
                                    <a href="about.php"
                                        class="common-btn box-style cmn-style1 box-bg w-100 white d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 overflow-hidden rounded-5">
                                        Discover More
                                    </a>
                                </div>
                                <div class="">
                                    <a href="contact.php"
                                        class="common-btn box-style cmn-style1 w-100 white d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 overflow-hidden bg-transparent rounded-5 n0-border">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ele -->
                    <img src="assets/img/element/banner3-ele2.png" alt="Illustration" class="hero-ele1 d-sm-block d-none">
                    <img src="assets/img/element/banner3-ele1.png" alt="Illustration" class="hero-ele2">
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <!-- Banner Section Start -->


    <!-- Event Work Section -->
    <section class="event-work-section fix section-padding whitebg">
        <div class="container">
            <div class="row mb-lg-5 mb-sm-5 mb-4 pb-lg-1">
                <div class="col-lg-7">
                    <div class="section-title">
                        <span class="sub-badge p1-clr fw-semibold fs-seven text-uppercase d-block mb-3">TOPIC CLUSTERS
                        </span>
                        <h2 class="wow fadeInUp black fw-bold visible-slowly-right" data-wow-delay=".3s">
                            What we build first—and what scales it after launch
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-4 event-work-row">
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".3s">
                    <div class="event-work-items text-center">
                        <div class="boxes">
                            <img loading="lazy" src="assets/img/icon/even1.png" alt="Illustration" class="mb-5 m-auto d-block">
                            <span class="pra fs-seven text-uppercase d-block mb-3">Development &amp; AI</span>
                            <h4 class="mb-3">
                                <a href="services.php" class="black">
                                    Web Development
                                </a>
                            </h4>
                            <div class="arrow-area d-flex justify-content-center align-items-center gap-2">
                                <span class="arrow-text p1-clr fs-seven fw_600">Learn More</span>
                                <a href="portfolio-details.php" class="d-center arrows rounded-circle">
                                    <i class="fa-solid fa-arrow-right black"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".5s">
                    <div class="event-work-items text-center">
                        <div class="boxes">
                            <img loading="lazy" src="assets/img/icon/even2.png" alt="Illustration" class="mb-5 m-auto d-block">
                            <span class="pra fs-seven text-uppercase d-block mb-3">AI Automation</span>
                            <h4 class="mb-3">
                                <a href="services.php" class="black">
                                    AI Automation
                                </a>
                            </h4>
                            <div class="arrow-area d-flex justify-content-center align-items-center gap-2">
                                <span class="arrow-text p1-clr fs-seven fw_600">Learn More</span>
                                <a href="portfolio-details.php" class="d-center arrows rounded-circle">
                                    <i class="fa-solid fa-arrow-right black"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".6s">
                    <div class="event-work-items text-center">
                        <div class="boxes">
                            <img loading="lazy" src="assets/img/icon/even2.png" alt="Illustration" class="mb-5 m-auto d-block">
                            <span class="pra fs-seven text-uppercase d-block mb-3">Data Engineering</span>
                            <h4 class="mb-3">
                                <a href="services.php" class="black">
                                    Data Engineering
                                </a>
                            </h4>
                            <div class="arrow-area d-flex justify-content-center align-items-center gap-2">
                                <span class="arrow-text p1-clr fs-seven fw_600">Learn More</span>
                                <a href="portfolio-details.php" class="d-center arrows rounded-circle">
                                    <i class="fa-solid fa-arrow-right black"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".7s">
                    <div class="event-work-items text-center">
                        <div class="boxes">
                            <img loading="lazy" src="assets/img/icon/even1.png" alt="Illustration" class="mb-5 m-auto d-block">
                            <span class="pra fs-seven text-uppercase d-block mb-3">Growth &amp; Infrastructure</span>
                            <h4 class="mb-3">
                                <a href="services.php" class="black">
                                    Digital Marketing, SEO &amp; Cloud
                                </a>
                            </h4>
                            <div class="arrow-area d-flex justify-content-center align-items-center gap-2">
                                <span class="arrow-text p1-clr fs-seven fw_600">Learn More</span>
                                <a href="portfolio-details.php" class="d-center arrows rounded-circle">
                                    <i class="fa-solid fa-arrow-right black"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="our-vission-section p1-bg fix">
        <div class="container">
            <div class="vission-wrapper">
                <div class="vission-left">
                    <p class="white65 fs-seven mb-4 pb-xxl-1 wow fadeInUp" data-wow-delay=".2s">
                        What is De-Weboo? An enterprise software engineering firm that engineers custom, secure, and compliant web software for B2B, B2C, and B2A frameworks—and operates as a contract-ready SLED bidder for state, local, and education authorities.
                    </p>
                    <ul class="d-grid gap-2 mb-xl-5 mb-4">
                        <li class="fs-seven fw_600 white d-flex align-items-center gap-2 wow fadeInUp"
                            data-wow-delay=".3s">
                            <i class="fa-solid fa-circle-check p3-clr"></i> Web Development: custom web apps, mobile apps, e-commerce &amp; medical patient portals
                        </li>
                        <li class="fs-seven fw_600 white d-flex align-items-center gap-2 wow fadeInUp"
                            data-wow-delay=".35s">
                            <i class="fa-solid fa-circle-check p3-clr"></i> AI Automation: custom AI integrations, workflow automations &amp; LLM configs (NAICS 541511)
                        </li>
                        <li class="fs-seven fw_600 white d-flex align-items-center gap-2 wow fadeInUp"
                            data-wow-delay=".38s">
                            <i class="fa-solid fa-circle-check p3-clr"></i> Data Engineering: secure data pipelines &amp; administrative dashboards (NAICS 541512)
                        </li>
                        <li class="fs-seven fw_600 white d-flex align-items-center gap-2 wow fadeInUp"
                            data-wow-delay=".4s">
                            <i class="fa-solid fa-circle-check p3-clr"></i> Digital Marketing, SEO (NAICS 541810 &amp; 541910) &amp; Cloud Services
                        </li>
                    </ul>
                    <div class="btn-area wow fadeInUp" data-wow-delay=".5s">
                        <a href="about.php"
                            class="common-btn box-style cmn-style1 white d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 overflow-hidden bg-transparent rounded-5 n0-border">
                            Discover More
                        </a>
                    </div>
                </div>
                <div class="line"></div>
                <div class="vission-right d-flex gap-sm-4 gap-2">
                    <h2 class="b-title">9</h2>
                    <div class="cont">
                        <span class="p3-bg rounded-5 py-2 px-4 fs-eight white d-inline-block text-uppercase mb-3">
                            Our Vision
                        </span>
                        <p class="white65 fs-seven mb-xxl-5 mb-4 wow fadeInUp" data-wow-delay=".3s">
                            We engineer platforms first, then scale them—Development &amp; AI Engineering first, Growth &amp; Infrastructure second—mapped to NAICS 541511 through 541910.
                        </p>
                        <p class="fs-seven white65 mb-3 wow fadeInUp" data-wow-delay=".5s">
                            Trusted by <span class="white fw_600">200+ clients</span> worldwide
                        </p>
                        <div class="avatar-customer-wrap d-flex align-items-center">
                            <img loading="lazy" src="assets/img/about/vision-customer1.png" alt="Illustration" class="rounded-circle">
                            <img loading="lazy" src="assets/img/about/vision-customer2.png" alt="Illustration" class="rounded-circle">
                            <img loading="lazy" src="assets/img/about/vision-customer3.png" alt="Illustration" class="rounded-circle">
                            <img loading="lazy" src="assets/img/about/vision-customer4.png" alt="Illustration" class="rounded-circle">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ele -->
        <img loading="lazy" src="assets/img/element/vission-ele.png" alt="Illustration" class="vision-ele">
    </section>

    <!-- Solutio Section -->
    <section class="solutio-section fix section-padding">
        <div class="container">
            <ul class="nav nav-tabs solutio-tabs-main mb-xxl-5 mb-4" id="myTab" role="tablist">
<?php foreach ($dw_solution_tabs as $index => $tab) : ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo $index === 0 ? ' active' : ''; ?>" id="<?php echo e($tab['tab_id']); ?>" data-bs-toggle="tab" data-bs-target="#<?php echo e($tab['pane_id']); ?>"
                        type="button" role="tab" aria-controls="<?php echo e($tab['pane_id']); ?>" aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>"><?php echo e($tab['tab_label']); ?></button>
                </li>
<?php endforeach; ?>
            </ul>
            <div class="tab-content" id="myTabContent">
<?php foreach ($dw_solution_tabs as $index => $tab) : ?>
                <div class="tab-pane fade<?php echo $index === 0 ? ' show active' : ''; ?>" id="<?php echo e($tab['pane_id']); ?>" role="tabpanel" aria-labelledby="<?php echo e($tab['tab_id']); ?>">
                    <div class="row g-4 align-items-center justify-content-between">
                        <div class="col-xxl-6 col-lg-6">
<?php dw_render_solution_tab_thumb($tab); ?>
                        </div>
                        <div class="col-xxl-5 col-lg-6">
                            <div class="solutio-content">
                                <h3 class="white mb-xxl-3 mb-2">
                                    <?php echo e($tab['title']); ?>
                                </h3>
                                <p class="white65 fs-six mb-xxl-5 mb-4">
                                    <?php echo e($tab['description']); ?>
                                </p>
                                <ul class="d-grid gap-3 mb-xxl-5 mb-4">
<?php foreach ($tab['bullets'] as $bullet) : ?>
                                    <li class="d-flex align-items-center gap-3 white fs-eight fw_600">
                                        <i class="fa-solid fa-circle-check"></i> <?php echo e($bullet); ?>
                                    </li>
<?php endforeach; ?>
                                </ul>
                                <button type="button"
                                    class="consultation-modal-trigger common-btn box-style cmn-style1 box-bg white d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 overflow-hidden rounded-5 border-0"
                                    data-bs-toggle="modal" data-bs-target="#consultationModal"
                                    data-consultation-service="<?php echo e($tab['consultation_service']); ?>">
                                    Request a Consultation
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
<?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Techgon -->
    <section class="techgon-section fix space-top position-relative">
        <div class="container">
            <div
                class="text-lg-start text-center d-lg-flex d-grid gap-3 flex-lg-nowrap flex-wrap align-items-end justify-content-lg-between justify-content-center pb-md-5 mb-4 pb-2">
                <div class="section-title">
                    <span class="sub-badge p1-clr fw-semibold fs-seven text-uppercase d-block mb-3">
                        WHY CHOOSE DE-WEBOO
                    </span>
                    <h2 class="wow fadeInUp black fw-bold visible-slowly-right" data-wow-delay=".3s">
                        Enterprise IT solutions. Contract-ready SLED delivery.
                    </h2>
                </div>
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
                                Development &amp; AI Engineering: Web Development, AI Automation, and Data Engineering. Growth &amp; Infrastructure: Digital Marketing, SEO, and Cloud Services.
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

    <!-- Service Dev Section Start -->
    <section class="services-development-section fix section-padding bg-color">
        <div class="container">
            <div class="row justify-content-center mb-lg-5 mb-sm-5 mb-4 pb-lg-1">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <span class="sub-badge p1-clr fw-semibold fs-seven text-uppercase d-block mb-3">
                            SOFTWARE & IT EXPERTISE
                        </span>
                        <p class="pra fs-six fw-semibold wow fadeInUp visible-slowly-right mb-0" data-wow-delay=".3s">
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
                            <h5 class="white mb-3 fs-five fw_500">Web Development</h5>
                            <a href="#" class="white right-arrow"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="assets/img/icon/se-dev1.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="services-details.php" class="white">Web
                                        Development</a></h5>
                                <p class="white mb-3">
                                    Custom web apps, e-commerce, and secure B2B/B2C/B2A portals, including high-security medical websites (NAICS 541511).
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
                                    Native and cross-platform mobile applications with secure APIs (NAICS 541511).
                                </p>
                                <a href="services-details.php" class="arrosses d-center rounded-circle whitebg">
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
                            <a href="services.php" class="white right-arrow"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="assets/img/icon/se-dev3.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="services.php" class="white">Data Engineering</a></h5>
                                <p class="white mb-3">
                                    Data Engineering: secure data pipelines, data architecture, and administrative dashboards. NAICS 541512.
                                </p>
                                <a href="services.php" class="arrosses d-center rounded-circle whitebg">
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
                            <h5 class="white mb-3 fs-five fw_500">Custom Medical Systems</h5>
                            <a href="#" class="white right-arrow"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="assets/img/icon/se-dev4.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="services-details.php" class="white">Custom
                                        Medical Systems</a></h5>
                                <p class="white mb-3">
                                    High-security medical websites, HIPAA-aligned patient portals, and clinical workflows (NAICS 541511).
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
                        <img loading="lazy" src="assets/img/icon/se-dev5.png" alt="Illustration"
                            class="mb-4 position-absolute top-0 start-0 m-4">
                        <div class="text-statics px-5 pb-3">
                            <h5 class="white mb-3 fs-five fw_500">AI Automation</h5>
                            <a href="services.php" class="white right-arrow"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="assets/img/icon/se-dev5.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="services.php" class="white">AI Automation</a>
                                </h5>
                                <p class="white mb-3">
                                    AI Automation: custom AI integrations, workflow automations, and LLM configurations. NAICS 541511.
                                </p>
                                <a href="services.php" class="arrosses d-center rounded-circle whitebg">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="gateway-items service-bg-seo d-center border style2 service-development-item rounded-4 w-100">
                        <img loading="lazy" src="assets/img/icon/se-dev6.png" alt="Illustration"
                            class="mb-4 position-absolute top-0 start-0 m-4">
                        <div class="text-statics px-5 pb-3">
                            <h5 class="white mb-3 fs-five fw_500">SEO</h5>
                            <a href="services.php" class="white right-arrow"><i class="fa-solid fa-arrow-right white"></i></a>
                        </div>
                        <div class="content2 d-center text-center">
                            <div class="boxes">
                                <img loading="lazy" src="assets/img/icon/se-dev4.png" alt="Illustration" class="mb-3 img-icon">
                                <h5 class="white mb-3 fs-five fw_500"><a href="services.php"
                                        class="white">SEO</a>
                                </h5>
                                <p class="white mb-3">
                                    SEO: technical SEO, AEO content strategy, and specialized medical/healthcare SEO. NAICS 541810 &amp; 541910. See services page for Digital Marketing.
                                </p>
                                <a href="services.php" class="arrosses d-center rounded-circle whitebg">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-lg-5 mt-4">
                <a href="services.php"
                    class="common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold black overflow-hidden rounded-5 whitebg border">
                    View all services
                </a>
            </div>
        </div>
    </section>
    <!-- Service Dev Section end -->

    <!-- Gateway Section Start -->
    <section class="gateway-section2 section-padding white-bg fix">
        <div class="container">
            <div
                class="text-lg-start text-center d-lg-flex d-grid gap-3 flex-lg-nowrap flex-wrap align-items-end justify-content-lg-between justify-content-center pb-md-5 mb-4 pb-2">
                <div class="section-title">
                    <span class="sub-badge p1-clr fw-semibold fs-seven text-uppercase d-block mb-2">
                        OUR FEATURED PROJECTS
                    </span>
                    <h2 class="wow fadeInUp black fw-bold visible-slowly-right" data-wow-delay=".3s">
                        Selected case studies
                    </h2>
                </div>
                <a href="portfolio.php"
                    class="common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold black overflow-hidden rounded-5 whitebg border">
                    See All Works
                </a>
            </div>
        </div>
        <div class="container-fluid px-4">
            <div class="row g-2">
                <?php foreach ($featuredPortfolioSlots as $slot) : ?>
                <div class="col-lg-3">
                    <div class="gateway-items style2 style3 rounded-4 w-100">
                        <img loading="lazy" src="<?php echo e($slot['image']); ?>" alt="<?php echo e($slot['alt'] ?? $slot['title']); ?>" class="w-100 rounded-4">
                        <div class="cont static">
                            <span class="text-uppercase white75 fs-eight d-block mb-1"><?php echo e($slot['category']); ?></span>
                            <h5 class="white"><?php echo e($slot['title']); ?></h5>
                        </div>
                        <div class="content2">
                            <span class="text-uppercase white75 fs-eight d-block mb-1"><?php echo e($slot['category']); ?></span>
                            <h5 class="white mb-3"><?php echo e($slot['title']); ?></h5>
                            <a href="<?php echo e($slot['url']); ?>"
                                class="d-flex align-items-center gap-2 fs-seven fw_500 white">
                                Explore More <span class="icon d-center"><i class="fas fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Counter Section Start -->
    <section class="custom-counter-section space-bottom fix">
        <div class="container">
            <div class="counter-area1">
                <div class="counter-items d-md-flex d-grid align-items-center gap-3">
                    <div class="content d-flex align-items-center gap-0">
                        <span class="count">20</span>
                        <span>+</span>
                    </div>
                    <p class="fs-six pra">
                        SLED & healthcare
                        projects delivered
                    </p>
                </div>
                <div class="counter-items d-md-flex d-grid align-items-center gap-3">
                    <div class="content d-flex align-items-center gap-0">
                        <span class="count">35</span>
                        <span>K</span>
                    </div>
                    <p class="fs-six pra">
                        Commercial & public-sector
                        engagements
                    </p>
                </div>
                <div class="counter-items d-md-flex d-grid align-items-center gap-3">
                    <div class="content d-flex align-items-center gap-0">
                        <span class="count">98</span>
                        <span>%</span>
                    </div>
                    <p class="fs-six pra">
                        Client satisfaction
                        on secure builds
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section Start -->

    <!-- Industry Section Start -->
    <section class="industry-section fix section-padding">
        <div class="container">
            <div class="section-title-area flex-lg-nowrap flex-wrap align-items-end mb-60 gap-lg-1 gap-3">
                <div class="section-title">
                    <span class="sub-badge p3-clr fw-semibold fs-seven text-uppercase d-block mb-2">
                        INDUSTRY WE ARE SERVING
                    </span>
                    <h2 class="wow fadeInUp white fw-bold visible-slowly-right" data-wow-delay=".3s">
                        Custom development tailored <br>
                        for your industry
                    </h2>
                </div>
                <p class="white75">
                    We engineer software, web, mobile, and medical systems for B2B, B2C, and B2A audiences—then apply lifecycle cloud, SEO, and marketing to scale the platforms we build.
                </p>
            </div>
            <div class="row g-6 justify-content-between">
                <div class="col-xxl-6 col-lg-6">
                    <div class="row g-2">
                        <div class="col-sm-6 col-md-4">
                            <div class="industry-icon d-center rounded-3 d-grid justify-content-center">
                                <img loading="lazy" src="assets/img/icon/indus-banking.png" alt="Illustration" class="mb-3 d-block m-auto">
                                <span class="fs-six fw_500 white75 d-block">
                                    Banking
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="industry-icon d-center rounded-3 d-grid justify-content-center">
                                <img loading="lazy" src="assets/img/icon/indus-care.png" alt="Illustration" class="mb-3 d-block m-auto">
                                <span class="fs-six fw_500 white75 d-block">
                                    Healthcare
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="industry-icon d-center rounded-3 d-grid justify-content-center">
                                <img loading="lazy" src="assets/img/icon/indus-manufaturing.png" alt="Illustration" class="mb-3 d-block m-auto">
                                <span class="fs-six fw_500 white75 d-block">
                                    Manufacturing
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="industry-icon d-center rounded-3 d-grid justify-content-center">
                                <img loading="lazy" src="assets/img/icon/indus-education.png" alt="Illustration" class="mb-3 d-block m-auto">
                                <span class="fs-six fw_500 white75 d-block">
                                    Education
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="industry-icon d-center rounded-3 d-grid justify-content-center">
                                <img loading="lazy" src="assets/img/icon/indus-marketing.png" alt="Illustration" class="mb-3 d-block m-auto">
                                <span class="fs-six fw_500 white75 d-block">
                                    Marketing
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="industry-icon d-center rounded-3 d-grid justify-content-center">
                                <img loading="lazy" src="assets/img/icon/indus-tech.png" alt="Illustration" class="mb-3 d-block m-auto">
                                <span class="fs-six fw_500 white75 d-block">
                                    Technology
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-lg-6">
                    <div
                        class="industry-thumb-inner mt-lg-0 mt-4 d-flex flex-sm-nowrap flex-wrap gap-xxl-5 gap-xl-4 gap-3">
                        <div class="thumb rounded-3">
                            <img loading="lazy" src="assets/img/services/industry-service.png" alt="Illustration" class="rounded-3">
                        </div>
                        <div class="content">
                            <ul class="d-sm-grid d-flex flex-sm-nowrap flex-wrap gap-sm-3 gap-2 mb-4">
                                <li class="d-flex align-items-center gap-2 fs-seven fw_500 white">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4" cy="4" r="3.5" stroke="white" stroke-opacity="0.2" />
                                    </svg>
                                    Software development
                                </li>
                                <li class="d-flex align-items-center gap-2 fs-seven fw_500 white">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4" cy="4" r="3.5" stroke="white" stroke-opacity="0.2" />
                                    </svg>
                                    Medical systems
                                </li>
                                <li class="d-flex align-items-center gap-2 fs-seven fw_500 white">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4" cy="4" r="4" fill="white" />
                                    </svg>
                                    Mobile App Development
                                </li>
                                <li class="d-flex align-items-center gap-2 fs-seven fw_500 white">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4" cy="4" r="3.5" stroke="white" stroke-opacity="0.2" />
                                    </svg>
                                    Cloud lifecycle
                                </li>
                                <li class="d-flex align-items-center gap-2 fs-seven fw_500 white">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4" cy="4" r="3.5" stroke="white" stroke-opacity="0.2" />
                                    </svg>
                                    SLED procurement
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Industry Section end -->

    <!-- Team Section Start -->
    <section class="team-section fix section-padding">
        <div class="container">
            <div class="row justify-content-center mb-lg-5 mb-sm-5 mb-4 pb-lg-1">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <span class="sub-badge p1-clr fw-semibold fs-seven text-uppercase d-block mb-3">OUR EXPERT TEAM
                        </span>
                        <h2 class="wow fadeInUp black fw-bold visible-slowly-right" data-wow-delay=".3s">
                            Meet our digital specialists
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-sm-6 g-4">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="team-items wow fadeInUp" data-wow-delay=".4s">
                        <div class="thumb position-relative w-100 mb-lg-4 mb-3">
                            <img loading="lazy" src="assets/img/team/aqeel.jpg" alt="Syed Aqeel Hassan Gillani, Lead Developer, CEO &amp; Founder" class="w-100">
                            <div
                                class="social-wrapper2 d-flex justify-content-center align-items-center gap-lg-2 gap-1">
                                <a href="https://www.facebook.com/deweboo" target="_blank" rel="noopener noreferrer" class="rounded-2">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="rounded-2">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.3881 7.49266L16.3338 0.825195H14.9249L9.76215 6.61446L5.63871 0.825195H0.882812L7.11826 9.57959L0.882812 16.5715H2.29185L7.7438 10.4578L12.0985 16.5715H16.8544L10.3877 7.49266H10.3881ZM8.45818 9.65672L7.8264 8.78498L2.79954 1.84844H4.96374L9.02047 7.44645L9.65225 8.31819L14.9255 15.5947H12.7613L8.45818 9.65705V9.65672Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/in/aqeel-hassan-gilani/" target="_blank" rel="noopener noreferrer" class="rounded-2">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="rounded-2">
                                    <i class="fa-brands fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="black mb-1"><a href="<?php echo e(dw_team_member_url('aqeel')); ?>" class="black">Syed Aqeel Hassan Gillani</a></h4>
                            <span class="fs-seven fw-medium d-block">Lead Developer, CEO &amp; Founder</span>
                            <?php $team_view_href = dw_team_member_url('aqeel'); require __DIR__ . '/includes/team-view-button.php'; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="team-items wow fadeInUp" data-wow-delay=".4s">
                        <div class="thumb position-relative w-100 mb-lg-4 mb-3">
                            <img loading="lazy" src="assets/img/team/asad.jpg" alt="Syed Ali Asad Jafri, DevOps Engineer" class="w-100">
                            <div
                                class="social-wrapper2 d-flex justify-content-center align-items-center gap-lg-2 gap-1">
                                <a href="https://www.facebook.com/deweboo" target="_blank" rel="noopener noreferrer" class="rounded-2">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="rounded-2">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.3881 7.49266L16.3338 0.825195H14.9249L9.76215 6.61446L5.63871 0.825195H0.882812L7.11826 9.57959L0.882812 16.5715H2.29185L7.7438 10.4578L12.0985 16.5715H16.8544L10.3877 7.49266H10.3881ZM8.45818 9.65672L7.8264 8.78498L2.79954 1.84844H4.96374L9.02047 7.44645L9.65225 8.31819L14.9255 15.5947H12.7613L8.45818 9.65705V9.65672Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/in/syed-ali-asad-jafri-34a98b225/" target="_blank" rel="noopener noreferrer" class="rounded-2">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="rounded-2">
                                    <i class="fa-brands fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="black mb-1"><a href="<?php echo e(dw_team_member_url('asad')); ?>" class="black">Syed Ali Asad Jafri</a></h4>
                            <span class="fs-seven fw-medium d-block">DevOps Engineer</span>
                            <?php $team_view_href = dw_team_member_url('asad'); require __DIR__ . '/includes/team-view-button.php'; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="team-items wow fadeInUp" data-wow-delay=".4s">
                        <div class="thumb position-relative w-100 mb-lg-4 mb-3">
                            <img loading="lazy" src="assets/img/team/hajra.jpg" alt="Syeda Hajra Batool, Project Manager" class="w-100">
                            <div
                                class="social-wrapper2 d-flex justify-content-center align-items-center gap-lg-2 gap-1">
                                <a href="https://www.facebook.com/deweboo" target="_blank" rel="noopener noreferrer" class="rounded-2">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="rounded-2">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.3881 7.49266L16.3338 0.825195H14.9249L9.76215 6.61446L5.63871 0.825195H0.882812L7.11826 9.57959L0.882812 16.5715H2.29185L7.7438 10.4578L12.0985 16.5715H16.8544L10.3877 7.49266H10.3881ZM8.45818 9.65672L7.8264 8.78498L2.79954 1.84844H4.96374L9.02047 7.44645L9.65225 8.31819L14.9255 15.5947H12.7613L8.45818 9.65705V9.65672Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/in/hajra-batool-syed/" target="_blank" rel="noopener noreferrer" class="rounded-2">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="rounded-2">
                                    <i class="fa-brands fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="black mb-1"><a href="<?php echo e(dw_team_member_url('hajra')); ?>" class="black">Syeda Hajra Batool</a></h4>
                            <span class="fs-seven fw-medium d-block">Project Manager</span>
                            <?php $team_view_href = dw_team_member_url('hajra'); require __DIR__ . '/includes/team-view-button.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Working Step Section Start -->
    <section class="working-step-section bg-color fix section-padding">
        <div class="container">
            <div class="section-title-area align-items-end mb-60">
                <div class="section-title">
                    <span class="sub-badge p1-clr fw-semibold fs-seven text-uppercase d-block mb-2">
                        OUR 4 WORKING STEPS
                    </span>
                    <h2 class="wow fadeInUp black fw-bold visible-slowly-right" data-wow-delay=".3s">
                        Our working steps
                    </h2>
                </div>
                <a href="team.php"
                    class="common-btn heading-font box-style d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold black overflow-hidden border rounded100">
                    Learn More
                </a>
            </div>
            <div class="row g-4">
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".3s">
                    <div class="work-learn-item text-center">
                        <div class="thumb-author d-center mb-xl-4 mb-3">
                            <div class="thumb rounded-circle">
                                <img loading="lazy" src="assets/img/team/work-author1.png" alt="Discussion — discovery session with client stakeholders" class="rounded-circle">
                            </div>
                            <span class="serial d-center rounded-circle">
                                01
                            </span>
                        </div>
                        <h4 class="mb-xl-3 mb-2"><a href="team-details.php" class="black">Discussion</a></h4>
                        <p class="fs-seven pra">
                            We align on goals, scope, and timelines in a structured discovery session.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".5s">
                    <div class="work-learn-item text-center">
                        <div class="thumb-author d-center mb-xl-4 mb-3">
                            <div class="thumb rounded-circle">
                                <img loading="lazy" src="assets/img/team/work-author2.png" alt="Ideas and concept — wireframes and UX planning" class="rounded-circle">
                            </div>
                            <span class="serial d-center rounded-circle">
                                02
                            </span>
                        </div>
                        <h4 class="mb-xl-3 mb-2"><a href="team-details.php" class="black">Ideas & concept</a></h4>
                        <p class="fs-seven pra">
                            We create wireframes and visual concepts tailored to your brand and users.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".7s">
                    <div class="work-learn-item text-center">
                        <div class="thumb-author d-center mb-xl-4 mb-3">
                            <div class="thumb rounded-circle">
                                <img loading="lazy" src="assets/img/team/work-author3.png" alt="Testing and trying — QA across devices" class="rounded-circle">
                            </div>
                            <span class="serial d-center rounded-circle">
                                03
                            </span>
                        </div>
                        <h4 class="mb-xl-3 mb-2"><a href="team-details.php" class="black">Testing & trying</a></h4>
                        <p class="fs-seven pra">
                            We test across devices, fix bugs, and optimize performance before go-live.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay=".9s">
                    <div class="work-learn-item text-center">
                        <div class="thumb-author d-center mb-xl-4 mb-3">
                            <div class="thumb rounded-circle">
                                <img loading="lazy" src="assets/img/team/work-author4.png" alt="Execute and install — deployment and go-live" class="rounded-circle">
                            </div>
                            <span class="serial d-center rounded-circle">
                                04
                            </span>
                        </div>
                        <h4 class="mb-xl-3 mb-2"><a href="team-details.php" class="black">Execute & install</a></h4>
                        <p class="fs-seven pra">
                            We deploy, monitor, and provide training so your team can manage content confidently.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Working Step Section end -->

    <!-- Custom Section Start -->
    <section class="tesnology-contact-section whitebg fix">
        <div class="container-fluid p-0">
            <div class="row g-0 align-items-xl-end justify-content-center">
                <div class="col-lg-6 order-lg-0 order-1">
                    <div class="contact-thumb1 w-100 position-relative">
                        <img loading="lazy" src="assets/img/services/solutio-sled.jpg" alt="SLED procurement team reviewing contract-ready IT capabilities for state, local and education authorities" class="w-100">
                        <div class="tesology-info-box">
                            <div class="content d-flex align-items-center gap-0 mb-sm-4 mb-2">
                                <span class="count">5</span>
                            </div>
                            <p>
                                NAICS codes on
                                capability statements.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wirefram-content">
                        <div class="section-title text-lg-start text-center mb-4 pb-xl-3">
                            <span class="sub-badge p1-clr fw-semibold fs-seven text-uppercase d-block mb-3">
                                TECHNOLOGY SOLUTIONS
                            </span>
                            <h2 class="mb-xxl-4 mb-3 wow fadeInUp black fw-bold visible-slowly-right tech-solutions-heading"
                                data-wow-delay=".3s">
                                Enterprise delivery.<br class="d-none d-md-block">
                                SLED-ready execution.
                            </h2>
                            <p class="pra fs-seven">
                                Software, web, mobile &amp; medical systems with Section 508 / WCAG and HIPAA-aligned security for healthcare and public-sector procurement.
                            </p>
                        </div>
                        <div class="row g-4 justify-content-center justify-content-lg-start text-lg-start text-center">
                            <div class="col-lg-6 col-sm-6">
                                <div class="business-items">
                                    <img loading="lazy" src="assets/img/icon/ware1.png" alt="Illustration" class="mb-3">
                                    <h4 class="black mb-md-2 mb-2">
                                        <a href="#0" class="black">Ideas & concept</a>
                                    </h4>
                                    <p class="pra fs-seven">
                                        Discovery, architecture &amp; UX for software, web, mobile &amp; medical systems
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="business-items">
                                    <img loading="lazy" src="assets/img/icon/ware2.png" alt="Illustration" class="mb-3">
                                    <h4 class="black mb-md-2 mb-2">
                                        <a href="#0" class="black">Cloud &amp; SEO</a>
                                    </h4>
                                    <p class="pra fs-seven">
                                        Cloud, SEO &amp; marketing under NAICS 541512, 541810 &amp; 541910
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Custom Section end -->

    <!-- Sponsor Section Start -->
    <section class="sponsor-section space-top fix">
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

<?php require __DIR__ . '/includes/blog-cards-section.php'; ?>
<?php
require __DIR__ . '/includes/consultation-modal.php';
$extra_scripts = ['assets/js/consultation-modal.js'];
require_once __DIR__ . '/includes/footer.php'; ?>
