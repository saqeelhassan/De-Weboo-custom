<?php

declare(strict_types=1);

/**
 * De-Weboo Dev team/department profiles for cards and team-details.php.
 *
 * @return array<string, array{
 *     slug: string,
 *     name: string,
 *     role: string,
 *     icon: string,
 *     intro: string,
 *     bio: string,
 *     highlights: list<string>,
 *     location: string,
 *     qualification: string,
 *     skills: list<array{label: string, percent: int}>
 * }>
 */
function dw_team_members(): array
{
    return [
        'development' => [
            'slug' => 'development',
            'name' => 'Development Team',
            'role' => 'Web, Mobile & Enterprise Engineering',
            'icon' => 'fa-solid fa-code',
            'intro' => 'Our development team builds secure web, mobile, and enterprise platforms for B2B, B2C, and B2A delivery.',
            'bio' => 'The Development Team at De-Weboo Dev designs and ships secure web applications, mobile apps, real estate platforms, and custom enterprise software for commercial and public-sector clients.',
            'highlights' => [
                'Architects secure web, mobile, and enterprise platforms for B2B, B2C, and B2A delivery.',
                'Runs engineering sprints, code reviews, and Section 508 / WCAG accessibility implementation.',
                'Specializes in custom development for enterprise and healthcare buyers.',
                'Partners with DevOps and project teams to ship audit-ready releases on schedule.',
            ],
            'location' => 'Remote',
            'qualification' => 'Full-stack engineers & solution architects',
            'skills' => [
                ['label' => 'Web & Mobile Development', 'percent' => 92],
                ['label' => 'Enterprise Architecture', 'percent' => 88],
                ['label' => 'Contract-Ready Delivery', 'percent' => 85],
            ],
        ],
        'devops-cloud' => [
            'slug' => 'devops-cloud',
            'name' => 'DevOps & Cloud Team',
            'role' => 'Infrastructure, CI/CD & Cloud Systems',
            'icon' => 'fa-solid fa-cloud',
            'intro' => 'Our DevOps & Cloud team manages infrastructure, CI/CD pipelines, and secure deployment workflows that keep De-Weboo Dev platforms reliable in production.',
            'bio' => 'The DevOps & Cloud Team at De-Weboo Dev ensures HIPAA-friendly hosting, automated releases, and resilient cloud infrastructure for web, mobile, and data platforms.',
            'highlights' => [
                'Builds and maintains CI/CD pipelines for rapid, low-risk production releases.',
                'Implements monitoring, backups, and security hardening across cloud environments.',
                'Supports migration, scaling, and uptime for enterprise and public-sector workloads.',
                'Architects networks, servers, and storage aligned with enterprise security standards.',
            ],
            'location' => 'Remote',
            'qualification' => 'Cloud, infrastructure & site reliability specialists',
            'skills' => [
                ['label' => 'Cloud & CI/CD', 'percent' => 90],
                ['label' => 'Infrastructure Security', 'percent' => 87],
                ['label' => 'Monitoring & Uptime', 'percent' => 88],
            ],
        ],
        'hr' => [
            'slug' => 'hr',
            'name' => 'HR Team',
            'role' => 'People Operations & Culture',
            'icon' => 'fa-solid fa-users',
            'intro' => 'Our HR team leads people operations, hiring, and team culture across De-Weboo Dev\'s engineering, marketing, and delivery teams.',
            'bio' => 'The HR Team at De-Weboo Dev manages recruitment, onboarding, and employee experience for B2B, B2C, and B2A project teams.',
            'highlights' => [
                'Leads recruitment and onboarding for engineering, marketing, and delivery teams.',
                'Maintains policies, performance reviews, and employee engagement programs.',
                'Supports managers with team structure, growth planning, and conflict resolution.',
                'Coordinates culture, communication, and workplace operations across departments.',
            ],
            'location' => 'Remote',
            'qualification' => 'Talent acquisition & employee relations specialists',
            'skills' => [
                ['label' => 'Talent Acquisition', 'percent' => 92],
                ['label' => 'Employee Relations', 'percent' => 90],
                ['label' => 'HR Operations', 'percent' => 88],
            ],
        ],
        'data-engineering' => [
            'slug' => 'data-engineering',
            'name' => 'Data Engineering Team',
            'role' => 'Data Pipelines, Dashboards & PACS Integration',
            'icon' => 'fa-solid fa-database',
            'intro' => 'Our data engineering team designs secure data pipelines, dashboards, and healthcare integrations that power analytics and compliance for De-Weboo Dev clients.',
            'bio' => 'The Data Engineering Team at De-Weboo Dev builds secure data architecture, ETL workflows, reporting layers, and PACS/RIS/DICOM integrations for enterprise and healthcare organizations.',
            'highlights' => [
                'Engineers secure data pipelines and warehouse models for operational reporting.',
                'Builds administrative dashboards with role-based access and audit trails.',
                'Implements and integrates PACS, RIS, and DICOM systems for medical imaging workflows.',
                'Supports HIPAA-aligned data handling practices for regulated environments.',
            ],
            'location' => 'Remote',
            'qualification' => 'Data & healthcare integration engineers',
            'skills' => [
                ['label' => 'Data Pipelines', 'percent' => 91],
                ['label' => 'Dashboard Engineering', 'percent' => 87],
                ['label' => 'PACS & DICOM Integration', 'percent' => 89],
            ],
        ],
        'marketing-seo' => [
            'slug' => 'marketing-seo',
            'name' => 'Digital Marketing & SEO Team',
            'role' => 'Campaigns, Growth & Search Visibility',
            'icon' => 'fa-solid fa-bullhorn',
            'intro' => 'Our digital marketing & SEO team runs campaigns, lead-generation funnels, and search visibility programs for De-Weboo Dev commercial and B2B clients.',
            'bio' => 'The Digital Marketing & SEO Team at De-Weboo Dev drives consumer marketing, paid media, SEO, and conversion-focused content.',
            'highlights' => [
                'Plans and executes multi-channel campaigns for lead generation and brand growth.',
                'Optimizes landing pages, ad creative, and funnel analytics for measurable ROI.',
                'Improves organic search visibility with technical, on-page, and AEO-friendly SEO.',
                'Reports performance metrics that tie marketing spend to qualified pipeline.',
            ],
            'location' => 'Remote',
            'qualification' => 'Digital marketing & SEO strategists',
            'skills' => [
                ['label' => 'Digital Campaigns', 'percent' => 88],
                ['label' => 'SEO & Analytics', 'percent' => 86],
                ['label' => 'Lead Generation', 'percent' => 85],
            ],
        ],
        'project-management' => [
            'slug' => 'project-management',
            'name' => 'Project Management Team',
            'role' => 'Delivery Coordination & Client Success',
            'icon' => 'fa-solid fa-diagram-project',
            'intro' => 'Our project management team coordinates planning, client onboarding, and delivery across De-Weboo Dev software engagements.',
            'bio' => 'The Project Management Team at De-Weboo Dev keeps teams aligned on scope, schedules, and client expectations across web and IT projects.',
            'highlights' => [
                'Tracks milestones, dependencies, and deliverables across active engagements.',
                'Facilitates stand-ups, retrospectives, and stakeholder check-ins.',
                'Documents requirements and change requests for transparent delivery.',
                'Supports QA handoffs and launch readiness for client go-lives.',
            ],
            'location' => 'Remote',
            'qualification' => 'Delivery & client success managers',
            'skills' => [
                ['label' => 'Delivery Coordination', 'percent' => 89],
                ['label' => 'Stakeholder Management', 'percent' => 87],
                ['label' => 'Documentation', 'percent' => 85],
            ],
        ],
    ];
}

function dw_team_member(?string $slug): ?array
{
    if ($slug === null || $slug === '') {
        return null;
    }

    $members = dw_team_members();

    return $members[$slug] ?? null;
}

function dw_team_member_url(string $slug): string
{
    return '/team/' . rawurlencode($slug);
}
