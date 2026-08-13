<?php

declare(strict_types=1);

if (!function_exists('dw_org_config')) {
    require_once __DIR__ . '/seo-config.php';
}
$dw_phone_placeholder = dw_org_config()['telephoneDisplay'];
?>
<div class="modal fade portfolio-discuss-modal consultation-modal" id="consultationModal" tabindex="-1"
    aria-labelledby="consultationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content rounded-4 border-0">
            <div class="modal-header border-0 pb-0">
                <div>
                    <span class="portfolio-discuss-badge d-inline-block mb-2">Consultation request</span>
                    <h2 class="modal-title black fw-bold fs-four mb-1" id="consultationModalLabel">
                        Request a consultation
                    </h2>
                    <p class="pra fs-eight mb-0" id="consultation-modal-context">
                        Tell us about your project—we respond within 1–2 business days.
                    </p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-3">
                <div id="consultation-alert" class="alert d-none mb-3" role="alert"></div>

                <form id="consultation-form" class="row g-3" novalidate>
                    <input type="hidden" name="consultation_service" id="consultation_service" value="">
                    <input type="text" name="website" value="" class="portfolio-discuss-honeypot" tabindex="-1" autocomplete="off" aria-hidden="true">

                    <div class="col-md-6 contact-from-grp">
                        <label class="form-label fs-eight fw-semibold black" for="consultation_name">Full name *</label>
                        <input type="text" name="consultation_name" id="consultation_name" required placeholder="Your full name" autocomplete="name">
                    </div>
                    <div class="col-md-6 contact-from-grp">
                        <label class="form-label fs-eight fw-semibold black" for="consultation_email">Work email *</label>
                        <input type="email" name="consultation_email" id="consultation_email" required placeholder="you@company.com" autocomplete="email">
                    </div>
                    <div class="col-md-6 contact-from-grp">
                        <label class="form-label fs-eight fw-semibold black" for="consultation_phone">Phone / WhatsApp</label>
                        <input type="tel" name="consultation_phone" id="consultation_phone" placeholder="<?php echo e($dw_phone_placeholder); ?>" autocomplete="tel">
                    </div>
                    <div class="col-md-6 contact-from-grp">
                        <label class="form-label fs-eight fw-semibold black" for="consultation_organization">Organization</label>
                        <input type="text" name="consultation_organization" id="consultation_organization" placeholder="Company, agency, or department">
                    </div>
                    <div class="col-md-6 contact-from-grp">
                        <label class="form-label fs-eight fw-semibold black" for="consultation_interest">Service interest *</label>
                        <select name="consultation_interest" id="consultation_interest" class="portfolio-discuss-select" required>
                            <option value="">Select a service</option>
                            <option value="Web Development">Web Development</option>
                            <option value="AI Automation">AI Automation</option>
                            <option value="Custom Medical Systems">Custom Medical Systems</option>
                            <option value="Real Estate Website Development">Real Estate Website Development</option>
                            <option value="Data Engineering">Data Engineering</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="SEO">SEO</option>
                            <option value="Cloud Services">Cloud Services</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-6 contact-from-grp">
                        <label class="form-label fs-eight fw-semibold black" for="consultation_timeline">Target timeline</label>
                        <select name="consultation_timeline" id="consultation_timeline" class="portfolio-discuss-select">
                            <option value="">Select timeline</option>
                            <option value="ASAP — under 4 weeks">ASAP — under 4 weeks</option>
                            <option value="1–3 months">1–3 months</option>
                            <option value="3–6 months">3–6 months</option>
                            <option value="6+ months / phased">6+ months / phased</option>
                            <option value="Flexible / exploring">Flexible / exploring</option>
                        </select>
                    </div>
                    <div class="col-12 contact-from-grp">
                        <label class="form-label fs-eight fw-semibold black" for="consultation_message">Project goals &amp; requirements *</label>
                        <textarea name="consultation_message" id="consultation_message" rows="4" required
                            placeholder="Share your goals—B2B platforms, B2C e-commerce, B2A projects, healthcare IT, AI automation, or other requirements."></textarea>
                    </div>
                    <div class="col-12">
                        <p class="pra fs-eight mb-3">
                            Enterprise IT solutions with HIPAA-aligned security—for commercial brands and healthcare organizations. We protect your data and never share information without consent.
                        </p>
                        <button type="submit" id="consultation-submit"
                            class="border-0 w-100 common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg">
                            <span>Send consultation request</span>
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </div>
                </form>

                <div id="consultation-success" class="portfolio-discuss-success d-none text-center py-4">
                    <div class="portfolio-discuss-success-icon mb-3">
                        <i class="fa-solid fa-check-double"></i>
                    </div>
                    <h3 class="black fw-bold mb-2">Request received</h3>
                    <p class="pra fs-seven mb-4" id="consultation-success-text"></p>
                    <button type="button" class="border-0 common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p1-bg"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
