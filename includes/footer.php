<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

$footer_variant = $footer_variant ?? 'default';
$newsletter_email = $newsletter_email ?? '';
require_once __DIR__ . '/seo-config.php';
$dw_contact = dw_org_config();
$dw_tel = $dw_contact['telephone'];
$dw_tel_display = $dw_contact['telephoneDisplay'];
$dw_tel_pk = $dw_contact['telephonePK'];
$dw_tel_pk_display = $dw_contact['telephonePKDisplay'];
$dw_whatsapp_display = $dw_contact['whatsappDisplay'];
$dw_whatsapp_url = 'https://wa.me/' . preg_replace('/\D+/', '', $dw_contact['whatsapp']);

if (($footer_variant ?? 'default') === 'style2') :
    ?>
<footer class="footer-section style2 blackbg fix">
        <div class="container">
            <div class="footer-widgets-wrapper">
                <div class="row g-lg-4 g-4 justify-content-between">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="top-rated-pragraph">
                            <a href="#" class="d-block mb-4 pb-lg-2">
                                <img src="/assets/img/logo/logo-white.png" loading="lazy" alt="De-Weboo logo">
                            </a>
                            <p class="white65 mb-4 pb-lg-2">
                                De-Weboo is an enterprise software engineering firm. Medical Software, Web &amp; Mobile Dev · AI Automation, Data Engineering &amp; Cloud, Digital Marketing &amp; SEO—B2B, B2C &amp; B2A.
                            </p>
                            <form method="post" action="<?php echo e(dw_self_path()); ?>" class="form-style1 form-style2 d-flex align-items-center justify-content-between">
                                <i class="fa-regular fa-envelope envelop"></i>
                                <input type="email" name="newsletter_email" autocomplete="email" placeholder="Your email address" value="<?php echo e($newsletter_email ?? ''); ?>">
                                <button type="button" class="arrow"><i class="fas fa-chevron-right"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget wow fadeInUp" data-wow-delay="0.5s">
                            <div class="boxes">
                                <div class="widget-head">
                                    <h3>Navigation</h3>
                                </div>
                                <ul class="list-area">
                                    <li>
                                        <a href="/about">
                                            About us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/collaboration">
                                            Collaboration
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/team">
                                            Meet our team
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/blog">
                                            News and media
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/portfolio">
                                            Our projects
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/contact">
                                            Contacts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/career">
                                            Careers
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget d-flex justify-content-lg-center wow fadeInUp"
                            data-wow-delay="0.5s">
                            <div class="boxes">
                                <div class="widget-head">
                                    <h3>Others page</h3>
                                </div>
                                <ul class="list-area">
                                    <li>
                                        <a href="/faqs">
                                            FAQs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/privacy-policy">
                                            Privacy Policy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/client-support">
                                            Client support
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/help-center">
                                            Help center
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/system-status">
                                            System status
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/feedback">
                                            Feedback
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/terms-and-conditions">
                                            Terms & condition
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget d-flex justify-content-lg-center wow fadeInUp"
                            data-wow-delay="0.5s">
                            <div class="boxes">
                                <div class="widget-head">
                                    <h3>Contact Us?</h3>
                                </div>
                                <div class="list-info d-grid gap-3">
                                    <div class="list-info-item d-flex align-items-center gap-2">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.1113 1C12.1113 1 14.5558 1.22222 17.6669 4.33332C20.778 7.44442 21.0002 9.88886 21.0002 9.88886"
                                                stroke="#FF5455" stroke-width="2" stroke-linecap="round" />
                                            <path
                                                d="M12.3418 4.92822C12.3418 4.92822 13.4417 5.24249 15.0916 6.8924C16.7416 8.54231 17.0558 9.64225 17.0558 9.64225"
                                                stroke="#FF5455" stroke-width="2" stroke-linecap="round" />
                                            <path
                                                d="M7.70841 4.68653L8.42954 5.97867C9.08031 7.14475 8.81907 8.67446 7.7941 9.69943C7.7941 9.69944 7.7941 9.69943 7.7941 9.69944C7.79398 9.69955 6.55095 10.9428 8.80499 13.1968C11.0584 15.4502 12.3016 14.2086 12.3024 14.2077C12.3024 14.2077 12.3024 14.2077 12.3024 14.2077C13.3274 13.1828 14.8571 12.9215 16.0232 13.5723L17.3153 14.2934C19.0761 15.2761 19.2841 17.7455 17.7364 19.2932C16.8064 20.2232 15.6671 20.9468 14.4076 20.9946C12.2875 21.0749 8.68695 20.5384 5.07521 16.9266C1.46347 13.3149 0.926905 9.71435 1.00728 7.5942C1.05502 6.33478 1.77867 5.19549 2.70867 4.26549C4.25638 2.71777 6.72573 2.92572 7.70841 4.68653Z"
                                                stroke="#FF5455" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <a href="tel:<?php echo e($dw_tel); ?>" class="white65 fw-semibold"><?php echo e($dw_tel_display); ?></a>
                                    </div>
                                    <div class="list-info-item d-flex align-items-center gap-2">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.1113 1C12.1113 1 14.5558 1.22222 17.6669 4.33332C20.778 7.44442 21.0002 9.88886 21.0002 9.88886"
                                                stroke="#FF5455" stroke-width="2" stroke-linecap="round" />
                                            <path
                                                d="M12.3418 4.92822C12.3418 4.92822 13.4417 5.24249 15.0916 6.8924C16.7416 8.54231 17.0558 9.64225 17.0558 9.64225"
                                                stroke="#FF5455" stroke-width="2" stroke-linecap="round" />
                                            <path
                                                d="M7.70841 4.68653L8.42954 5.97867C9.08031 7.14475 8.81907 8.67446 7.7941 9.69943C7.7941 9.69944 7.7941 9.69943 7.7941 9.69944C7.79398 9.69955 6.55095 10.9428 8.80499 13.1968C11.0584 15.4502 12.3016 14.2086 12.3024 14.2077C12.3024 14.2077 12.3024 14.2077 12.3024 14.2077C13.3274 13.1828 14.8571 12.9215 16.0232 13.5723L17.3153 14.2934C19.0761 15.2761 19.2841 17.7455 17.7364 19.2932C16.8064 20.2232 15.6671 20.9468 14.4076 20.9946C12.2875 21.0749 8.68695 20.5384 5.07521 16.9266C1.46347 13.3149 0.926905 9.71435 1.00728 7.5942C1.05502 6.33478 1.77867 5.19549 2.70867 4.26549C4.25638 2.71777 6.72573 2.92572 7.70841 4.68653Z"
                                                stroke="#FF5455" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <a href="tel:<?php echo e($dw_tel_pk); ?>" class="white65 fw-semibold"><?php echo e($dw_tel_pk_display); ?></a>
                                    </div>
                                    <div class="list-info-item d-flex align-items-center gap-2">
                                        <i class="fa-brands fa-whatsapp fs-five" style="color:#FF5455;"></i>
                                        <a href="<?php echo e($dw_whatsapp_url); ?>" target="_blank" rel="noopener noreferrer" class="white65 fw-semibold">WhatsApp us · <?php echo e($dw_whatsapp_display); ?></a>
                                    </div>
                                    <div class="list-info-item d-flex align-items-center gap-2">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 10.2797 1.30049 11.4893 1.83477 12.562C1.97675 12.847 2.02401 13.1729 1.94169 13.4805L1.46521 15.2613C1.25836 16.0344 1.96561 16.7416 2.73868 16.5348L4.51951 16.0583C4.82715 15.976 5.15297 16.0233 5.43802 16.1652C6.51069 16.6995 7.72025 17 9 17Z"
                                                stroke="#FF5455" stroke-width="1.5" />
                                            <path d="M5.80078 7.80078H12.2008" stroke="#FF5455" stroke-width="1.5"
                                                stroke-linecap="round" />
                                            <path d="M5.80078 10.6006H10.2008" stroke="#FF5455" stroke-width="1.5"
                                                stroke-linecap="round" />
                                        </svg>
                                        <a href="mailto:Info@deweboo.com" class="white65 fw-semibold">Info@deweboo.com</a>
                                    </div>
                                    <div class="list-info-item d-flex align-items-center gap-2">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 10.2797 1.30049 11.4893 1.83477 12.562C1.97675 12.847 2.02401 13.1729 1.94169 13.4805L1.46521 15.2613C1.25836 16.0344 1.96561 16.7416 2.73868 16.5348L4.51951 16.0583C4.82715 15.976 5.15297 16.0233 5.43802 16.1652C6.51069 16.6995 7.72025 17 9 17Z" stroke="#FF5455" stroke-width="1.5"/><path d="M5.80078 7.80078H12.2008" stroke="#FF5455" stroke-width="1.5" stroke-linecap="round"/><path d="M5.80078 10.6006H10.2008" stroke="#FF5455" stroke-width="1.5" stroke-linecap="round"/></svg>
                                        <a href="mailto:lead@deweboo.com" class="white65 fw-semibold">lead@deweboo.com</a>
                                    </div>
                                    <div class="list-info-item d-flex align-items-center gap-2">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.69922 6.86317C3.69922 3.62503 6.51983 1 9.99922 1C13.4786 1 16.2992 3.62503 16.2992 6.86317C16.2992 10.0759 14.2885 13.8249 11.1513 15.1656C10.4199 15.4781 9.57849 15.4781 8.84716 15.1656C5.70996 13.8249 3.69922 10.0759 3.69922 6.86317Z"
                                                stroke="#FF5455" stroke-width="1.5" />
                                            <path
                                                d="M11.7992 7.3C11.7992 8.29411 10.9933 9.1 9.99922 9.1C9.00511 9.1 8.19922 8.29411 8.19922 7.3C8.19922 6.30589 9.00511 5.5 9.99922 5.5C10.9933 5.5 11.7992 6.30589 11.7992 7.3Z"
                                                stroke="#FF5455" stroke-width="1.5" />
                                            <path
                                                d="M18.0645 13.1504C18.6633 13.6926 19 14.3038 19 14.9504C19 17.1871 14.9706 19.0004 10 19.0004C5.02944 19.0004 1 17.1871 1 14.9504C1 14.3038 1.33671 13.6926 1.93552 13.1504"
                                                stroke="#FF5455" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                        <a href="#0" class="white65 fw-500">Pakistan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div
                    class="footer-wrapper d-flex flex-md-nowrap flex-wrap gap-3 align-items-center justify-content-md-between justify-content-center text-md-start text-center">
                    <p class="white65">
                        &copy;<?php echo date('Y'); ?> <a href="/" class="p3-clr fw_500">De-Weboo.</a> All Rights Reserved.
                    </p>
                    <div class="social-icon d-flex align-items-center gap-2">
                        <a href="<?php echo e($dw_contact['facebook']); ?>" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get" action="/search">
                    <div class="search-field-holder">
                        <input type="search" name="q" class="main-search-input" placeholder="Search site..." value="<?php echo e($_GET['q'] ?? ''); ?>">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--<< All JS Plugins — defer enables parallel download, order preserved >>-->
    <script defer src="/assets/js/jquery-3.7.1.min.js"></script>
    <script defer src="/assets/js/viewport.jquery.js"></script>
    <script defer src="/assets/js/bootstrap.bundle.min.js"></script>
    <script defer src="/assets/js/jquery.nice-select.min.js"></script>
    <script defer src="/assets/js/jquery.waypoints.js"></script>
    <script defer src="/assets/js/jquery.counterup.min.js"></script>
    <script defer src="/assets/js/swiper-bundle.min.js"></script>
    <script defer src="/assets/js/jquery.meanmenu.min.js"></script>
    <script defer src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script defer src="/assets/js/wow.min.js"></script>
    <script defer src="/assets/js/gsap.min.js"></script>
    <script defer src="/assets/js/ScrollTrigger.min.js"></script>
    <script defer src="/assets/js/spilitext-gsap.js"></script>
    <script defer src="/assets/js/vanilla-tilt.min.js"></script>
    <script defer src="/assets/js/main.js"></script>
