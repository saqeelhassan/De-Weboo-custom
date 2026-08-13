<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/seo.php';
dw_load_page_seo('privacy-policy');
require_once __DIR__ . '/includes/helpers.php';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';

$org = dw_org_config();
$address = $org['address'];
$fullAddress = $address['streetAddress'] . ', ' . $address['addressLocality'] . ', ' . $address['addressRegion'] . ' ' . $address['postalCode'] . ', ' . $address['addressCountry'];
/** ISO date of the most recent privacy policy revision (keep in sync with sitemap.xml lastmod). */
$privacyPolicyLastUpdated = '2026-06-25';
?>
    <section class="breadcrumb-section position-relative fix">
        <div class="container">
            <div class="bread-content text-center">
                <ul class="d-flex align-items-center gap-3 justify-content-center">
                    <li><a href="/" class="p3-clr">Home</a></li>
                    <li class="p3-clr">/</li>
                    <li class="white">Privacy Policy</li>
                </ul>
                <h1 class="white visible-from-right">Privacy Policy</h1>
            </div>
        </div>
        <img loading="lazy" src="/assets/img/element/bread-ele.png" alt="" class="bread-ele">
    </section>

    <section class="blog-details-section fix section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="blog-details-left">
                        <p class="pra fs-seven mb-4">Last updated: <time datetime="<?php echo e($privacyPolicyLastUpdated); ?>"><?php echo e(date('j F Y', strtotime($privacyPolicyLastUpdated))); ?></time></p>

                        <div class="mb-4">
                            <h2 class="black fs-five fw-bold mb-3">1. Who we are</h2>
                            <p class="pra mb-3">
                                <?php echo e($org['name']); ?> (“De-Weboo”, “we”, “us”) is an enterprise software engineering firm. Our registered office is at <?php echo e($fullAddress); ?>.
                            </p>
                            <p class="pra mb-0">
                                Contact:
                                <?php foreach ($org['inboundEmails'] as $em) : ?>
                                <a href="mailto:<?php echo e($em); ?>" class="p1-clr"><?php echo e($em); ?></a><?php echo $em !== end($org['inboundEmails']) ? ' · ' : ''; ?>
                                <?php endforeach; ?>
                                · <a href="tel:<?php echo e($org['telephone']); ?>" class="p1-clr"><?php echo e($org['telephoneDisplay']); ?></a>
                                · <a href="tel:<?php echo e($org['telephonePK']); ?>" class="p1-clr"><?php echo e($org['telephonePKDisplay']); ?></a>
                            </p>
                        </div>

                        <div class="mb-4">
                            <h2 class="black fs-five fw-bold mb-3">2. Information we collect</h2>
                            <p class="pra mb-3">We may collect information you provide when you:</p>
                            <ul class="about-list d-grid gap-2 mb-0">
                                <li class="d-flex gap-2"><span class="icon mt-1 d-center"><i class="fa-solid fa-check p1-clr fs-eight"></i></span><p class="fs-seven fw_600 black mb-0">Submit contact, consultation, or portfolio inquiry forms</p></li>
                                <li class="d-flex gap-2"><span class="icon mt-1 d-center"><i class="fa-solid fa-check p1-clr fs-eight"></i></span><p class="fs-seven fw_600 black mb-0">Subscribe to updates or request capability documentation</p></li>
                                <li class="d-flex gap-2"><span class="icon mt-1 d-center"><i class="fa-solid fa-check p1-clr fs-eight"></i></span><p class="fs-seven fw_600 black mb-0">Communicate with us by email, phone, or WhatsApp</p></li>
                            </ul>
                            <p class="pra mt-3 mb-0">This may include your name, email, phone number, organization, project details, and RFP or procurement references.</p>
                        </div>

                        <div class="mb-4">
                            <h2 class="black fs-five fw-bold mb-3">3. How we use your information</h2>
                            <p class="pra mb-0">
                                We use personal information to respond to inquiries, deliver services, improve our website, meet contractual and legal obligations, and—where permitted—share relevant updates about De-Weboo services. We do not sell your personal data.
                            </p>
                        </div>

                        <div class="mb-4">
                            <h2 class="black fs-five fw-bold mb-3">4. Healthcare &amp; public-sector data</h2>
                            <p class="pra mb-0">
                                For healthcare or government engagements, we apply HIPAA-aligned and procurement-grade safeguards where required. Client data processed under contract is handled according to the applicable agreement, BAA, or statement of work.
                            </p>
                        </div>

                        <div class="mb-4">
                            <h2 class="black fs-five fw-bold mb-3">5. Cookies &amp; analytics</h2>
                            <p class="pra mb-0">
                                Our website may use essential cookies and analytics tools to measure performance and improve user experience. You can control cookies through your browser settings.
                            </p>
                        </div>

                        <div class="mb-4">
                            <h2 class="black fs-five fw-bold mb-3">6. Data retention &amp; security</h2>
                            <p class="pra mb-0">
                                We retain information only as long as needed for the purposes above or as required by law. We implement technical and organizational measures appropriate to the sensitivity of the data we handle.
                            </p>
                        </div>

                        <div class="mb-4">
                            <h2 class="black fs-five fw-bold mb-3">7. Your rights</h2>
                            <p class="pra mb-0">
                                Depending on your location, you may have rights to access, correct, delete, or restrict processing of your personal data. To exercise these rights, contact us at <?php echo e($org['email']); ?>.
                            </p>
                        </div>

                        <div class="mb-0">
                            <h2 class="black fs-five fw-bold mb-3">8. Changes to this policy</h2>
                            <p class="pra mb-4">
                                We may update this Privacy Policy from time to time. The “Last updated” date at the top of this page reflects the most recent revision.
                            </p>
                            <a href="/contact"
                                class="common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg">
                                Contact De-Weboo
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
