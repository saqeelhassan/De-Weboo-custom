<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/portfolio-projects.php';
require_once __DIR__ . '/includes/seo.php';

$project = dw_portfolio_project($_GET['project'] ?? null);

if ($project === null) {
    header('Location: portfolio.php', true, 302);
    exit;
}

dw_load_page_seo('portfolio-details');
$page_title = $project['shortName'] . ' | De-Weboo Portfolio';
$page_description = mb_substr($project['overview'], 0, 155) . (mb_strlen($project['overview']) > 155 ? '…' : '');
$page_keywords = 'Sindh WDD Dashboard, government web application, Laravel dashboard, De-Weboo portfolio, B2A public sector';

$coverImage = dw_portfolio_image($project['images']['cover'], 'assets/img/services/portfolio-details.png');
$gallery1 = dw_portfolio_image($project['images']['gallery1'], 'assets/img/services/portfolio-middle1.png');
$gallery2 = dw_portfolio_image($project['images']['gallery2'], 'assets/img/services/portfolio-middle2.png');
$detailUrl = dw_portfolio_url($project['slug']);
$extra_scripts = ['assets/js/portfolio-discuss.js'];

require_once __DIR__ . '/includes/helpers.php';
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
                    <li>
                        <a href="portfolio.php" class="p3-clr">Our portfolio</a>
                    </li>
                    <li class="p3-clr">/</li>
                    <li class="white"><?php echo e($project['shortName']); ?></li>
                </ul>
                <h1 class="white visible-from-right"><?php echo e($project['shortName']); ?></h1>
            </div>
        </div>
        <!-- bread Element -->
        <img loading="lazy" src="assets/img/element/bread-ele.png" alt="Illustration" class="bread-ele">
    </section>
    <!-- Banner Section Start -->

    <!-- Portfolio Details Section -->
    <section class="portfolio-details-section space-top">
        <div class="container">
            <div class="space-bottom">
                <div class="thumb rounded-3 w-100 mb-xl-5 mb-4 wow fadeInUp" data-wow-delay=".3s">
                    <img loading="lazy" src="<?php echo e($coverImage); ?>" alt="<?php echo e($project['fullName']); ?>" class="rounded-3 w-100">
                </div>
                <div class="portfolio-details-info">
                    <div class="item wow fadeInUp" data-wow-delay=".3s">
                        <span class="pra fs-eight d-block mb-1">
                            CLIENT
                        </span>
                        <h6 class="fs-six fw_600 black">
                            <?php echo e($project['client']); ?>
                        </h6>
                    </div>
                    <div class="line"></div>
                    <div class="item wow fadeInUp" data-wow-delay=".5s">
                        <span class="pra fs-eight d-block mb-1">
                            Services
                        </span>
                        <h6 class="fs-six fw_600 black">
                            <?php echo e($project['services']); ?>
                        </h6>
                    </div>
                    <div class="line"></div>
                    <div class="item wow fadeInUp" data-wow-delay=".6s">
                        <span class="pra fs-eight d-block mb-1">
                            Tech Stack
                        </span>
                        <h6 class="fs-six fw_600 black">
                            <?php echo e($project['techStack']); ?>
                        </h6>
                    </div>
                    <div class="line"></div>
                    <div class="item wow fadeInUp" data-wow-delay=".8s">
                        <span class="pra fs-eight d-block mb-xxl-4 mb-3">
                            Project
                        </span>
                        <button type="button"
                            class="common-btn text-nowrap box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p1-bg border-0"
                            data-bs-toggle="modal" data-bs-target="#portfolioDiscussModal">
                            Discuss a similar build <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="mb-lg-5 mb-4">
                <h3 class="black mb-xxl-3 mb-2 visible-from-right">
                    <?php echo e($project['fullName']); ?>
                </h3>
                <p class="fs-seven pra visible-from-bottom">
                    <?php echo e($project['overview']); ?>
                </p>
            </div>
            <div class="mb-lg-5 mb-4">
                <h3 class="black mb-sm-3 mb-2 visible-from-right">
                    Key Features
                </h3>
                <ul class="d-grid gap-lg-2 gap-1 mb-xl-4 mb-3 wow fadeInUp" data-wow-delay=".4s">
                    <?php foreach ($project['keyFeatures'] as $feature) : ?>
                    <li class="d-flex align-items-center gap-2 pra">
                        <i class="fa-solid fa-circle pra fs-8"></i> <?php echo e($feature); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="mb-lg-5 mb-4">
                <h3 class="black mb-sm-3 mb-2 visible-from-right">
                    Technical Highlights &amp; Contributions
                </h3>
                <ul class="d-grid gap-lg-2 gap-1 wow fadeInUp" data-wow-delay=".4s">
                    <?php foreach ($project['technicalHighlights'] as $highlight) : ?>
                    <li class="d-flex align-items-center gap-2 pra">
                        <i class="fa-solid fa-circle pra fs-8"></i> <?php echo e($highlight); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="row g-4">
                <div class="col-md-5">
                    <div class="thumb w-100 h-100 wow fadeInUp" data-wow-delay=".3s">
                        <img loading="lazy" src="<?php echo e($gallery1); ?>" alt="<?php echo e($project['shortName']); ?> — dashboard view" class="rounded-3 w-100 h-100">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="thumb w-100 h-100 wow fadeInUp" data-wow-delay=".5s">
                        <img loading="lazy" src="<?php echo e($gallery2); ?>" alt="<?php echo e($project['shortName']); ?> — data entry interface" class="rounded-3 w-100 h-100">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Details Section -->

    <?php require __DIR__ . '/includes/portfolio-discuss-modal.php'; ?>

    <!-- Faq Section Start -->
    <section class="faq-section section-padding fix">
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
                        <img loading="lazy" src="assets/img/faq/faq-customer.png" alt="Illustration" class="img rounded-circle">
                        <?php require __DIR__ . '/includes/contact-call-block.php'; ?>
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
                                            De-Weboo is an enterprise software engineering firm organized in two service categories. Development &amp; AI Engineering (Web &amp; Mobile Development, AI Automation, and Data Engineering). Secondary — Growth &amp; Infrastructure (Digital Marketing, SEO, and Cloud Services). We operate as a contract-ready SLED bidder for B2B, B2C, and B2A frameworks.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do you build government dashboards like this?
                                </button>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="fs-seven pra">
                                            Yes. We engineer secure web applications, database architecture, and dashboard UI for government agencies and public-sector authorities—including role-based access, audit-ready data pipelines, and regional data-entry workflows mapped to NAICS 541511 and 541512.
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
                                        <p class="fs-seven pra">
                                            We follow discovery, secure architecture, design, development, accessibility testing (Section 508/WCAG), QA, and launch—with documented milestones suitable for commercial and procurement reviews.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    Can we request a capabilities statement?
                                </button>
                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="fs-seven pra">
                                            Yes. Contact us for SLED capability documentation, NAICS-mapped service descriptions, and references for government web application and dashboard engagements.
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
<?php require_once __DIR__ . '/includes/footer.php'; ?>
