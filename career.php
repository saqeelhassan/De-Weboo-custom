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
                        <a href="/" class="p3-clr">Home</a>
                    </li>
                    <li class="p3-clr">/</li>
                    <li class="white">Careers</li>
                </ul>
                <h1 class="white visible-from-right">Careers at De-Weboo</h1>
            </div>
        </div>
        <img loading="lazy" src="/assets/img/element/bread-ele.png" alt="Illustration" class="bread-ele">
    </section>
    <!-- Banner Section End -->

    <!-- Why Join Us Section Start -->
    <section class="network-section fix space-top">
        <div class="container">
            <div class="row justify-content-center mb-lg-5 mb-4 pb-3 text-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h6 class="sub-badge4 p1-clr fw-bold fs-seven text-uppercase d-block mb-xl-3 mb-2">
                            Why De-Weboo
                        </h6>
                        <h2 class="wow fadeInUp black fw-bold visible-from-bottom" data-wow-delay=".3s">
                            Build real products. Grow fast. Work remotely.
                        </h2>
                        <p class="pra mt-3">
                            We're an enterprise software engineering firm operating across B2B, B2C, and B2A markets.
                            Our teams build custom web &amp; mobile platforms, AI automations, data pipelines, and
                            growth infrastructure — for commercial clients and government procurement. Join a team
                            where your work ships to production.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                    <div class="netwrok-items border-top pt-4">
                        <span class="d-flex align-items-center gap-2 fs-six pra fw-semibold mb-4 pb-lg-3">
                            <i class="fas fa-circle p1-clr fs-eight"></i> Remote-first
                        </span>
                        <p class="pra fs-seven">
                            Work from anywhere. Our engineering and marketing teams are fully distributed across time zones, with async-friendly collaboration and clear delivery milestones.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                    <div class="netwrok-items border-top pt-4">
                        <span class="d-flex align-items-center gap-2 fs-six pra fw-semibold mb-4 pb-lg-3">
                            <i class="fas fa-circle p1-clr fs-eight"></i> Real ownership
                        </span>
                        <p class="pra fs-seven">
                            You'll own features end-to-end — from architecture discussions to production deployment. No layer of bureaucracy between your code and live users.
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay=".7s">
                    <div class="netwrok-items border-top pt-4">
                        <span class="d-flex align-items-center gap-2 fs-six pra fw-semibold mb-4 pb-lg-3">
                            <i class="fas fa-circle p1-clr fs-eight"></i> Diverse tech stack
                        </span>
                        <p class="pra fs-seven">
                            Work across web, mobile, AI, cloud, and data engineering. We embrace modern stacks and expect engineers to pick the right tool for each challenge.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Join Us Section End -->

    <!-- Open Positions Section Start -->
    <section class="faq-section space-top fix">
        <div class="container">
            <div class="row justify-content-center mb-lg-5 mb-4 text-center">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h6 class="sub-badge4 p1-clr fw-bold fs-seven text-uppercase d-block mb-xl-3 mb-2">
                            Open Positions
                        </h6>
                        <h2 class="wow fadeInUp black fw-bold visible-slowly-right" data-wow-delay=".3s">
                            Current openings
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row g-4">

                <!-- Position: Full-Stack Developer -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="blog-card-item p-xl-4 p-3 border rounded-3 h-100">
                        <div class="d-flex align-items-start justify-content-between gap-3 mb-3">
                            <div>
                                <span class="sub-badge4 p1-clr fw-bold fs-eight text-uppercase d-block mb-2">Engineering</span>
                                <h4 class="black fw-bold">Full-Stack Developer</h4>
                            </div>
                            <span class="badge bg-light text-dark fs-eight fw-semibold text-nowrap px-3 py-2 rounded-5">Remote · Full-time</span>
                        </div>
                        <p class="pra fs-seven mb-3">
                            Build and ship custom web applications for B2B and healthcare clients. You'll work across PHP/Laravel, React, and REST APIs with occasional DevOps responsibility on AWS or DigitalOcean.
                        </p>
                        <ul class="pra fs-seven mb-4 ps-3">
                            <li>3+ years full-stack experience (PHP + JS/React)</li>
                            <li>Experience with REST API design and MySQL/PostgreSQL</li>
                            <li>Familiarity with Git workflows and CI/CD</li>
                        </ul>
                        <a href="#apply-form" class="common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg"
                           onclick="document.getElementById('career_position').value='Full-Stack Developer'">
                            Apply Now
                            <span class="ani-arrow"><i class="fa-solid fa-arrow-right-long"></i></span>
                        </a>
                    </div>
                </div>

                <!-- Position: AI / ML Engineer -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="blog-card-item p-xl-4 p-3 border rounded-3 h-100">
                        <div class="d-flex align-items-start justify-content-between gap-3 mb-3">
                            <div>
                                <span class="sub-badge4 p1-clr fw-bold fs-eight text-uppercase d-block mb-2">AI Engineering</span>
                                <h4 class="black fw-bold">AI / ML Engineer</h4>
                            </div>
                            <span class="badge bg-light text-dark fs-eight fw-semibold text-nowrap px-3 py-2 rounded-5">Remote · Full-time</span>
                        </div>
                        <p class="pra fs-seven mb-3">
                            Design and deliver AI automation solutions and LLM integrations for enterprise clients. You'll build workflow automations, RAG pipelines, and AI-powered product features.
                        </p>
                        <ul class="pra fs-seven mb-4 ps-3">
                            <li>Strong Python background with LLM APIs (OpenAI, Anthropic)</li>
                            <li>Experience with LangChain, vector databases, or RAG architectures</li>
                            <li>Ability to scope and deliver AI features end-to-end</li>
                        </ul>
                        <a href="#apply-form" class="common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg"
                           onclick="document.getElementById('career_position').value='AI / ML Engineer'">
                            Apply Now
                            <span class="ani-arrow"><i class="fa-solid fa-arrow-right-long"></i></span>
                        </a>
                    </div>
                </div>

                <!-- Position: Mobile App Developer -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="blog-card-item p-xl-4 p-3 border rounded-3 h-100">
                        <div class="d-flex align-items-start justify-content-between gap-3 mb-3">
                            <div>
                                <span class="sub-badge4 p1-clr fw-bold fs-eight text-uppercase d-block mb-2">Mobile</span>
                                <h4 class="black fw-bold">Mobile App Developer</h4>
                            </div>
                            <span class="badge bg-light text-dark fs-eight fw-semibold text-nowrap px-3 py-2 rounded-5">Remote · Full-time</span>
                        </div>
                        <p class="pra fs-seven mb-3">
                            Build cross-platform mobile apps for iOS and Android serving B2C and healthcare clients. You'll collaborate directly with clients on requirements and iterate quickly toward App Store releases.
                        </p>
                        <ul class="pra fs-seven mb-4 ps-3">
                            <li>2+ years React Native or Flutter experience</li>
                            <li>Published apps on App Store or Google Play</li>
                            <li>Comfort working with REST APIs and native device features</li>
                        </ul>
                        <a href="#apply-form" class="common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg"
                           onclick="document.getElementById('career_position').value='Mobile App Developer'">
                            Apply Now
                            <span class="ani-arrow"><i class="fa-solid fa-arrow-right-long"></i></span>
                        </a>
                    </div>
                </div>

                <!-- Position: SEO & Digital Marketing Specialist -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="blog-card-item p-xl-4 p-3 border rounded-3 h-100">
                        <div class="d-flex align-items-start justify-content-between gap-3 mb-3">
                            <div>
                                <span class="sub-badge4 p1-clr fw-bold fs-eight text-uppercase d-block mb-2">Growth</span>
                                <h4 class="black fw-bold">SEO &amp; Digital Marketing Specialist</h4>
                            </div>
                            <span class="badge bg-light text-dark fs-eight fw-semibold text-nowrap px-3 py-2 rounded-5">Remote · Full-time</span>
                        </div>
                        <p class="pra fs-seven mb-3">
                            Drive organic growth for De-Weboo's clients across B2B, medical, and e-commerce verticals. Own technical SEO audits, content strategies, and paid digital campaigns.
                        </p>
                        <ul class="pra fs-seven mb-4 ps-3">
                            <li>Proven track record with technical SEO and link building</li>
                            <li>Experience with Google Ads, Meta Ads, or LinkedIn Ads</li>
                            <li>Healthcare or medical SEO experience is a strong plus</li>
                        </ul>
                        <a href="#apply-form" class="common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg"
                           onclick="document.getElementById('career_position').value='SEO & Digital Marketing Specialist'">
                            Apply Now
                            <span class="ani-arrow"><i class="fa-solid fa-arrow-right-long"></i></span>
                        </a>
                    </div>
                </div>

                <!-- Position: Data Engineer -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="blog-card-item p-xl-4 p-3 border rounded-3 h-100">
                        <div class="d-flex align-items-start justify-content-between gap-3 mb-3">
                            <div>
                                <span class="sub-badge4 p1-clr fw-bold fs-eight text-uppercase d-block mb-2">Data Engineering</span>
                                <h4 class="black fw-bold">Data Engineer</h4>
                            </div>
                            <span class="badge bg-light text-dark fs-eight fw-semibold text-nowrap px-3 py-2 rounded-5">Remote · Contract</span>
                        </div>
                        <p class="pra fs-seven mb-3">
                            Design and build secure data pipelines and administrative dashboards for enterprise and government clients. Work with structured and semi-structured datasets at scale.
                        </p>
                        <ul class="pra fs-seven mb-4 ps-3">
                            <li>Strong SQL and Python (Pandas, PySpark, or similar)</li>
                            <li>Experience with ETL/ELT pipelines and data warehouses</li>
                            <li>Cloud data services (AWS, GCP, or Azure)</li>
                        </ul>
                        <a href="#apply-form" class="common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg"
                           onclick="document.getElementById('career_position').value='Data Engineer'">
                            Apply Now
                            <span class="ani-arrow"><i class="fa-solid fa-arrow-right-long"></i></span>
                        </a>
                    </div>
                </div>

                <!-- Position: UI/UX Designer -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="blog-card-item p-xl-4 p-3 border rounded-3 h-100">
                        <div class="d-flex align-items-start justify-content-between gap-3 mb-3">
                            <div>
                                <span class="sub-badge4 p1-clr fw-bold fs-eight text-uppercase d-block mb-2">Design</span>
                                <h4 class="black fw-bold">UI/UX Designer</h4>
                            </div>
                            <span class="badge bg-light text-dark fs-eight fw-semibold text-nowrap px-3 py-2 rounded-5">Remote · Full-time</span>
                        </div>
                        <p class="pra fs-seven mb-3">
                            Create intuitive, accessible interfaces for web and mobile products used by commercial and government clients. You'll work closely with engineers from wireframe to production-ready Figma handoff.
                        </p>
                        <ul class="pra fs-seven mb-4 ps-3">
                            <li>Strong Figma skills and a portfolio of shipped products</li>
                            <li>Knowledge of WCAG accessibility standards</li>
                            <li>Experience designing for complex dashboards or data-heavy UIs</li>
                        </ul>
                        <a href="#apply-form" class="common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg"
                           onclick="document.getElementById('career_position').value='UI/UX Designer'">
                            Apply Now
                            <span class="ani-arrow"><i class="fa-solid fa-arrow-right-long"></i></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Open Positions Section End -->

    <!-- Application Form Section Start -->
    <section class="faq-section section-padding fix" id="apply-form">
        <div class="container">
            <div class="row justify-content-center mb-lg-5 mb-4 text-center">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h6 class="sub-badge4 p1-clr fw-bold fs-seven text-uppercase d-block mb-xl-3 mb-2">
                            Apply
                        </h6>
                        <h2 class="wow fadeInUp black fw-bold visible-slowly-right" data-wow-delay=".3s">
                            Submit your application
                        </h2>
                        <p class="pra mt-2 fs-seven">
                            Don't see the right role? Apply anyway — tell us what you do and we'll reach out when there's a fit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div id="career-form-message" class="alert d-none mb-4" role="alert"></div>
                    <form id="career-application-form" novalidate>
                        <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">

                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold black fs-seven mb-2" for="career_name">Full Name <span class="p1-clr">*</span></label>
                                <input type="text" id="career_name" name="career_name" class="form-control" placeholder="Your full name" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold black fs-seven mb-2" for="career_email">Email Address <span class="p1-clr">*</span></label>
                                <input type="email" id="career_email" name="career_email" class="form-control" placeholder="you@email.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold black fs-seven mb-2" for="career_phone">Phone / WhatsApp</label>
                                <input type="tel" id="career_phone" name="career_phone" class="form-control" placeholder="+1 000 000 0000">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold black fs-seven mb-2" for="career_position">Position Applying For <span class="p1-clr">*</span></label>
                                <select id="career_position" name="career_position" class="form-control" required>
                                    <option value="">— Select a role —</option>
                                    <option value="Full-Stack Developer">Full-Stack Developer</option>
                                    <option value="AI / ML Engineer">AI / ML Engineer</option>
                                    <option value="Mobile App Developer">Mobile App Developer</option>
                                    <option value="SEO & Digital Marketing Specialist">SEO &amp; Digital Marketing Specialist</option>
                                    <option value="Data Engineer">Data Engineer</option>
                                    <option value="UI/UX Designer">UI/UX Designer</option>
                                    <option value="Other / General Application">Other / General Application</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold black fs-seven mb-2" for="career_portfolio">Portfolio / LinkedIn / GitHub URL</label>
                                <input type="url" id="career_portfolio" name="career_portfolio" class="form-control" placeholder="https://...">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold black fs-seven mb-2" for="career_message">Tell us about yourself &amp; your experience <span class="p1-clr">*</span></label>
                                <textarea id="career_message" name="career_message" class="form-control" rows="6"
                                    placeholder="Describe your background, relevant experience, what excites you about this role, and any notable projects you've worked on." required></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" id="career-submit-btn"
                                    class="common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg px-5">
                                    <span id="career-btn-text">Submit Application</span>
                                    <span id="career-btn-spinner" class="d-none spinner-border spinner-border-sm" role="status"></span>
                                    <span class="ani-arrow"><i class="fa-solid fa-arrow-right-long"></i></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Application Form Section End -->

    <!-- CTA Section -->
    <section class="customer-touch fix">
        <div class="container">
            <div class="customer-touch-wrap">
                <div class="section-title">
                    <span class="sub-badge white fs-seven text-uppercase d-block mb-2">Work with us</span>
                    <h2 class="wow fadeInUp white fw-bold visible-slowly-right" data-wow-delay=".3s">
                        Commercial speed. Enterprise quality. Contract-ready delivery.
                    </h2>
                </div>
                <a href="/contact"
                    class="common-btn text-nowrap heading-font box-style d-inline-flex justify-content-center align-items-center gap-xxl-2 gap-2 fs18 fw-semibold black overflow-hidden bg-white rounded100">
                    Get In Touch
                </a>
            </div>
        </div>
    </section>

