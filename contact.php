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

require_once __DIR__ . '/includes/seo.php';
dw_load_page_seo(basename(__FILE__, '.php'));
$dw_phone_placeholder = dw_org_config()['telephoneDisplay'];

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
                    <li class="white">Contact</li>
                </ul>
                <h1 class="white visible-from-right">Contact De-Weboo</h1>
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
                                <h4 class="black mb-0 contact-info-heading">Enterprise software · SLED-ready bidder</h4>
                            </div>
                            <?php
                            $call_wrapper_class = 'about-call d-flex align-items-center gap-3 mb-xxl-4 mb-4 pb-xxl-2';
                            require __DIR__ . '/includes/contact-call-block.php';
                            ?>
                            <div class="d-grid gap-1 mb-xxl-4 mb-4 pb-xxl-2">
                                <a href="mailto:Info@deweboo.com" class="d-inline-flex align-items-center gap-2 black fw_500">
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
                                Get a Consultation
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
                title="De-Weboo — Hyderabad HQ &amp; global digital delivery"
                src="https://www.google.com/maps?q=Lucky+Shanghai+Trade+Centre,+Auto+Bhan+Road,+Hyderabad,+Sindh,+Pakistan&amp;hl=en&amp;z=16&amp;output=embed"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container">
            <div class="contact-help-box">
                <h2 class="black text-center mb-lg-5 mb-4">
                    How can we support your business or bid?
                </h2>
                <form method="post" action="<?php echo e($_SERVER['PHP_SELF'] ?? ''); ?>"
                    class="row g-4" id="contact-main-form" autocomplete="on" novalidate>
                    <input type="hidden" name="contact_form" value="1">
                    <div class="col-lg-6 contact-from-grp">
                        <label class="visually-hidden" for="contact_name">Full name</label>
                        <input type="text" name="contact_name" id="contact_name" placeholder="Full name"
                            value="<?php echo e($contact_form['name']); ?>">
                    </div>
                    <div class="col-lg-6 contact-from-grp">
                        <label class="visually-hidden" for="contact_phone">Phone number</label>
                        <input type="text" name="contact_phone" id="contact_phone" placeholder="<?php echo e($dw_phone_placeholder); ?>"
                            value="<?php echo e($contact_form['phone']); ?>" autocomplete="tel">
                    </div>
                    <div class="col-lg-6 contact-from-grp">
                        <label class="visually-hidden" for="contact_email">Work email</label>
                        <input type="email" name="contact_email" id="contact_email" placeholder="Work email address"
                            value="<?php echo e($contact_form['email']); ?>" autocomplete="email">
                    </div>
                    <div class="col-lg-6 contact-from-grp">
                        <label class="visually-hidden" for="contact_subject">Project or RFP subject</label>
                        <input type="text" name="contact_subject" id="contact_subject" placeholder="Project type, RFP reference, or NAICS scope"
                            value="<?php echo e($contact_form['subject']); ?>">
                    </div>
                    <div class="col-lg-12 contact-from-grp">
                        <label class="visually-hidden" for="contact_message">Project or procurement details</label>
                        <textarea name="contact_message" id="contact_message" rows="5"
                            placeholder="Share your goals—B2B platforms, B2C e-commerce, B2A/SLED procurement, or healthcare IT requirements."><?php echo e($contact_form['message']); ?></textarea>
                    </div>
                    <div class="col-lg-12">
                        <div
                            class="d-flex flex-lg-nowrap flex-wrap justify-content-lg-between justify-content-center align-items-center gap-3">
                            <p class="pra pragraph">
                                Enterprise IT solutions with HIPAA-aligned security—for commercial brands, SLED buyers, and healthcare organizations. We protect your data and never share information without your explicit consent.
                            </p>
                            <button type="submit"
                                class="border-0 common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg">
                                Send Inquiry
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>


