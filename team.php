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
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="team-items wow fadeInUp" data-wow-delay=".4s">
                        <div class="thumb position-relative w-100 mb-lg-4 mb-3">
                            <img loading="lazy" src="/assets/img/team/aqeel.jpg" alt="Syed Aqeel Hassan Gillani, CEO &amp; Founder" class="w-100">
                            <div
                                class="social-wrapper2 d-flex justify-content-center align-items-center gap-lg-2 gap-1">
                                <a href="https://www.facebook.com/deweboo" target="_blank" rel="noopener noreferrer" class="rounded-2" aria-label="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="rounded-2" aria-label="X (Twitter)">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.3881 7.49266L16.3338 0.825195H14.9249L9.76215 6.61446L5.63871 0.825195H0.882812L7.11826 9.57959L0.882812 16.5715H2.29185L7.7438 10.4578L12.0985 16.5715H16.8544L10.3877 7.49266H10.3881ZM8.45818 9.65672L7.8264 8.78498L2.79954 1.84844H4.96374L9.02047 7.44645L9.65225 8.31819L14.9255 15.5947H12.7613L8.45818 9.65705V9.65672Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/in/aqeel-hassan-gilani/" target="_blank" rel="noopener noreferrer" class="rounded-2" aria-label="LinkedIn">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="rounded-2" aria-label="Pinterest">
                                    <i class="fa-brands fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="black mb-1"><a href="<?php echo e(dw_team_member_url('aqeel')); ?>" class="black">Syed Aqeel Hassan Gillani</a></h4>
                            <span class="fs-seven fw-medium d-block">CEO &amp; Founder</span>
                            <?php $team_view_href = dw_team_member_url('aqeel'); require __DIR__ . '/includes/team-view-button.php'; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="team-items wow fadeInUp" data-wow-delay=".5s">
                        <div class="thumb position-relative w-100 mb-lg-4 mb-3">
                            <img loading="lazy" src="/assets/img/team/asad.jpg" alt="Syed Ali Asad Jafri, DevOps Engineer" class="w-100">
                            <div
                                class="social-wrapper2 d-flex justify-content-center align-items-center gap-lg-2 gap-1">
                                <a href="https://www.facebook.com/deweboo" target="_blank" rel="noopener noreferrer" class="rounded-2" aria-label="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="rounded-2" aria-label="X (Twitter)">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.3881 7.49266L16.3338 0.825195H14.9249L9.76215 6.61446L5.63871 0.825195H0.882812L7.11826 9.57959L0.882812 16.5715H2.29185L7.7438 10.4578L12.0985 16.5715H16.8544L10.3877 7.49266H10.3881ZM8.45818 9.65672L7.8264 8.78498L2.79954 1.84844H4.96374L9.02047 7.44645L9.65225 8.31819L14.9255 15.5947H12.7613L8.45818 9.65705V9.65672Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/in/syed-ali-asad-jafri-34a98b225/" target="_blank" rel="noopener noreferrer" class="rounded-2" aria-label="LinkedIn">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="rounded-2" aria-label="Pinterest">
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
                    <div class="team-items wow fadeInUp" data-wow-delay=".6s">
                        <div class="thumb position-relative w-100 mb-lg-4 mb-3">
                            <img loading="lazy" src="/assets/img/team/naima.jpg" alt="Naima Shahzadi, Project Manager" class="w-100">
                            <div
                                class="social-wrapper2 d-flex justify-content-center align-items-center gap-lg-2 gap-1">
                                <a href="https://www.facebook.com/deweboo" target="_blank" rel="noopener noreferrer" class="rounded-2" aria-label="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="rounded-2" aria-label="X (Twitter)">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.3881 7.49266L16.3338 0.825195H14.9249L9.76215 6.61446L5.63871 0.825195H0.882812L7.11826 9.57959L0.882812 16.5715H2.29185L7.7438 10.4578L12.0985 16.5715H16.8544L10.3877 7.49266H10.3881ZM8.45818 9.65672L7.8264 8.78498L2.79954 1.84844H4.96374L9.02047 7.44645L9.65225 8.31819L14.9255 15.5947H12.7613L8.45818 9.65705V9.65672Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/in/naima-shahzadi-5720a7251/" target="_blank" rel="noopener noreferrer" class="rounded-2" aria-label="LinkedIn">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="rounded-2" aria-label="Pinterest">
                                    <i class="fa-brands fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="black mb-1"><a href="<?php echo e(dw_team_member_url('naima')); ?>" class="black">Naima Shahzadi</a></h4>
                            <span class="fs-seven fw-medium d-block">Project Manager</span>
                            <?php $team_view_href = dw_team_member_url('naima'); require __DIR__ . '/includes/team-view-button.php'; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="team-items wow fadeInUp" data-wow-delay=".7s">
                        <div class="thumb position-relative w-100 mb-lg-4 mb-3">
                            <img loading="lazy" src="/assets/img/team/mehroz.jpg" alt="Mehroz Alam, Senior Data Engineer" class="w-100">
                            <div
                                class="social-wrapper2 d-flex justify-content-center align-items-center gap-lg-2 gap-1">
                                <a href="https://www.facebook.com/deweboo" target="_blank" rel="noopener noreferrer" class="rounded-2" aria-label="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="rounded-2" aria-label="X (Twitter)">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.3881 7.49266L16.3338 0.825195H14.9249L9.76215 6.61446L5.63871 0.825195H0.882812L7.11826 9.57959L0.882812 16.5715H2.29185L7.7438 10.4578L12.0985 16.5715H16.8544L10.3877 7.49266H10.3881ZM8.45818 9.65672L7.8264 8.78498L2.79954 1.84844H4.96374L9.02047 7.44645L9.65225 8.31819L14.9255 15.5947H12.7613L8.45818 9.65705V9.65672Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/in/mehrozalam/" target="_blank" rel="noopener noreferrer" class="rounded-2" aria-label="LinkedIn">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="rounded-2" aria-label="Pinterest">
                                    <i class="fa-brands fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="black mb-1"><a href="<?php echo e(dw_team_member_url('mehroz')); ?>" class="black">Mehroz Alam</a></h4>
                            <span class="fs-seven fw-medium d-block">Senior Data Engineer</span>
                            <?php $team_view_href = dw_team_member_url('mehroz'); require __DIR__ . '/includes/team-view-button.php'; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="team-items wow fadeInUp" data-wow-delay=".8s">
                        <div class="thumb position-relative w-100 mb-lg-4 mb-3">
                            <img loading="lazy" src="/assets/img/team/hajra.jpg" alt="Syeda Hajra Batool, HR" class="w-100">
                            <div
                                class="social-wrapper2 d-flex justify-content-center align-items-center gap-lg-2 gap-1">
                                <a href="https://www.facebook.com/deweboo" target="_blank" rel="noopener noreferrer" class="rounded-2" aria-label="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="rounded-2" aria-label="X (Twitter)">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.3881 7.49266L16.3338 0.825195H14.9249L9.76215 6.61446L5.63871 0.825195H0.882812L7.11826 9.57959L0.882812 16.5715H2.29185L7.7438 10.4578L12.0985 16.5715H16.8544L10.3877 7.49266H10.3881ZM8.45818 9.65672L7.8264 8.78498L2.79954 1.84844H4.96374L9.02047 7.44645L9.65225 8.31819L14.9255 15.5947H12.7613L8.45818 9.65705V9.65672Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/in/hajra-batool-syed/" target="_blank" rel="noopener noreferrer" class="rounded-2" aria-label="LinkedIn">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="rounded-2" aria-label="Pinterest">
                                    <i class="fa-brands fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="black mb-1"><a href="<?php echo e(dw_team_member_url('hajra')); ?>" class="black">Syeda Hajra Batool</a></h4>
                            <span class="fs-seven fw-medium d-block">HR</span>
                            <?php $team_view_href = dw_team_member_url('hajra'); require __DIR__ . '/includes/team-view-button.php'; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="team-items wow fadeInUp" data-wow-delay=".9s">
                        <div class="thumb position-relative w-100 mb-lg-4 mb-3">
                            <img loading="lazy" src="/assets/img/team/hamza.jpg" alt="Meer Hamza, Digital Marketing" class="w-100">
                            <div
                                class="social-wrapper2 d-flex justify-content-center align-items-center gap-lg-2 gap-1">
                                <a href="https://www.facebook.com/deweboo" target="_blank" rel="noopener noreferrer" class="rounded-2" aria-label="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="rounded-2" aria-label="X (Twitter)">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.3881 7.49266L16.3338 0.825195H14.9249L9.76215 6.61446L5.63871 0.825195H0.882812L7.11826 9.57959L0.882812 16.5715H2.29185L7.7438 10.4578L12.0985 16.5715H16.8544L10.3877 7.49266H10.3881ZM8.45818 9.65672L7.8264 8.78498L2.79954 1.84844H4.96374L9.02047 7.44645L9.65225 8.31819L14.9255 15.5947H12.7613L8.45818 9.65705V9.65672Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/in/meer-hamza-186a98171/" target="_blank" rel="noopener noreferrer" class="rounded-2" aria-label="LinkedIn">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="rounded-2" aria-label="Pinterest">
                                    <i class="fa-brands fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="black mb-1"><a href="<?php echo e(dw_team_member_url('hamza')); ?>" class="black">Meer Hamza</a></h4>
                            <span class="fs-seven fw-medium d-block">Digital Marketing</span>
                            <?php $team_view_href = dw_team_member_url('hamza'); require __DIR__ . '/includes/team-view-button.php'; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="team-items wow fadeInUp" data-wow-delay="1s">
                        <div class="thumb position-relative w-100 mb-lg-4 mb-3">
                            <img loading="lazy" src="/assets/img/team/faisal.jpg" alt="Faisal Mukhtar, IT Infrastructure &amp; Cloud Systems Specialist" class="w-100">
                            <div
                                class="social-wrapper2 d-flex justify-content-center align-items-center gap-lg-2 gap-1">
                                <a href="https://www.facebook.com/deweboo" target="_blank" rel="noopener noreferrer" class="rounded-2" aria-label="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="rounded-2" aria-label="X (Twitter)">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.3881 7.49266L16.3338 0.825195H14.9249L9.76215 6.61446L5.63871 0.825195H0.882812L7.11826 9.57959L0.882812 16.5715H2.29185L7.7438 10.4578L12.0985 16.5715H16.8544L10.3877 7.49266H10.3881ZM8.45818 9.65672L7.8264 8.78498L2.79954 1.84844H4.96374L9.02047 7.44645L9.65225 8.31819L14.9255 15.5947H12.7613L8.45818 9.65705V9.65672Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/in/hfaisal/" target="_blank" rel="noopener noreferrer" class="rounded-2" aria-label="LinkedIn">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="rounded-2" aria-label="Pinterest">
                                    <i class="fa-brands fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="black mb-1"><a href="<?php echo e(dw_team_member_url('faisal')); ?>" class="black">Faisal Mukhtar</a></h4>
                            <span class="fs-seven fw-medium d-block">IT Infrastructure &amp; Cloud Systems Specialist</span>
                            <?php $team_view_href = dw_team_member_url('faisal'); require __DIR__ . '/includes/team-view-button.php'; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="team-items wow fadeInUp" data-wow-delay="1.1s">
                        <div class="thumb position-relative w-100 mb-lg-4 mb-3">
                            <img loading="lazy" src="/assets/img/team/naimatullah.jpg" alt="Naimat Ullah, Senior PACS &amp; Integration Engineer" class="w-100">
                            <div
                                class="social-wrapper2 d-flex justify-content-center align-items-center gap-lg-2 gap-1">
                                <a href="https://www.facebook.com/deweboo" target="_blank" rel="noopener noreferrer" class="rounded-2" aria-label="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="rounded-2" aria-label="X (Twitter)">
                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.3881 7.49266L16.3338 0.825195H14.9249L9.76215 6.61446L5.63871 0.825195H0.882812L7.11826 9.57959L0.882812 16.5715H2.29185L7.7438 10.4578L12.0985 16.5715H16.8544L10.3877 7.49266H10.3881ZM8.45818 9.65672L7.8264 8.78498L2.79954 1.84844H4.96374L9.02047 7.44645L9.65225 8.31819L14.9255 15.5947H12.7613L8.45818 9.65705V9.65672Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <a href="#" class="rounded-2" aria-label="Pinterest">
                                    <i class="fa-brands fa-pinterest-p"></i>
                                </a>
                            </div>
                        </div>
                        <div class="content">
                            <h4 class="black mb-1"><a href="<?php echo e(dw_team_member_url('naimatullah')); ?>" class="black">Naimat Ullah</a></h4>
                            <span class="fs-seven fw-medium d-block">Senior PACS &amp; Integration Engineer</span>
                            <?php $team_view_href = dw_team_member_url('naimatullah'); require __DIR__ . '/includes/team-view-button.php'; ?>
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
