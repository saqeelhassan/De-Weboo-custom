<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/team-members.php';
require_once __DIR__ . '/includes/seo.php';

$member = dw_team_member($_GET['member'] ?? null);

if ($member === null) {
    header('Location: /team', true, 302);
    exit;
}

dw_load_page_seo(basename(__FILE__, '.php'));
$page_title = $member['name'] . ' | ' . $member['role'] . ' | De-Weboo';
$page_canonical = rtrim(dw_site_url(), '/') . dw_team_member_url($member['slug']);
$dw_org = dw_org_config();

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
                    <li><a href="/team" class="p3-clr">Our team</a></li>
                    <li class="p3-clr">/</li>
                    <li class="white"><?php echo e($member['name']); ?></li>
                </ul>
                <h1 class="white visible-from-right"><?php echo e($member['name']); ?></h1>
            </div>
        </div>
        <!-- bread Element -->
        <img loading="lazy" src="/assets/img/element/bread-ele.png" alt="Illustration" class="bread-ele">
    </section>
    <!-- Banner Section Start -->

    <!-- Team details Section Start -->
    <section class="team-details-section fix section-padding">
        <div class="container">
            <div class="row g-4 align-items-xxl-center space-bottom">
                <div class="col-md-6">
                    <div class="team-details-thumb rounded-3 w-100">
                        <img loading="lazy" src="<?php echo e('/' . ltrim($member['detail_image'], '/')); ?>" alt="<?php echo e($member['name']); ?>, <?php echo e($member['role']); ?>" class="rounded-3 w-100">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="team-details-content ps-xl-5">
                        <div class="mb-xl-5 mb-4 wow fadeInUp" data-wow-delay=".4s">
                            <span class="fs-eight text-uppercase fw_500 d-block mb-1 p1-clr"><?php echo e($member['role']); ?></span>
                            <h2 class="black mb-2"><?php echo e($member['name']); ?></h2>
                            <p class="pra fs-seven">
                                <?php echo e($member['intro']); ?>
                            </p>
                        </div>
                        <div class="more-details mb-xl-5 mb-4 wow fadeInUp" data-wow-delay=".4s">
                            <h4 class="black mb-xxl-3 mb-3">More details</h4>
                            <ul class="d-grid gap-xl-3 gap-2">
                                <li>
                                    <span class="title">Location:</span>
                                    <span class="text"><?php echo e($member['location']); ?></span>
                                </li>
                                <li>
                                    <span class="title">Position:</span>
                                    <span class="text"><?php echo e($member['role']); ?></span>
                                </li>
                                <li>
                                    <span class="title">Email:</span>
                                    <span class="text">
                                        <?php foreach ($dw_org['inboundEmails'] as $em) : ?>
                                        <a href="mailto:<?php echo e($em); ?>" class="p1-clr d-block"><?php echo e($em); ?></a>
                                        <?php endforeach; ?>
                                    </span>
                                </li>
                                <li>
                                    <span class="title">Qualification:</span>
                                    <span class="text"><?php echo e($member['qualification']); ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex flex-lg-nowrap flex-wrap align-items-center gap-xl-3 gap-2">
                            <div class="social-icon d-flex align-items-center gap-2">
                                <a href="<?php echo e($dw_org['facebook']); ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" aria-label="X (Twitter)"><i class="fab fa-twitter"></i></a>
                                <a href="<?php echo e($member['linkedin'] ?? '#'); ?>"<?php echo !empty($member['linkedin']) ? ' target="_blank" rel="noopener noreferrer"' : ''; ?>><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                            <a href="mailto:<?php echo e($dw_org['email']); ?>?subject=<?php echo rawurlencode('Message for ' . $member['name'] . ' — De-Weboo'); ?>" class="rounded-5 share-cmn-icon">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-all-info">
                <div class="section-title mb-xxl-5 mb-4">
                    <h2 class="wow fadeInUp black mb-sm-3 mb-2 fw-bold visible-slowly-right" data-wow-delay=".3s">
                        <?php echo e($member['name']); ?>
                    </h2>
                    <p class="pra fs-seven mb-xl-4 mb-3 wow fadeInUp" data-wow-delay=".4s">
                        <?php echo e($member['bio']); ?>
                    </p>
                    <ul class="listing d-grid gap-2 wow fadeInUp" data-wow-delay=".4s">
<?php foreach ($member['highlights'] as $highlight) : ?>
                        <li class="pra fs-seven">
                            <?php echo e($highlight); ?>
                        </li>
<?php endforeach; ?>
                    </ul>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 pe-xxl-5">
                        <h2 class="black mb-xxl-4 mb-sm-3 mb-2 visible-from-right">Check my skills</h2>
                        <p class="pra fs-seven mb-md-4 mb-3 pb-xxl-2 wow fadeInUp">
                            Core strengths <?php echo e($member['name']); ?> brings to De-Weboo <?php echo e(strtolower($member['role'])); ?> engagements.
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
                            <?php foreach ($dw_org['inboundEmails'] as $em) : ?>
                            <a href="mailto:<?php echo e($em); ?>" class="fs-seven fw_600 black d-block">
                                <?php echo e($em); ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="growth-path-item company-infowrapper p-0 m-0 bg-transparent">
                            <div class="progress_bar d-grid gap-xxl-4 gap-3">
<?php foreach ($member['skills'] as $skill) : ?>
                                <div class="progress_bar_item">
                                    <div class="d-flex align-items-center justify-content-between mb-xxl-2 mb-2">
                                        <div class="item_label black fw-semibold"><?php echo e($skill['label']); ?></div>
                                        <div class="item_value p1-clr fw-semibold"><?php echo e((string) $skill['percent']); ?>%</div>
                                    </div>
                                    <div class="item_bar">
                                        <div class="progress" data-progress="<?php echo e((string) $skill['percent']); ?>" style="width: <?php echo e((string) $skill['percent']); ?>%;"></div>
                                    </div>
                                </div>
<?php endforeach; ?>
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
