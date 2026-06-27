<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

/**
 * Homepage solution tabs (Web, SLED, AI, Medical) — image + overlay stats per service.
 *
 * @return list<array{
 *     tab_id: string,
 *     tab_label: string,
 *     pane_id: string,
 *     image: string,
 *     image_alt: string,
 *     stat_count: string,
 *     stat_suffix: string,
 *     stat_label: string,
 *     title: string,
 *     description: string,
 *     bullets: list<string>,
 *     consultation_service: string
 * }>
 */
function dw_home_solution_tabs(): array
{
    return [
        [
            'tab_id' => 'home-tab',
            'tab_label' => 'Web',
            'pane_id' => 'home',
            'image' => 'assets/img/services/solutio-web.jpg',
            'image_alt' => 'Web developers collaborating on custom applications and enterprise portals',
            'stat_count' => '120',
            'stat_suffix' => '+',
            'stat_label' => 'Web & mobile platforms delivered.',
            'title' => 'Web Development',
            'description' => 'Under NAICS 541511, we deliver custom web apps, e-commerce platforms, and high-security medical websites and patient portals—responsive B2B/B2C/B2A platforms built for performance, accessibility, and audit-ready documentation.',
            'bullets' => [
                'Custom web applications & enterprise portals (NAICS 541511)',
                'Section 508 / WCAG accessibility on every build',
                'SLED-ready web assets for state, local & education procurement',
            ],
            'consultation_service' => 'Web Development',
        ],
        [
            'tab_id' => 'sled-tab',
            'tab_label' => 'SLED Bidder',
            'pane_id' => 'sled',
            'image' => 'assets/img/services/solutio-sled.jpg',
            'image_alt' => 'Procurement team reviewing SLED RFP and contract-ready IT capabilities',
            'stat_count' => '5',
            'stat_suffix' => '',
            'stat_label' => 'NAICS codes on capability statements.',
            'title' => 'SLED Bidder',
            'description' => 'De-Weboo is a contract-ready SLED bidder for state, local, and education authorities. We deliver NAICS-mapped software, web, mobile, and IT solutions with Section 508 / WCAG accessibility and audit-ready documentation for public-sector RFPs and RFQs.',
            'bullets' => [
                'Contract-ready SLED bidder for state, local & education authorities',
                'NAICS 541511, 541512, 541519, 541810 & 541910 capabilities',
                'Procurement-ready deliverables with HIPAA & Section 508 compliance',
            ],
            'consultation_service' => 'SLED Bidder',
        ],
        [
            'tab_id' => 'ai-tab',
            'tab_label' => 'AI Automation',
            'pane_id' => 'ai-automation',
            'image' => 'assets/img/services/solutio-ai.jpg',
            'image_alt' => 'Engineer configuring AI workflow automation and LLM integrations',
            'stat_count' => '40',
            'stat_suffix' => '+',
            'stat_label' => 'AI workflows & LLM integrations deployed.',
            'title' => 'AI Automation',
            'description' => 'Under NAICS 541511, we deliver custom AI integrations, workflow automations, and LLM configurations—enterprise AI workflows for B2B, B2C, B2A, and medical environments.',
            'bullets' => [
                'Custom AI integrations, workflow automations & LLM configurations (NAICS 541511)',
                'LLM deployment, prompt engineering & enterprise AI workflows',
                'Audit-ready AI frameworks for B2B/B2C, B2A & medical environments',
            ],
            'consultation_service' => 'AI Automation',
        ],
        [
            'tab_id' => 'contact-tab',
            'tab_label' => 'Medical',
            'pane_id' => 'contact',
            'image' => 'assets/img/services/solutio-medical.jpg',
            'image_alt' => 'Healthcare team reviewing HIPAA-aligned patient portal on tablet',
            'stat_count' => '76',
            'stat_suffix' => '+',
            'stat_label' => 'Wireframe & prototype UX design.',
            'title' => 'Custom Medical Systems',
            'description' => 'High-security medical websites and HIPAA-aligned patient portals—clinical workflows and secure healthcare infrastructure for providers, payers, and public-health authorities under NAICS 541511.',
            'bullets' => [
                'HIPAA-aligned architecture & audit-ready controls',
                'Clinical dashboards, patient portals & EHR integrations',
                'B2B, B2C & B2A healthcare delivery models',
            ],
            'consultation_service' => 'Custom Medical Systems',
        ],
    ];
}

function dw_render_solution_tab_thumb(array $tab): void
{
    ?>
                            <div class="solutio-thumb position-relative rounded-3 w-100">
                                <img loading="lazy" src="<?php echo e($tab['image']); ?>" alt="<?php echo e($tab['image_alt']); ?>" class="rounded-3 w-100 solutio-thumb-img">
                                <div class="contents whitebg rounded-4 p-xxl-5 p-4 m-xxl-5 m-xl-4 m-lg-3 m-2">
                                    <div class="cont d-flex align-items-center gap-0 mb-2">
                                        <span class="count fs-two black fw-semibold"><?php echo e($tab['stat_count']); ?></span>
<?php if ($tab['stat_suffix'] !== '') : ?>
                                        <span class="fs-two black fw-semibold"><?php echo e($tab['stat_suffix']); ?></span>
<?php endif; ?>
                                    </div>
                                    <h5 class="fw_500 black">
                                        <?php echo e($tab['stat_label']); ?>
                                    </h5>
                                </div>
                            </div>
    <?php
}
