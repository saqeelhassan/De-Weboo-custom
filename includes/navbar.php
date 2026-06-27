<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/seo-config.php';
$dw_contact = dw_org_config();

$show_header_top = $show_header_top ?? true;
$header_nav_class = $header_nav_class ?? 'header-1 w-100';
$header_logo_src = $header_logo_src ?? 'assets/img/logo/logo.png';
$nav_search_icon_color_inner = $nav_search_icon_color_inner ?? 'black';
?>
<!-- Preloader Start -->
    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="D" class="letters-loading">
                    D
                </span>
                <span data-text-preloader="e" class="letters-loading">
                    e
                </span>
                <span data-text-preloader="-" class="letters-loading">
                    -
                </span>
                <span data-text-preloader="W" class="letters-loading">
                    W
                </span>
                <span data-text-preloader="e" class="letters-loading">
                    e
                </span>
                <span data-text-preloader="b" class="letters-loading">
                    b
                </span>
                <span data-text-preloader="o" class="letters-loading">
                    o
                </span>
                <span data-text-preloader="o" class="letters-loading">
                    o
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Cursor Pointer -->
    <div class="mouse-follower">
        <span class="cursor-outline"></span>
        <span class="cursor-dot"></span>
    </div>
    <!-- End Cursor Pointer -->

    <?php if (!empty($show_header_top)) : ?>
<!-- Header Top Start -->
    <div class="header-top-section d-lg-block d-none bg-color3 py-2">
        <div class="container">
            <div class="sub-header-wrapper d-flex align-items-center justify-content-between">
                <a href="#" class="d-flex align-items-center gap-2 white fs-eight">
                    <i class="fa-regular fa-clock"></i> Monday - Friday : 8:30 AM to 6:30 PM
                </a>
                <div class="right-top-cont d-flex align-items-center gap-5">
                    <div class="social-custom d-flex align-items-center gap-xl-3 gap-3">
                        <a href="<?php echo e($dw_contact['facebook']); ?>" target="_blank" rel="noopener noreferrer" class=" black"><i class="fab fa-facebook-f white65 fs-six"></i></a>
                        <a href="#" class=" black"><i class="fa-brands fa-twitter white65 fs-six"></i></a>
                        <a href="#" class=" black"><i class="fa-brands fa-linkedin-in white65 fs-six"></i></a>
                        <a href="#" class=" black"><i class="fa-brands fa-instagram white65 fs-six"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Top End -->
<?php endif; ?>


    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-4 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="index.php">
                                <img src="assets/img/logo/logo.png" loading="lazy" alt="De-Weboo logo">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4 class="n900-clr">Contact Info</h4>
                        <ul class="d-grid gap-2 mb-5">
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Pakistan</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:Info@deweboo.com"><span
                                            class="mailto:Info@deweboo.com">Info@deweboo.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" rel="noopener noreferrer" href="https://wa.me/<?php echo e(preg_replace('/\D+/', '', $dw_contact['telephone'])); ?>">WhatsApp us · <?php echo e($dw_contact['telephoneDisplay']); ?></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:<?php echo e($dw_contact['telephone']); ?>"><?php echo e($dw_contact['telephoneDisplay']); ?></a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="contact.php" class="theme-btn p2-bg text-center">
                                <span>
                                    Get A Quote
                                    <span class="ani-arrow">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="<?php echo e($dw_contact['facebook']); ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Section Start -->
    <header id="header-sticky" class="<?php echo e($header_nav_class); ?>">
        <div class="container">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a href="index.php" class="header-logo">
                                <img src="<?php echo e($header_logo_src); ?>" alt="De-Weboo logo">
                            </a>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">
                        <div class="mean__menu-wrapper">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active">
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="about.php">About Us</a>
                                        </li>
                                        <li>
                                            <a href="collaboration.php">Collaboration</a>
                                        </li>
                                        <li>
                                            <a href="services.php">Services</a>
                                        </li>

                                        <li>
                                            <a href="portfolio.php">Portfolio</a>
                                        </li>

                                        <li>
                                            <a href="blog.php">Blog</a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <a href="#0" class="search-trigger search-icon d-xl-none d-block">
                            <i class="fa-solid fa-magnifying-glass black"></i>
                        </a>
                        <div class="header__hamburger d-xl-none d-block my-auto">
                            <div class="sidebar__toggle">
                                <img src="assets/img/icon/menu.png" alt="icon">
                            </div>
                        </div>

                    </div>
                    <div class="header-hamburger-inner d-xl-flex gap-xxl-4 gap-xl-3 align-items-center d-none">
                        <a href="#0" class="search-trigger search-icon d-xl-block d-none fs-five">
                            <i class="fa-solid fa-magnifying-glass <?php echo e($nav_search_icon_color_inner); ?>"></i>
                        </a>
                        <a href="contact.php"
                            class="common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg">
                            Get Started
                        </a>
                        <div class="header__hamburger my-auto d-xl-none d-block">
                            <div class="sidebar__toggle">
                                <img src="assets/img/icon/menu.png" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
