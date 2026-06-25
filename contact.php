<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/helpers.php';

$contact_form = [
    'name' => '',
    'phone' => '',
    'email' => '',
    'subject' => '',
    'message' => '',
];
if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST' && isset($_POST['contact_form'])) {
    $contact_form = [
        'name' => (string) ($_POST['contact_name'] ?? ''),
        'phone' => (string) ($_POST['contact_phone'] ?? ''),
        'email' => (string) ($_POST['contact_email'] ?? ''),
        'subject' => (string) ($_POST['contact_subject'] ?? ''),
        'message' => (string) ($_POST['contact_message'] ?? ''),
    ];
}

$page_title = 'Contact – De-Weboo Digital Agency';
$page_description = 'Get in touch with De-Weboo for digital services, support, and project inquiries.';

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
                    <li class="white">Contact us</li>
                </ul>
                <h1 class="white visible-from-right">Contact us</h1>
            </div>
        </div>
        <!-- bread Element -->
        <img loading="lazy" src="assets/img/element/bread-ele.png" alt="Illustration" class="bread-ele">
    </section>
    <!-- Banner Section Start -->

    <!-- Contact Info Section Start -->
    <section class="contact-info-section fix space-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="contact-info-content">
                        <div class="thumb rounded-2">
                            <img loading="lazy" src="assets/img/contact/contact-thumb.png" alt="Illustration" class="rounded-2">
                        </div>
                        <div class="content">
                            <div class="mb-xxl-4 mb-4 pb-xxl-2">
                                <h4 class="black mb-xl-3 mb-2">
                                    Canada - Techlo
                                </h4>
                                <p class="pra">
                                    Pakistan
                                </p>
                            </div>
                            <div class="d-grid gap-1 mb-xxl-4 mb-4 pb-xxl-2">
                                <a href="#" class="d-inline-flex align-items-center gap-2 black fw_500">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.88672 1C9.88672 1 11.8421 1.17776 14.3307 3.6664C16.8194 6.15504 16.9971 8.11039 16.9971 8.11039"
                                            stroke="#5135FF" stroke-width="2" stroke-linecap="round" />
                                        <path
                                            d="M10.0703 4.14233C10.0703 4.14233 10.9502 4.39372 12.27 5.71352C13.5898 7.03332 13.8412 7.91319 13.8412 7.91319"
                                            stroke="#5135FF" stroke-width="2" stroke-linecap="round" />
                                        <path
                                            d="M6.3662 3.94886L6.94305 4.98247C7.46362 5.91525 7.25464 7.1389 6.43475 7.95879C6.43475 7.9588 6.43475 7.9588 6.43475 7.9588C6.43463 7.95891 5.44034 8.95342 7.24338 10.7565C9.04576 12.5588 10.0402 11.5659 10.041 11.5651C10.0411 11.5651 10.0411 11.5651 10.0411 11.5651C10.861 10.7452 12.0846 10.5362 13.0174 11.0568L14.051 11.6336C15.4595 12.4197 15.6258 14.395 14.3878 15.633C13.6438 16.377 12.7325 16.9558 11.7251 16.994C10.0291 17.0583 7.14896 16.6291 4.25985 13.74C1.37074 10.8509 0.94153 7.97073 1.00582 6.27478C1.04402 5.26733 1.62287 4.35599 2.3668 3.61206C3.60485 2.37401 5.58014 2.54035 6.3662 3.94886Z"
                                            stroke="#5135FF" stroke-width="2" stroke-linecap="round" />
                                    </svg>
                                    PK +92-336-7770349
                                </a>
                                <a href="#" class="d-inline-flex align-items-center gap-2 black fw_500">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 10.2797 1.30049 11.4893 1.83477 12.562C1.97675 12.847 2.02401 13.1729 1.94169 13.4805L1.46521 15.2613C1.25836 16.0344 1.96561 16.7416 2.73868 16.5348L4.51951 16.0583C4.82715 15.976 5.15297 16.0233 5.43802 16.1652C6.51069 16.6995 7.72025 17 9 17Z"
                                            stroke="#5135FF" stroke-width="1.5" />
                                        <path d="M5.80078 7.80054H12.2008" stroke="#5135FF" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path d="M5.80078 10.6006H10.2008" stroke="#5135FF" stroke-width="1.5"
                                            stroke-linecap="round" />
                                    </svg>
                                    Info@deweboo.com
                                </a>
                            </div>
                            <a href="contact.php"
                                class="common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg">
                                Get Decision
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section Start -->
    <section class="map-section fix section-padding">
        <div class="map-area">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52808140.21705447!2d-161.46429918210544!3d36.11412792251988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1740418796595!5m2!1sen!2sbd"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container">
            <div class="contact-help-box">
                <h2 class="black text-center mb-lg-5 mb-4">
                    How can we help?
                </h2>
                <form method="post" action="<?php echo e($_SERVER['PHP_SELF'] ?? ''); ?>"
                    class="row g-4" id="contact-main-form" autocomplete="on" novalidate>
                    <input type="hidden" name="contact_form" value="1">
                    <div class="col-lg-6 contact-from-grp">
                        <label class="visually-hidden" for="contact_name">Your name</label>
                        <input type="text" name="contact_name" id="contact_name" placeholder="Your Name"
                            value="<?php echo e($contact_form['name']); ?>">
                    </div>
                    <div class="col-lg-6 contact-from-grp">
                        <label class="visually-hidden" for="contact_phone">Your phone</label>
                        <input type="text" name="contact_phone" id="contact_phone" placeholder="Your phone"
                            value="<?php echo e($contact_form['phone']); ?>" autocomplete="tel">
                    </div>
                    <div class="col-lg-6 contact-from-grp">
                        <label class="visually-hidden" for="contact_email">Your email</label>
                        <input type="email" name="contact_email" id="contact_email" placeholder="Your email address"
                            value="<?php echo e($contact_form['email']); ?>" autocomplete="email">
                    </div>
                    <div class="col-lg-6 contact-from-grp">
                        <label class="visually-hidden" for="contact_subject">Your subject</label>
                        <input type="text" name="contact_subject" id="contact_subject" placeholder="Your subject"
                            value="<?php echo e($contact_form['subject']); ?>">
                    </div>
                    <div class="col-lg-12 contact-from-grp">
                        <label class="visually-hidden" for="contact_message">Your message</label>
                        <textarea name="contact_message" id="contact_message" rows="5"
                            placeholder="Write your message"><?php echo e($contact_form['message']); ?></textarea>
                    </div>
                    <div class="col-lg-12">
                        <div
                            class="d-flex flex-lg-nowrap flex-wrap justify-content-lg-between justify-content-center align-items-center gap-3">
                            <p class="pra pragraph">
                                We are committed to protecting your privacy. We will never collect
                                information about you without your explicit consent.
                            </p>
                            <button type="submit"
                                class="border-0 common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg">
                                Send Message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>


