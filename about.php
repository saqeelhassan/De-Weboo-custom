<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/testimonials-data.php';
require_once __DIR__ . '/includes/blog-posts.php';
require_once __DIR__ . '/includes/team-members.php';
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
                    <li class="white">About Us</li>
                </ul>
                <h1 class="white visible-from-right">About De-Weboo</h1>
            </div>
        </div>
        <!-- bread Element -->
        <img loading="lazy" src="assets/img/element/bread-ele.png" alt="Illustration" class="bread-ele">
    </section>
    <!-- Banner Section Start -->

    <!-- network Section Start -->
    <section class="network-section fix space-top">
        <div class="container">
            <div class="row justify-content-center mb-lg-5 mb-4 pb-3 text-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2 class="wow fadeInUp black fw-bold visible-from-bottom" data-wow-delay=".3s">
                            Enterprise IT solutions for B2B, B2C &amp; B2A delivery
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                    <div class="netwrok-items border-top pt-4">
                        <span class="d-flex align-items-center gap-2 fs-six pra fw-semibold mb-4 pb-lg-3">
                            <i class="fas fa-circle p1-clr fs-eight"></i> Projects delivered on spec
                        </span>
                        <div class="content d-flex align-items-center gap-0 mb-4 pb-xl-3 pb-1">
                            <span class="count">95</span>
                            <span>%</span>
                        </div>
                        <p class="pra fs-seven">
                            Web &amp; Mobile Development under NAICS 541511—custom web apps, mobile apps, e-commerce, and high-security medical websites for B2B, B2C, and B2A.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                    <div class="netwrok-items border-top pt-4">
                        <span class="d-flex align-items-center gap-2 fs-six pra fw-semibold mb-4 pb-lg-3">
                            <i class="fas fa-circle p1-clr fs-eight"></i> AI &amp; data engineering
                        </span>
                        <div class="content d-flex align-items-center gap-0 mb-4 pb-xl-3 pb-1">
                            <span class="count">50</span>
                            <span>+</span>
                        </div>
                        <p class="pra fs-seven">
                            AI Automation under NAICS 541511 (custom AI integrations, workflow automations, LLM configurations) and Data Engineering under NAICS 541512 (secure data pipelines and administrative dashboards).
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".7s">
                    <div class="netwrok-items border-top pt-4">
                        <span class="d-flex align-items-center gap-2 fs-six pra fw-semibold mb-4 pb-lg-3">
                            <i class="fas fa-circle p1-clr fs-eight"></i> Growth &amp; infrastructure
                        </span>
                        <div class="content d-flex align-items-center gap-0 mb-4 pb-xl-3 pb-1">
                            <span class="count">15</span>
                            <span>+</span>
                        </div>
                        <p class="pra fs-seven">
                            Growth &amp; Infrastructure lifecycle support—Digital Marketing, SEO (NAICS 541810 &amp; 541910), and Cloud Services for secure architecture, migration, and HIPAA-friendly hosting.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Start -->
    <section class="about-section style2 fix">
        <div class="about-wrapper section-padding">
            <div class="container">
                <div
                    class="row flex-row-reverse justify-content-lg-between justify-content-center g-4 align-items-center">
                    <div class="col-xl-5 col-lg-7">
                        <div class="about-content">
                            <div class="section-title text-lg-start text-center mb-4">
                                <span class="sub-badge p1-clr fw-semibold fs-seven text-uppercase d-block mb-3">
                                    KNOW ABOUT OUR AGENCY
                                </span>
                                <h2 class="mb-xxl-4 mb-3 wow fadeInUp black fw-bold visible-slowly-right about-agency-heading"
                                    data-wow-delay=".3s">
                                    Enterprise software firm<br>
                                    SLED-ready delivery
                                </h2>
                                <p class="pra fs-seven">
                                    Development &amp; AI Engineering: Web &amp; Mobile Development, AI Automation, and Data Engineering. Growth &amp; Infrastructure: Digital Marketing, SEO, and Cloud Services.
                                </p>
                                <p class="pra fs-seven mt-3">
                                    De-Weboo operates as a specialized division of <a href="https://caddsight.com/" target="_blank" rel="noopener noreferrer" class="p1-clr fw-semibold">CaddSight</a>, our parent company—delivering government-ready CAD drafting, BIM, and SLED construction documentation alongside our digital engineering services.
                                </p>
                            </div>
                            <ul
                                class="about-list d-grid justify-content-center justify-content-lg-start gap-2 border-bottom mb-xl-5 mb-4 pb-xl-5 pb-4">
                                <li class="d-flex align-items-center gap-2">
                                    <span class="icon d-center"><i class="fa-solid fa-check p1-clr fs-eight"></i></span>
                                    <span class="pra fs-seven">
                                        Web &amp; Mobile Development: custom web apps, mobile apps, e-commerce &amp; medical patient portals (NAICS 541511)
                                    </span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="icon d-center"><i class="fa-solid fa-check p1-clr fs-eight"></i></span>
                                    <span class="pra fs-seven">
                                        AI Automation: custom AI integrations, workflow automations &amp; LLM configs (NAICS 541511)
                                    </span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="icon d-center"><i class="fa-solid fa-check p1-clr fs-eight"></i></span>
                                    <span class="pra fs-seven">
                                        Data Engineering: secure data pipelines &amp; administrative dashboards (NAICS 541512)
                                    </span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="icon d-center"><i class="fa-solid fa-check p1-clr fs-eight"></i></span>
                                    <span class="pra fs-seven">
                                        Digital Marketing: consumer marketing &amp; lead generation (NAICS 541810 &amp; 541910)
                                    </span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="icon d-center"><i class="fa-solid fa-check p1-clr fs-eight"></i></span>
                                    <span class="pra fs-seven">
                                        SEO: technical SEO &amp; medical/healthcare SEO (NAICS 541810 &amp; 541910)
                                    </span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="icon d-center"><i class="fa-solid fa-check p1-clr fs-eight"></i></span>
                                    <span class="pra fs-seven">
                                        Cloud Services: secure architecture, migration &amp; HIPAA-friendly hosting
                                    </span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="icon d-center"><i class="fa-solid fa-check p1-clr fs-eight"></i></span>
                                    <span class="pra fs-seven">
                                        SLED bidder · Section 508 / WCAG accessibility
                                    </span>
                                </li>
                            </ul>
                            <div class="custom-circle-progress-bar">
                                <div class="inner d-flex align-items-center gap-xxl-4 gap-sm-3 gap-2">
                                    <div class="card-custom">
                                        <div class="circle percentage1">
                                            <div class="bar"></div>
                                            <div class="box"><span></span></div>
                                        </div>
                                    </div>
                                    <span class="fs-six fw_500 pra">
                                        Clients <br>
                                        satisfaction
                                    </span>
                                </div>
                                <div class="inner d-flex align-items-center gap-xxl-4 gap-sm-3 gap-2">
                                    <div class="card-custom">
                                        <div class="circle percentage2">
                                            <div class="bar"></div>
                                            <div class="box"><span></span></div>
                                        </div>
                                    </div>
                                    <span class="fs-six fw_500 pra">
                                        On time <br>
                                        project done
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="about-thumb position-relative reveal-left w-100">
                            <img loading="lazy" src="assets/img/about/about2-thumb.png" alt="SLED procurement team and CaddSight government-ready CAD documentation" class="w-100">
                            <!-- Ele -->
                            <img loading="lazy" src="assets/img/element/dot-grp1.png" alt="Illustration" class="about-ele">
                            <img loading="lazy" src="assets/img/about/about2-ele.png" alt="Illustration" class="about-ele2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Watch Full Section Start -->
    <section class="watch-full-section position-relative fix">
        <div class="container">
            <div class="watch-full-content">
                <a href="https://www.youtube.com/watch?v=RbQUN4mhxeM"
                    class="portfolio-video rounded-circle d-center video-popup">
                    <i class="fa-solid fa-play"></i>
                </a>
                <h2 class="text-center white">
                    Enterprise-grade development.
                    Contract-ready SLED delivery.
                </h2>
            </div>
        </div>
        <!-- Ele -->
        <img loading="lazy" src="assets/img/element/watch-ele.png" alt="Illustration" class="position-absolute end-0 bottom-0 watch-custom-ele">
    </section>
    <!-- Watch Full Section end -->

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
                <a href="blog.php"
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
                            We start with a discovery session to define goals, audience, and project scope.
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
                            We start with a discovery session to define goals, audience, and project scope.
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
                            We start with a discovery session to define goals, audience, and project scope.
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
                            We start with a discovery session to define goals, audience, and project scope.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Working Step Section end -->

