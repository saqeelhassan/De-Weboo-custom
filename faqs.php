<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/seo.php';
dw_load_page_seo(basename(__FILE__, '.php'));
$page_faqs = json_decode(file_get_contents(__DIR__ . '/includes/faqs-data.json'), true, 512, JSON_THROW_ON_ERROR);
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
                    <li class="white">FAQs</li>
                </ul>
                <h1 class="white visible-from-right">FAQs</h1>
            </div>
        </div>
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
                            Answers about working with De-Weboo Dev
                        </h2>
                    </div>
                    <div class="faq-stresh d-flex align-items-center">
                        <?php
                        $call_show_rep = true;
                        require __DIR__ . '/includes/contact-call-block.php';
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion border-0 d-flex flex-column gap-xxl-4 gap-3" id="accordionExample">
                        <div class="accordion-item active">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?php echo e($page_faqs[0]['question']); ?></button>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p class="fs-seven pra"><?php echo $page_faqs[0]['answer']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><?php echo e($page_faqs[1]['question']); ?></button>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><?php echo $page_faqs[1]['answer']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><?php echo e($page_faqs[2]['question']); ?></button>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><?php echo $page_faqs[2]['answer']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour"><?php echo e($page_faqs[3]['question']); ?></button>
                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p><?php echo $page_faqs[3]['answer']; ?></p>
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
                                    aria-controls="collapseOne001"><?php echo e($page_faqs[4]['question']); ?></button>
                                <div id="collapseOne001" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne001" data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p class="fs-seven pra"><?php echo $page_faqs[4]['answer']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo001">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo001" aria-expanded="false"
                                    aria-controls="collapseTwo001"><?php echo e($page_faqs[5]['question']); ?></button>
                                <div id="collapseTwo001" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo001" data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p class="fs-seven pra"><?php echo $page_faqs[5]['answer']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree001">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree001" aria-expanded="false"
                                    aria-controls="collapseThree001"><?php echo e($page_faqs[6]['question']); ?></button>
                                <div id="collapseThree001" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree001" data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p class="fs-seven pra"><?php echo $page_faqs[6]['answer']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingfour001">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapsefour001" aria-expanded="false"
                                    aria-controls="collapsefour001"><?php echo e($page_faqs[7]['question']); ?></button>
                                <div id="collapsefour001" class="accordion-collapse collapse"
                                    aria-labelledby="headingfour001" data-bs-parent="#accordionExample1">
                                    <div class="accordion-body">
                                        <p class="fs-seven pra"><?php echo $page_faqs[7]['answer']; ?></p>
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
