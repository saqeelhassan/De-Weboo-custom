<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

/**
 * Homepage solution tabs (Web, AI, Medical) — image + overlay stats per service.
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
            'description' => 'We deliver custom web apps, e-commerce platforms, and high-security medical websites and patient portals—responsive B2B/B2C/B2A platforms built for performance, accessibility, and audit-ready documentation.',
            'bullets' => [
                'Custom web applications & enterprise portals',
                'Section 508 / WCAG accessibility on every build',
            ],
            'consultation_service' => 'Web Development',
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
            'description' => 'We deliver custom AI integrations, workflow automations, and LLM configurations—enterprise AI workflows for B2B, B2C, B2A, and medical environments.',
            'bullets' => [
                'Custom AI integrations, workflow automations & LLM configurations',
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
            'description' => 'High-security medical websites and HIPAA-aligned patient portals—clinical workflows and secure healthcare infrastructure for providers, payers, and public-health authorities.',
            'bullets' => [
                'HIPAA-aligned architecture & audit-ready controls',
                'Clinical dashboards, patient portals & EHR integrations',
                'B2B, B2C & B2A healthcare delivery models',
            ],
            'consultation_service' => 'Custom Medical Systems',
        ],
        [
            'tab_id' => 'realestate-tab',
            'tab_label' => 'Real Estate',
            'pane_id' => 'realestate',
            'image' => 'assets/img/services/service-detail-enterprise.jpg',
            'image_alt' => 'Real estate team reviewing a property listing platform dashboard',
            'stat_count' => '30',
            'stat_suffix' => '+',
            'stat_label' => 'Real estate platforms launched.',
            'title' => 'Real Estate Website Development',
            'description' => 'Property listing platforms, agent and brokerage websites, and rental portals—IDX/MLS integrations, map-based search, and lead capture built for conversion.',
            'bullets' => [
                'IDX/MLS integration & automated listing sync',
                'Lead capture & CRM routing for agents and teams',
                'Fast map and filter-based property search',
            ],
            'consultation_service' => 'Real Estate Website Development',
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