<?php require __DIR__ . '/includes/blog-cards-section.php'; ?>

    <!-- Testimonial Section end -->
    <section class="testimonial-section section-padding fix">
        <div class="container">
            <div class="section-title text-center mb-xxl-5 mb-xl-4 mb-4">
                <span class="sub-badge p1-clr fw-semibold fs-seven text-uppercase d-block mb-3">
                    CLIENT TESTIMONIALS
                </span>
                <h2 class="wow fadeInUp black fw-bold visible-slowly-right" data-wow-delay=".3s">
                    What clients & partners say
                </h2>
            </div>
            <div class="testimonial-wrapper05 swiper">
                <div class="swiper-wrapper">
<?php foreach (dw_client_testimonials() as $testimonial) {
    dw_render_testimonial_slide($testimonial);
} ?>
                </div>
            </div>
            <div
                class="d-flex flex-sm-nowrap flex-wrap text-sm-start text-center justify-content-center align-items-center gap-2 pra fs-seven px-2 mt-lg-5 mt-4">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.7905 15.17C10.5905 15.17 10.4005 15.09 10.2605 14.95L7.84055 12.53C7.55055 12.24 7.55055 11.76 7.84055 11.47C8.13055 11.18 8.61055 11.18 8.90055 11.47L10.7905 13.36L15.0905 9.06003C15.3805 8.77003 15.8605 8.77003 16.1505 9.06003C16.4405 9.35003 16.4405 9.83003 16.1505 10.12L11.3205 14.95C11.1805 15.09 10.9905 15.17 10.7905 15.17Z"
                        fill="#5135FF" />
                    <path
                        d="M12.0009 22.75C11.3709 22.75 10.7409 22.54 10.2509 22.12L8.67086 20.76C8.51086 20.62 8.11086 20.48 7.90086 20.48H6.18086C4.70086 20.48 3.50086 19.28 3.50086 17.8V16.09C3.50086 15.88 3.36086 15.49 3.22086 15.33L1.87086 13.74C1.05086 12.77 1.05086 11.24 1.87086 10.27L3.22086 8.68C3.36086 8.52 3.50086 8.13 3.50086 7.92V6.2C3.50086 4.72 4.70086 3.52 6.18086 3.52H7.91086C8.12086 3.52 8.52086 3.37 8.68086 3.24L10.2609 1.88C11.2409 1.04 12.7709 1.04 13.7509 1.88L15.3309 3.24C15.4909 3.38 15.8909 3.52 16.1009 3.52H17.8009C19.2809 3.52 20.4809 4.72 20.4809 6.2V7.9C20.4809 8.11 20.6309 8.51 20.7709 8.67L22.1309 10.25C22.9709 11.23 22.9709 12.76 22.1309 13.74L20.7709 15.32C20.6309 15.48 20.4809 15.88 20.4809 16.09V17.79C20.4809 19.27 19.2809 20.47 17.8009 20.47H16.1009C15.8909 20.47 15.4909 20.62 15.3309 20.75L13.7509 22.11C13.2609 22.54 12.6309 22.75 12.0009 22.75ZM6.18086 5.02C5.53086 5.02 5.00086 5.55 5.00086 6.2V7.91C5.00086 8.48 4.73086 9.21 4.36086 9.64L3.01086 11.23C2.66086 11.64 2.66086 12.35 3.01086 12.76L4.36086 14.35C4.73086 14.79 5.00086 15.51 5.00086 16.08V17.79C5.00086 18.44 5.53086 18.97 6.18086 18.97H7.91086C8.49086 18.97 9.22086 19.24 9.66086 19.62L11.2409 20.98C11.6509 21.33 12.3709 21.33 12.7809 20.98L14.3609 19.62C14.8009 19.25 15.5309 18.97 16.1109 18.97H17.8109C18.4609 18.97 18.9909 18.44 18.9909 17.79V16.09C18.9909 15.51 19.2609 14.78 19.6409 14.34L21.0009 12.76C21.3509 12.35 21.3509 11.63 21.0009 11.22L19.6409 9.64C19.2609 9.2 18.9909 8.47 18.9909 7.89V6.2C18.9909 5.55 18.4609 5.02 17.8109 5.02H16.1109C15.5309 5.02 14.8009 4.75 14.3609 4.37L12.7809 3.01C12.3709 2.66 11.6509 2.66 11.2409 3.01L9.66086 4.38C9.22086 4.75 8.48086 5.02 7.91086 5.02H6.18086Z"
                        fill="#5135FF" />
                </svg>

                IT Technology service specially built for your business. <span
                    class="p1-clr fw_500 text-decoration-underline">Get
                    Your Solution</span>
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
