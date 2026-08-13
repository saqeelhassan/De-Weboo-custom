<?php

declare(strict_types=1);

if (!function_exists('dw_org_config')) {
    require_once __DIR__ . '/seo-config.php';
}
$dw_phone_placeholder = dw_org_config()['telephoneDisplay'];

/** @var array $project Portfolio project from dw_portfolio_project() */
?>
<div class="modal fade portfolio-discuss-modal" id="portfolioDiscussModal" tabindex="-1"
    aria-labelledby="portfolioDiscussModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content rounded-4 border-0">
            <div class="modal-header border-0 pb-0">
                <div>
                    <span class="portfolio-discuss-badge d-inline-block mb-2">Similar build inquiry</span>
                    <h2 class="modal-title black fw-bold fs-four mb-1" id="portfolioDiscussModalLabel">
                        Discuss a build like <?php echo e($project['shortName']); ?>
                    </h2>
                    <p class="pra fs-eight mb-0">
                        Reference: <?php echo e($project['fullName']); ?> · <?php echo e($project['client']); ?>
                    </p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-3">
                <div id="portfolio-discuss-alert" class="alert d-none mb-3" role="alert"></div>

                <form id="portfolio-discuss-form" class="row g-3" novalidate>
                    <input type="hidden" name="portfolio_project" value="<?php echo e($project['shortName']); ?>">
                    <input type="hidden" name="portfolio_slug" value="<?php echo e($project['slug']); ?>">
                    <input type="hidden" name="portfolio_reference" value="<?php echo e($project['fullName']); ?>">
                    <input type="text" name="website" value="" class="portfolio-discuss-honeypot" tabindex="-1" autocomplete="off" aria-hidden="true">

                    <div class="col-md-6 contact-from-grp">
                        <label class="form-label fs-eight fw-semibold black" for="inquiry_name">Full name *</label>
                        <input type="text" name="inquiry_name" id="inquiry_name" required placeholder="Your full name" autocomplete="name">
                    </div>
                    <div class="col-md-6 contact-from-grp">
                        <label class="form-label fs-eight fw-semibold black" for="inquiry_email">Work email *</label>
                        <input type="email" name="inquiry_email" id="inquiry_email" required placeholder="you@company.com" autocomplete="email">
                    </div>
                    <div class="col-md-6 contact-from-grp">
                        <label class="form-label fs-eight fw-semibold black" for="inquiry_phone">Phone / WhatsApp</label>
                        <input type="tel" name="inquiry_phone" id="inquiry_phone" placeholder="<?php echo e($dw_phone_placeholder); ?>" autocomplete="tel">
                    </div>
                    <div class="col-md-6 contact-from-grp">
                        <label class="form-label fs-eight fw-semibold black" for="inquiry_organization">Organization</label>
                        <input type="text" name="inquiry_organization" id="inquiry_organization" placeholder="Company, agency, or department">
                    </div>
                    <div class="col-md-6 contact-from-grp">
                        <label class="form-label fs-eight fw-semibold black" for="inquiry_timeline">Target timeline</label>
                        <select name="inquiry_timeline" id="inquiry_timeline" class="portfolio-discuss-select">
                            <option value="">Select timeline</option>
                            <option value="ASAP — under 4 weeks">ASAP — under 4 weeks</option>
                            <option value="1–3 months">1–3 months</option>
                            <option value="3–6 months">3–6 months</option>
                            <option value="6+ months / phased">6+ months / phased</option>
                            <option value="Flexible / exploring">Flexible / exploring</option>
                        </select>
                    </div>
                    <div class="col-md-6 contact-from-grp">
                        <label class="form-label fs-eight fw-semibold black" for="inquiry_budget">Estimated budget</label>
                        <select name="inquiry_budget" id="inquiry_budget" class="portfolio-discuss-select">
                            <option value="">Select range (optional)</option>
                            <option value="Under $5,000">Under $5,000</option>
                            <option value="$5,000 – $15,000">$5,000 – $15,000</option>
                            <option value="$15,000 – $50,000">$15,000 – $50,000</option>
                            <option value="$50,000+">$50,000+</option>
                            <option value="To be discussed">To be discussed</option>
                        </select>
                    </div>
                    <div class="col-12 contact-from-grp">
                        <label class="form-label fs-eight fw-semibold black" for="inquiry_scope">What do you want to build? *</label>
                        <textarea name="inquiry_scope" id="inquiry_scope" rows="3" required
                            placeholder="Describe your goals—a similar <?php echo e($project['category']); ?> platform, key users, and outcomes you need."></textarea>
                    </div>
                    <div class="col-12 contact-from-grp">
                        <label class="form-label fs-eight fw-semibold black" for="inquiry_features">Features &amp; capabilities you need</label>
                        <textarea name="inquiry_features" id="inquiry_features" rows="3"
                            placeholder="e.g. role-based access, dashboards, multilingual, integrations… (Inspired by: <?php echo e($project['services']); ?>)"></textarea>
                    </div>
                    <div class="col-12 contact-from-grp">
                        <label class="form-label fs-eight fw-semibold black" for="inquiry_message">Additional notes</label>
                        <textarea name="inquiry_message" id="inquiry_message" rows="2"
                            placeholder="Tech preferences, compliance (HIPAA), existing systems, or RFP references."></textarea>
                    </div>
                    <div class="col-12">
                        <p class="pra fs-eight mb-3">
                            Tech reference for this case study: <strong class="black"><?php echo e($project['techStack']); ?></strong>.
                            We protect your information and never share it without consent.
                        </p>
                        <button type="submit" id="portfolio-discuss-submit"
                            class="border-0 w-100 common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p3-bg">
                            <span>Send project inquiry</span>
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </div>
                </form>

                <div id="portfolio-discuss-success" class="portfolio-discuss-success d-none text-center py-4">
                    <div class="portfolio-discuss-success-icon mb-3">
                        <i class="fa-solid fa-check-double"></i>
                    </div>
                    <h3 class="black fw-bold mb-2">Inquiry received</h3>
                    <p class="pra fs-seven mb-4" id="portfolio-discuss-success-text"></p>
                    <button type="button" class="border-0 common-btn box-style cmn-style1 d-inline-flex justify-content-center align-items-center gap-2 fs18 fw-semibold white overflow-hidden rounded-5 p1-bg"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
