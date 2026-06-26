<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
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
                        <a href="index.php" class="p3-clr">Home</a>
                    </li>
                    <li class="p3-clr">/</li>
                    <li class="white">FAQs</li>
                </ul>
                <h1 class="white visible-from-right">FAQs</h1>
            </div>
        </div>
        <!-- bread Element -->
        <img loading="lazy" src="assets/img/element/bread-ele.png" alt="Illustration" class="bread-ele">
    </section>
    <!-- Banner Section Start -->

    <!-- Faq Section Start -->
    <section class="faq-section space-top fix">
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
                                            De-Weboo is an enterprise software engineering firm organized in two service categories. <strong>Development &amp; AI Engineering:</strong> Web &amp; Mobile Development (custom web apps, mobile apps, e-commerce, and high-security medical websites and patient portals), <strong>AI Automation</strong> (custom AI integrations, workflow automations, and LLM configurations under NAICS 541511), and <strong>Data Engineering</strong> (secure data pipelines and administrative dashboards under NAICS 541512). <strong>Secondary — Growth &amp; Infrastructure:</strong> <strong>Digital Marketing</strong> (consumer marketing and lead generation), <strong>SEO</strong> (technical SEO and specialized medical/healthcare SEO under NAICS 541810 &amp; 541910), and Cloud Services (secure cloud architecture, migration, and HIPAA-friendly hosting). We operate as a contract-ready SLED bidder for B2B, B2C, and B2A frameworks.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do you provide website maintenance after launch?
                                </button>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Yes. After we build your platform, we provide managed hosting, security patching, and monitoring under NAICS 541519—secondary lifecycle support that scales the software and web systems we engineer.
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
                                        <p>
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
                                    How much does a new website cost?
                                </button>
                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Pricing depends on scope, integrations, and compliance requirements. Contact us for a transparent proposal—whether you need a growth-focused commercial site or a procurement-ready healthcare portal.
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

    <!-- Faq Section Start -->
    <section class="faq-section section-padding fix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title text-center mb-lg-5 mb-4">
                        <h2 class="wow fadeInUp black fw-bold visible-slowly-right" data-wow-delay=".3s">
                            Frequently asked questions
                        </h2>
                    </div>
                    <div class="accordion accordion-custom05 border-0 d-flex flex-column" id="accordionExample1">
                        <div class="accordion-item active">
                            <div class="accordion-header" id="headingOne001">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne001" aria-expanded="true"
                                    aria-controls="collapseOne001">
                                    Are you qualified for SLED procurement?
                                </button>
                                <div id="collapseOne001" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne001" data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p class="fs-seven pra">
                                            Yes. De-Weboo is a contract-ready SLED bidder. <strong>AI Automation</strong> maps to NAICS 541511 (custom programming for AI integrations, workflow automations, and LLM configurations). <strong>Data Engineering</strong> maps to NAICS 541512 (data architecture and secure data pipeline systems design). <strong>Digital Marketing</strong> and <strong>SEO</strong> map to NAICS 541810 (Advertising Agencies) and NAICS 541910 (Marketing Research). Request our capabilities statement via the contact page.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo001">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo001" aria-expanded="false"
                                    aria-controls="collapseTwo001">
                                    Do you build HIPAA-compliant healthcare websites?
                                </button>
                                <div id="collapseTwo001" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo001" data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p class="fs-seven pra">
                                            Yes. Web &amp; Mobile Development under NAICS 541511 includes high-security medical websites, patient portals, clinical workflows, and HIPAA-aligned healthcare infrastructure.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree001">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree001" aria-expanded="false"
                                    aria-controls="collapseThree001">
                                    Can you improve SEO and lead generation?
                                </button>
                                <div id="collapseThree001" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree001" data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p class="fs-seven pra">
                                            Yes. <strong>Digital Marketing</strong> and <strong>SEO</strong> are separate secondary Growth &amp; Infrastructure services under NAICS 541810 (Advertising Agencies) and NAICS 541910 (Marketing Research)—Digital Marketing covers consumer marketing and lead generation; SEO covers technical SEO, AEO content strategy, and specialized medical and healthcare SEO to scale the platforms we engineer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingfour001">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour001" aria-expanded="false"
                                    aria-controls="collapsefour001">
                                    How much does a new website cost?
                                </button>
                                <div id="collapsefour001" class="accordion-collapse collapse"
                                    aria-labelledby="headingfour001" data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p class="fs-seven pra">
                                            Pricing varies by scope, compliance, and integrations. We provide clear proposals for commercial builds and can supply NAICS-mapped capability summaries for SLED inquiries.
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

    <!--<< Customer Touch Section Start >>-->
    <section class="customer-touch fix">
        <div class="container">
            <div class="customer-touch-wrap">
                <div class="section-title">
                    <span class="sub-badge white fs-seven text-uppercase d-block mb-2">Ready for enterprise-grade
                        digital delivery?</span>
                    <h2 class="wow fadeInUp white fw-bold visible-slowly-right" data-wow-delay=".3s">
                        Commercial speed. Healthcare security. SLED-ready capabilities.
                    </h2>
                </div>
                <a href="contact.php"
                    class="common-btn text-nowrap heading-font box-style d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold black overflow-hidden bg-white rounded100">
                    Get In Touch
                </a>
            </div>
        </div>
    </section>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
