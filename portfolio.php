<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/portfolio-projects.php';
require_once __DIR__ . '/includes/seo.php';
dw_load_page_seo(basename(__FILE__, '.php'));
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

$portfolioProjects = dw_portfolio_projects();

/** Collapse the granular per-project category into one of the three top-level filter groups. */
function dw_portfolio_filter_group(string $category): string
{
    return match ($category) {
        'SEO' => 'SEO',
        'Marketing' => 'Digital Marketing',
        default => 'Development',
    };
}
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
                    <li class="white">Our portfolio</li>
                </ul>
                <h1 class="white visible-from-right">Our portfolio</h1>
            </div>
        </div>
        <!-- bread Element -->
        <img loading="lazy" src="/assets/img/element/bread-ele.png" alt="Illustration" class="bread-ele">
    </section>
    <!-- Banner Section Start -->

    <!-- Gateway Section Start -->
    <section class="gateway-sections section-padding fix">
        <div class="container custom-container">
            <div class="portfolio-filter d-flex flex-wrap justify-content-center gap-3 mb-5" role="tablist">
                <button type="button" class="portfolio-filter-btn active" data-group="all">All</button>
                <button type="button" class="portfolio-filter-btn" data-group="Development">Development</button>
                <button type="button" class="portfolio-filter-btn" data-group="SEO">SEO</button>
                <button type="button" class="portfolio-filter-btn" data-group="Digital Marketing">Digital Marketing</button>
            </div>
            <div class="row g-4 justify-content-center portfolio-grid">
                <?php foreach ($portfolioProjects as $project) :
                    $cardImage = dw_portfolio_image($project['images']['card']);
                    $detailUrl = dw_portfolio_url($project['slug']);
                    $titleLines = explode(' ', $project['shortName'], 2);
                    $filterGroup = dw_portfolio_filter_group($project['category']);
                    ?>
                <div class="col-md-6 col-lg-4 portfolio-grid-item" data-group="<?php echo e($filterGroup); ?>">
                    <div class="gateway-items rounded-4 w-100">
                        <img loading="lazy" src="<?php echo e($cardImage); ?>" alt="<?php echo e($project['shortName']); ?>" class="w-100 rounded-4">
                        <div class="content">
                            <div class="box-inner p1-bg rounded-circle d-center">
                                <div class="box text-center">
                                    <span class="fs-eight fw-semibold white75 mb-4"><?php echo e($project['category']); ?></span>
                                    <h4 class="white">
                                        <a href="<?php echo e($detailUrl); ?>" class="white">
                                            <?php echo e($titleLines[0]); ?>
                                            <?php if (!empty($titleLines[1])) : ?>
                                            <br>
                                            <?php echo e($titleLines[1]); ?>
                                            <?php endif; ?>
                                        </a>
                                    </h4>
                                </div>
                                <a href="<?php echo e($detailUrl); ?>" class="arrow d-center rounded-circle p3-bg">
                                    <i class="fa-solid fa-arrow-right white"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php
$extra_scripts = ['/assets/js/portfolio-filter.js'];
require_once __DIR__ . '/includes/footer.php';
?>
