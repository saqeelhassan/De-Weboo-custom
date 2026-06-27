<?php

declare(strict_types=1);

/**
 * De-Weboo team profiles for cards and team-details.php.
 *
 * @return array<string, array{
 *     slug: string,
 *     name: string,
 *     role: string,
 *     image: string,
 *     detail_image: string,
 *     intro: string,
 *     bio: string,
 *     highlights: list<string>,
 *     location: string,
 *     qualification: string,
 *     linkedin?: string,
 *     skills: list<array{label: string, percent: int}>
 * }>
 */
function dw_team_members(): array
{
    return [
        'aqeel' => [
            'slug' => 'aqeel',
            'name' => 'Syed Aqeel Hassan Gillani',
            'role' => 'Lead Developer, CEO & Founder',
            'image' => 'assets/img/team/aqeel.jpg',
            'detail_image' => 'assets/img/team/team-details-aqeel.jpg',
            'intro' => 'Syed Aqeel Hassan Gillani leads software development projects, focusing on secure web, mobile, and enterprise architecture for B2B, B2C, and B2A delivery.',
            'bio' => 'Syed Aqeel Hassan Gillani is Lead Developer at De-Weboo with 8+ years of experience building secure web applications, mobile apps, and custom software for enterprise and public-sector clients.',
            'highlights' => [
                'Architects secure web, mobile, and enterprise platforms for B2B, B2C, and B2A delivery.',
                'Leads engineering sprints, code reviews, and Section 508 / WCAG accessibility implementation.',
                'Specializes in NAICS-aligned custom development for SLED and healthcare buyers.',
                'Partners with DevOps and project teams to ship audit-ready releases on schedule.',
            ],
            'location' => 'Pakistan',
            'qualification' => 'Master Degree',
            'linkedin' => 'https://www.linkedin.com/in/aqeel-hassan-gilani/',
            'skills' => [
                ['label' => 'Web & Mobile Development', 'percent' => 92],
                ['label' => 'Enterprise Architecture', 'percent' => 88],
                ['label' => 'SLED-Ready Delivery', 'percent' => 85],
            ],
        ],
        'asad' => [
            'slug' => 'asad',
            'name' => 'Syed Ali Asad Jafri',
            'role' => 'DevOps Engineer',
            'image' => 'assets/img/team/asad.jpg',
            'detail_image' => 'assets/img/team/asad.jpg',
            'intro' => 'Syed Ali Asad Jafri manages cloud infrastructure, CI/CD pipelines, and secure deployment workflows that keep De-Weboo platforms reliable in production.',
            'bio' => 'Syed Ali Asad Jafri is DevOps Engineer at De-Weboo, ensuring HIPAA-friendly hosting, automated releases, and resilient infrastructure for web, mobile, and data platforms.',
            'highlights' => [
                'Builds and maintains CI/CD pipelines for rapid, low-risk production releases.',
                'Implements monitoring, backups, and security hardening across cloud environments.',
                'Supports migration, scaling, and uptime for enterprise and public-sector workloads.',
                'Collaborates with developers on containerization, staging, and release governance.',
            ],
            'location' => 'Pakistan',
            'qualification' => 'Bachelor Degree',
            'linkedin' => 'https://www.linkedin.com/in/syed-ali-asad-jafri-34a98b225/',
            'skills' => [
                ['label' => 'Cloud & CI/CD', 'percent' => 90],
                ['label' => 'Infrastructure Security', 'percent' => 86],
                ['label' => 'Monitoring & Uptime', 'percent' => 88],
            ],
        ],
        'faisal' => [
            'slug' => 'faisal',
            'name' => 'Faisal Mukhtar',
            'role' => 'IT Infrastructure & Cloud Systems Specialist',
            'image' => 'assets/img/team/faisal.jpg',
            'detail_image' => 'assets/img/team/faisal.jpg',
            'intro' => 'Faisal Mukhtar designs and maintains cloud infrastructure, enterprise networks, and production systems that keep De-Weboo platforms secure, scalable, and highly available.',
            'bio' => 'Faisal Mukhtar is IT Infrastructure & Cloud Systems Specialist at De-Weboo, delivering resilient hosting, virtualization, and cloud architecture for web, mobile, and data workloads across commercial and public-sector engagements.',
            'highlights' => [
                'Architects and manages cloud environments for secure, high-availability production workloads.',
                'Implements network, server, and storage solutions aligned with enterprise security standards.',
                'Supports disaster recovery, backup strategy, and capacity planning for growing platforms.',
                'Partners with DevOps and engineering teams on infrastructure readiness for client go-lives.',
            ],
            'location' => 'Pakistan',
            'qualification' => 'Master Degree',
            'linkedin' => 'https://www.linkedin.com/in/hfaisal/',
            'skills' => [
                ['label' => 'Cloud Infrastructure', 'percent' => 91],
                ['label' => 'Systems & Networking', 'percent' => 89],
                ['label' => 'Security & Reliability', 'percent' => 87],
            ],
        ],
        'hajra' => [
            'slug' => 'hajra',
            'name' => 'Syeda Hajra Batool',
            'role' => 'Project Manager',
            'image' => 'assets/img/team/hajra.jpg',
            'detail_image' => 'assets/img/team/hajra.jpg',
            'intro' => 'Syeda Hajra Batool coordinates delivery timelines, client communication, and cross-functional execution across De-Weboo software and marketing engagements.',
            'bio' => 'Syeda Hajra Batool is Project Manager at De-Weboo, aligning stakeholders, sprint plans, and milestones for B2B, B2C, and SLED-ready projects from discovery through launch.',
            'highlights' => [
                'Runs agile ceremonies, status reporting, and risk tracking for multi-disciplinary teams.',
                'Translates RFP and procurement requirements into actionable delivery roadmaps.',
                'Keeps clients informed with clear milestones, demos, and acceptance criteria.',
                'Coordinates engineering, marketing, and QA for on-time, on-spec releases.',
            ],
            'location' => 'Pakistan',
            'qualification' => 'Master Degree',
            'linkedin' => 'https://www.linkedin.com/in/hajra-batool-syed/',
            'skills' => [
                ['label' => 'Project Delivery', 'percent' => 92],
                ['label' => 'Client Communication', 'percent' => 90],
                ['label' => 'Agile Planning', 'percent' => 88],
            ],
        ],
        'mehroz' => [
            'slug' => 'mehroz',
            'name' => 'Mehroz Alam',
            'role' => 'Senior Data Engineer',
            'image' => 'assets/img/team/mehroz.jpg',
            'detail_image' => 'assets/img/team/mehroz.jpg',
            'intro' => 'Mehroz Alam designs secure data pipelines, dashboards, and administrative systems that power analytics and compliance for De-Weboo clients.',
            'bio' => 'Mehroz Alam is Senior Data Engineer at De-Weboo, building NAICS 541512-aligned data architecture, ETL workflows, and reporting layers for enterprise and healthcare organizations.',
            'highlights' => [
                'Engineers secure data pipelines and warehouse models for operational reporting.',
                'Builds administrative dashboards with role-based access and audit trails.',
                'Integrates APIs, databases, and automation for reliable data flows.',
                'Supports HIPAA-aligned data handling practices for regulated environments.',
            ],
            'location' => 'Pakistan',
            'qualification' => 'Master Degree',
            'linkedin' => 'https://www.linkedin.com/in/mehrozalam/',
            'skills' => [
                ['label' => 'Data Pipelines', 'percent' => 91],
                ['label' => 'Dashboard Engineering', 'percent' => 87],
                ['label' => 'Data Security', 'percent' => 85],
            ],
        ],
        'hamza' => [
            'slug' => 'hamza',
            'name' => 'Meer Hamza',
            'role' => 'Digital Marketing',
            'image' => 'assets/img/team/hamza.jpg',
            'detail_image' => 'assets/img/team/hamza.jpg',
            'intro' => 'Meer Hamza leads digital marketing campaigns, lead-generation funnels, and growth experiments for De-Weboo commercial and B2B clients.',
            'bio' => 'Meer Hamza drives digital marketing at De-Weboo—consumer marketing, paid media, and conversion-focused content under NAICS 541810 and 541910 capabilities.',
            'highlights' => [
                'Plans and executes multi-channel campaigns for lead generation and brand growth.',
                'Optimizes landing pages, ad creative, and funnel analytics for measurable ROI.',
                'Coordinates with SEO and content teams on AEO-friendly campaign assets.',
                'Reports performance metrics that tie marketing spend to qualified pipeline.',
            ],
            'location' => 'Pakistan',
            'qualification' => 'Bachelor Degree',
            'linkedin' => 'https://www.linkedin.com/in/meer-hamza-186a98171/',
            'skills' => [
                ['label' => 'Digital Campaigns', 'percent' => 88],
                ['label' => 'Lead Generation', 'percent' => 86],
                ['label' => 'Analytics & Reporting', 'percent' => 84],
            ],
        ],
        'naima' => [
            'slug' => 'naima',
            'name' => 'Naima Shahzadi',
            'role' => 'Project Manager',
            'image' => 'assets/img/team/naima.jpg',
            'detail_image' => 'assets/img/team/naima.jpg',
            'intro' => 'Naima Shahzadi supports project planning, client onboarding, and delivery coordination for De-Weboo software engagements.',
            'bio' => 'Naima Shahzadi is Project Manager at De-Weboo, helping teams stay aligned on scope, schedules, and client expectations across web and IT projects.',
            'highlights' => [
                'Tracks milestones, dependencies, and deliverables across active engagements.',
                'Facilitates stand-ups, retrospectives, and stakeholder check-ins.',
                'Documents requirements and change requests for transparent delivery.',
                'Supports QA handoffs and launch readiness for client go-lives.',
            ],
            'location' => 'Pakistan',
            'qualification' => 'Bachelor Degree',
            'linkedin' => 'https://www.linkedin.com/in/naima-shahzadi-5720a7251/',
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
    return 'team-details.php?member=' . rawurlencode($slug);
}
