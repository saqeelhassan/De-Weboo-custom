<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
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
                        <a href="/" class="p3-clr">Home</a>
                    </li>
                    <li class="p3-clr">/</li>
                    <li class="white">Our team</li>
                </ul>
                <h1 class="white visible-from-right">Our team</h1>
            </div>
        </div>
        <!-- bread Element -->
        <img loading="lazy" src="/assets/img/element/bread-ele.png" alt="Illustration" class="bread-ele">
    </section>
    <!-- Banner Section Start -->

    <!-- Team Section Start -->
    <section class="team-section fix section-padding">
        <div class="container">
            <div class="row justify-content-center g-sm-6 g-4">
<?php $dw_team_delay = 0.4; foreach (dw_team_members() as $dw_team_slug => $dw_team) : ?>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="team-items wow fadeInUp" data-wow-delay="<?php echo e((string) round($dw_team_delay, 1)); ?>s">
                        <div class="team-icon d-center position-relative w-100 mb-lg-4 mb-3">
                            <i class="<?php echo e($dw_team['icon']); ?>" aria-hidden="true"></i>
                        </div>
                        <div class="content">
                            <h4 class="black mb-1"><a href="<?php echo e(dw_team_member_url($dw_team_slug)); ?>" class="black"><?php echo e($dw_team['name']); ?></a></h4>
                            <span class="fs-seven fw-medium d-block"><?php echo e($dw_team['role']); ?></span>
                            <?php $team_view_href = dw_team_member_url($dw_team_slug); require __DIR__ . '/includes/team-view-button.php'; ?>
                        </div>
                    </div>
                </div>
<?php $dw_team_delay += 0.1; endforeach; ?>
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