<?php
$extra_scripts = $extra_scripts ?? [];
foreach ($extra_scripts as $script) :
    ?>
    <script defer src="<?php echo e($script); ?>"></script>
<?php endforeach; ?>
</body>
</html>
<?php else : ?>
<footer class="footer-section style blackbg fix">
        <div class="container">
            <div class="footer-widgets-wrapper">
                <div class="row g-lg-4 g-4 justify-content-between">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="top-rated-pragraph">
                            <h5 class="white mb-lg-5 mb-4">
                                <span class="p3-clr">Stay ahead</span> with digital tips and project updates
                            </h5>
                            <form method="post" action="<?php echo e(dw_self_path()); ?>" class="form-style1 d-flex align-items-center justify-content-between">
                                <input type="email" name="newsletter_email" autocomplete="email" placeholder="Your email address" value="<?php echo e($newsletter_email ?? ''); ?>">
                                <button type="button"><i class="fa-regular fa-envelope"></i></button>
                            </form>
                            <div class="form-check cmn-checkbox mt-3">
                                <input class="form-check-input" type="checkbox" value="" id="mycheck">
                                <label class="form-check-label fs-eight white65" for="mycheck">
                                    I accept all terms and conditions
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget wow fadeInUp" data-wow-delay="0.5s">
                            <div class="boxes">
                                <div class="widget-head">
                                    <h3>Navigation</h3>
                                </div>
                                <ul class="list-area">
                                    <li>
                                        <a href="/about">
                                            About us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/collaboration">
                                            Collaboration
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/team">
                                            Meet our team
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/blog">
                                            News and media
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/portfolio">
                                            Our projects
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/contact">
                                            Contacts
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/career">
                                            Careers
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget d-flex justify-content-lg-center wow fadeInUp"
                            data-wow-delay="0.5s">
                            <div class="boxes">
                                <div class="widget-head">
                                    <h3>Others page</h3>
                                </div>
                                <ul class="list-area">
                                    <li>
                                        <a href="/faqs">
                                            FAQs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/privacy-policy">
                                            Privacy Policy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/client-support">
                                            Client support
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/help-center">
                                            Help center
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/system-status">
                                            System status
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/feedback">
                                            Feedback
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/terms-and-conditions">
                                            Terms & condition
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget d-flex justify-content-lg-center wow fadeInUp"
                            data-wow-delay="0.5s">
                            <div class="boxes">
                                <div class="widget-head">
                                    <h3>Need Help?</h3>
                                </div>
                                <div class="list-info d-grid gap-3 mb-4">
                                    <div class="list-info-item">
                                        <span class="fs-eight white65 d-block">Call Us Directly</span>
                                        <a href="tel:<?php echo e($dw_tel); ?>" class="white fw-semibold"><?php echo e($dw_tel_display); ?></a>
                                    </div>
                                    <div class="list-info-item">
                                        <span class="fs-eight white65 d-block">Call Us Locally</span>
                                        <a href="tel:<?php echo e($dw_tel_pk); ?>" class="white fw-semibold"><?php echo e($dw_tel_pk_display); ?></a>
                                    </div>
                                    <div class="list-info-item">
                                        <span class="fs-eight white65 d-block">WhatsApp us</span>
                                        <a href="<?php echo e($dw_whatsapp_url); ?>" target="_blank" rel="noopener noreferrer" class="white fw-semibold"><?php echo e($dw_whatsapp_display); ?></a>
                                    </div>
                                </div>
                                <div class="social-custom d-flex align-items-center gap-xl-4 gap-3">
                                    <a href="<?php echo e($dw_contact['facebook']); ?>" target="_blank" rel="noopener noreferrer" class=" black"><i class="fab fa-facebook-f white65 fs-six"></i></a>
                                    <a href="#" class=" black"><i class="fa-brands fa-x white65 fs-six"></i></a>
                                    <a href="#" class=" black"><i class="fab fa-linkedin-in white65 fs-six"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div
                    class="footer-wrapper d-flex flex-md-nowrap flex-wrap gap-3 align-items-center justify-content-md-between justify-content-center text-md-start text-center">
                    <a href="/" class="footer-logo">
                        <img src="/assets/img/logo/logo-white.png" loading="lazy" alt="De-Weboo logo">
                    </a>
                    <p class="white65">
                        &copy;<?php echo date('Y'); ?> <a href="/" class="white fw_500">De-Weboo.</a> All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get" action="/search">
                    <div class="search-field-holder">
                        <input type="search" name="q" class="main-search-input" placeholder="Search site..." value="<?php echo e($_GET['q'] ?? ''); ?>">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--<< All JS Plugins — defer enables parallel download, order preserved >>-->
    <script defer src="/assets/js/jquery-3.7.1.min.js"></script>
    <script defer src="/assets/js/viewport.jquery.js"></script>
    <script defer src="/assets/js/bootstrap.bundle.min.js"></script>
    <script defer src="/assets/js/jquery.nice-select.min.js"></script>
    <script defer src="/assets/js/jquery.waypoints.js"></script>
    <script defer src="/assets/js/jquery.counterup.min.js"></script>
    <script defer src="/assets/js/swiper-bundle.min.js"></script>
    <script defer src="/assets/js/jquery.meanmenu.min.js"></script>
    <script defer src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script defer src="/assets/js/wow.min.js"></script>
    <script defer src="/assets/js/gsap.min.js"></script>
    <script defer src="/assets/js/ScrollTrigger.min.js"></script>
    <script defer src="/assets/js/spilitext-gsap.js"></script>
    <script defer src="/assets/js/vanilla-tilt.min.js"></script>
    <script defer src="/assets/js/main.js"></script>
<?php
$extra_scripts = $extra_scripts ?? [];
foreach ($extra_scripts as $script) :
    ?>
    <script defer src="<?php echo e($script); ?>"></script>
<?php endforeach; ?>
</body>
</html>
<?php endif; ?>