<style>
#career-application-form .nice-select .list {
    background-color: #ffffff;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    box-shadow: 0 4px 16px rgba(0,0,0,0.10);
    z-index: 9999;
    width: 100%;
    min-width: 100%;
}
#career-application-form .nice-select .option {
    color: #222222;
    padding: 8px 16px;
}
#career-application-form .nice-select .option:hover,
#career-application-form .nice-select .option.focus,
#career-application-form .nice-select .option.selected.focus {
    background-color: #f5f5ff;
    color: var(--p1, #5135ff);
}
#career-application-form .nice-select .option.selected {
    font-weight: 600;
    color: #222222;
}
</style>
<script>
(function () {
    var form = document.getElementById('career-application-form');
    if (!form) return;

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        var msgBox  = document.getElementById('career-form-message');
        var btn     = document.getElementById('career-submit-btn');
        var btnText = document.getElementById('career-btn-text');
        var spinner = document.getElementById('career-btn-spinner');

        msgBox.className  = 'alert d-none mb-4';
        msgBox.textContent = '';
        btn.disabled = true;
        btnText.textContent = 'Sending…';
        spinner.classList.remove('d-none');

        var data = new FormData(form);

        fetch('handlers/career-application.php', {
            method: 'POST',
            body: data,
        })
        .then(function (res) { return res.json(); })
        .then(function (json) {
            btn.disabled = false;
            btnText.textContent = 'Submit Application';
            spinner.classList.add('d-none');

            if (json.success) {
                msgBox.className  = 'alert alert-success mb-4';
                msgBox.textContent = json.message;
                form.reset();
            } else {
                msgBox.className  = 'alert alert-danger mb-4';
                msgBox.textContent = json.message;
            }
            msgBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
        })
        .catch(function () {
            btn.disabled = false;
            btnText.textContent = 'Submit Application';
            spinner.classList.add('d-none');
            msgBox.className  = 'alert alert-danger mb-4';
            msgBox.textContent = 'Something went wrong. Please email us at Info@deweboo.com directly.';
            msgBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
        });
    });
}());
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
