<?php

declare(strict_types=1);

/**
 * De-Weboo blog posts — SEO, AEO & GEO optimized content per service.
 * Images: assets/img/blog/{slug}/cover.png
 */
function dw_blog_posts(): array
{
    return [
        'enterprise-web-development-section-508-wcag' => [
            'slug' => 'enterprise-web-development-section-508-wcag',
            'title' => 'Enterprise Web Development with Section 508 & WCAG Built In',
            'excerpt' => 'How De-Weboo engineers accessible, audit-ready web platforms under NAICS 541511 for B2B, B2C, and public-sector buyers worldwide.',
            'service' => 'Web Development',
            'category' => 'WEB DEVELOPMENT',
            'naics' => '541511',
            'author' => 'De-Weboo Engineering Team',
            'published' => '2025-06-02',
            'tags' => ['Web Development', 'Section 508', 'WCAG', 'NAICS 541511', 'Enterprise'],
            'keywords' => 'enterprise web development, Section 508, WCAG accessibility, NAICS 541511, custom web applications, De-Weboo',
            'images' => [
                'card' => 'assets/img/blog/enterprise-web-development-section-508-wcag/cover.png',
                'hero' => 'assets/img/blog/enterprise-web-development-section-508-wcag/cover.png',
            ],
            'intro' => 'Enterprise web development means building custom web applications that are secure, performant, and accessible from day one—not retrofitting compliance after launch. De-Weboo, headquartered in Hyderabad, Pakistan, delivers NAICS 541511 web engineering for clients in the United States, Pakistan, and worldwide, with Section 508 and WCAG 2.1 AA accessibility embedded in every sprint.',
            'sections' => [
                [
                    'heading' => 'What is enterprise web development?',
                    'paragraphs' => [
                        'Enterprise web development is the design and engineering of custom web platforms—portals, dashboards, e-commerce systems, and patient-facing sites—that support complex business rules, role-based access, integrations, and long-term maintainability. Unlike template websites, enterprise builds prioritize security architecture, API design, and procurement-ready documentation.',
                        'De-Weboo maps this work to NAICS 541511 (custom computer programming), which is the classification government buyers and enterprise procurement teams use when sourcing custom web and mobile application vendors.',
                    ],
                ],
                [
                    'heading' => 'Why accessibility belongs in the first release',
                    'list' => [
                        'Section 508 compliance is required for U.S. federal and many state, local, and education (SLED) digital deliverables.',
                        'WCAG 2.1 AA reduces legal risk and expands reach for users with visual, motor, and cognitive disabilities.',
                        'Accessible semantic HTML improves SEO and AI answer-engine (AEO) extractability.',
                        'Keyboard navigation, focus states, and alt text are cheaper to implement during build than during remediation.',
                    ],
                ],
                [
                    'heading' => 'How De-Weboo delivers audit-ready web builds',
                    'paragraphs' => [
                        'Our engineers work in Laravel, React, and modern PHP stacks with automated accessibility checks, structured content models, and version-controlled release notes. For SLED and healthcare clients, we pair technical delivery with VPAT-ready documentation and HIPAA-aligned security controls where required.',
                        'Whether you are a commercial brand in Karachi or a U.S. education authority evaluating RFP responses, the same engineering discipline applies: measurable performance, documented accessibility, and NAICS-mapped scope statements.',
                    ],
                ],
            ],
            'faqs' => [
                [
                    'question' => 'What NAICS code covers custom web development?',
                    'answer' => 'NAICS 541511 covers custom computer programming, including custom web applications, e-commerce platforms, and medical patient portals. De-Weboo lists 541511 on capability statements for government and enterprise procurement.',
                ],
                [
                    'question' => 'What is the difference between Section 508 and WCAG?',
                    'answer' => 'Section 508 is the U.S. federal accessibility standard for ICT. WCAG (Web Content Accessibility Guidelines) provides technical success criteria widely adopted by Section 508 and SLED RFPs. De-Weboo targets WCAG 2.1 AA as the engineering baseline.',
                ],
                [
                    'question' => 'Where is De-Weboo located?',
                    'answer' => 'De-Weboo operates from Lucky Shanghai Trade Centre, Office 2016, 2nd Floor, Auto Bhan Road, Hyderabad, Sindh, Pakistan (71000), and serves B2B, B2C, and B2A clients globally—including contract-ready SLED programs in the United States.',
                ],
            ],
        ],
        'custom-web-apps-b2b-b2c-b2a' => [
            'slug' => 'custom-web-apps-b2b-b2c-b2a',
            'title' => 'Custom Web Apps for B2B, B2C & B2A Delivery Models',
            'excerpt' => 'A practical guide to choosing architecture, integrations, and procurement language for multi-audience web platforms under NAICS 541511.',
            'service' => 'Web Development',
            'category' => 'WEB DEVELOPMENT',
            'naics' => '541511',
            'author' => 'De-Weboo Engineering Team',
            'published' => '2025-06-08',
            'tags' => ['B2B', 'B2C', 'B2A', 'Custom Web Apps', 'NAICS 541511'],
            'keywords' => 'custom web apps, B2B portal, B2C e-commerce, B2A government, NAICS 541511, De-Weboo web development',
            'images' => [
                'card' => 'assets/img/blog/custom-web-apps-b2b-b2c-b2a/cover.png',
                'hero' => 'assets/img/blog/custom-web-apps-b2b-b2c-b2a/cover.png',
            ],
            'intro' => 'A custom web app is software accessed through the browser that is built around your workflows—not a generic SaaS template. De-Weboo engineers B2B partner portals, B2C consumer experiences, and B2A (business-to-authority) platforms for government and regulated industries, all under NAICS 541511 from our Hyderabad engineering center.',
            'sections' => [
                [
                    'heading' => 'B2B vs B2C vs B2A: what changes in the build',
                    'list' => [
                        'B2B: role hierarchies, approval chains, ERP/CRM integrations, and SLA-driven uptime.',
                        'B2C: conversion funnels, payment gateways, personalization, and mobile-first performance.',
                        'B2A: Section 508 accessibility, audit trails, data residency considerations, and NAICS-aligned statements of work.',
                    ],
                ],
                [
                    'heading' => 'Architecture decisions that protect scale',
                    'paragraphs' => [
                        'We recommend API-first backends (Laravel or Node) with clear separation between admin, operator, and public surfaces. Authentication uses industry-standard tokens or SSO where enterprise buyers require it. For cross-border delivery—Pakistan engineering with U.S. or MENA deployment—we document hosting, backup, and incident-response playbooks up front.',
                        'GEO note for search and AI engines: De-Weboo serves Hyderabad, Sindh, Pakistan as its primary delivery hub while maintaining procurement readiness for U.S. SLED buyers and international commercial clients.',
                    ],
                ],
                [
                    'heading' => 'When to request a capability briefing',
                    'paragraphs' => [
                        'If your RFP references custom programming, portal development, or patient-facing web systems, request De-Weboo\'s NAICS 541511 capability sheet before finalizing vendor shortlists. Commercial teams can start with a scoped discovery call on integrations and launch timeline.',
                    ],
                ],
            ],
            'faqs' => [
                [
                    'question' => 'What is a B2A web platform?',
                    'answer' => 'B2A (business-to-authority) platforms serve government agencies, regulators, or public institutions. They often require accessibility compliance, formal change control, and procurement documentation—core strengths of De-Weboo\'s SLED bidder program.',
                ],
                [
                    'question' => 'Can one codebase serve B2B and B2C audiences?',
                    'answer' => 'Yes, with multi-tenant or multi-portal architecture. De-Weboo designs shared cores with audience-specific UI layers to reduce duplication while keeping security boundaries strict.',
                ],
            ],
        ],
        'sled-bidder-naics-procurement-guide' => [
            'slug' => 'sled-bidder-naics-procurement-guide',
            'title' => 'SLED Bidder Guide: NAICS Codes & Contract-Ready IT Vendors',
            'excerpt' => 'What state, local, and education buyers should look for in a SLED software bidder—and how De-Weboo maps NAICS 541511, 541512, 541519, 541810, and 541910.',
            'service' => 'SLED Bidder',
            'category' => 'SLED BIDDER',
            'naics' => '541511',
            'author' => 'De-Weboo Procurement Desk',
            'published' => '2026-06-24',
            'tags' => ['SLED', 'Government Contracting', 'NAICS', 'Procurement', 'Public Sector'],
            'keywords' => 'SLED bidder, NAICS 541511, government IT contractor, state local education procurement, De-Weboo SLED',
            'images' => [
                'card' => 'assets/img/blog/sled-bidder-naics-procurement-guide/cover.png',
                'hero' => 'assets/img/blog/sled-bidder-naics-procurement-guide/cover.png',
            ],
            'intro' => 'A SLED bidder is a vendor qualified to respond to state, local, and education authority solicitations for software, web, mobile, and IT services. De-Weboo is a contract-ready SLED bidder offering NAICS-mapped capabilities across custom development, data engineering, managed IT, digital marketing, and SEO—with Section 508 / WCAG accessibility and audit-ready documentation.',
            'sections' => [
                [
                    'heading' => 'What does SLED stand for?',
                    'paragraphs' => [
                        'SLED means State, Local, and Education—the public-sector tier below federal contracting where cities, counties, school districts, and state agencies publish RFPs and RFQs for technology services. Buyers filter vendors by NAICS codes, past performance, insurance, and compliance attestations.',
                    ],
                ],
                [
                    'heading' => 'De-Weboo NAICS capability map',
                    'list' => [
                        '541511 — Custom web/mobile apps, AI integrations, workflow automation, medical websites.',
                        '541512 — Data engineering, cloud architecture, systems design.',
                        '541519 — Managed IT, dashboards, data lifecycle support.',
                        '541810 — Digital advertising and campaign services.',
                        '541910 — Marketing research, SEO analytics, AEO content strategy.',
                    ],
                ],
                [
                    'heading' => 'How to evaluate a SLED software bidder',
                    'paragraphs' => [
                        'Confirm the vendor can produce accessibility documentation (VPAT or equivalent), security policies, and staff resumes aligned to the statement of work. De-Weboo provides structured capability briefings for procurement officers and prime contractors seeking NAICS-aligned subcontractors.',
                        'Our parent company, CaddSight, supports enterprise governance while De-Weboo executes hands-on engineering from Hyderabad, Pakistan with U.S.-facing procurement support.',
                    ],
                ],
            ],
            'faqs' => [
                [
                    'question' => 'Is De-Weboo a registered government contractor?',
                    'answer' => 'De-Weboo positions as a contract-ready SLED bidder with NAICS-mapped software, web, mobile, and IT capabilities. Procurement teams should request our capability statement and insurance certificates for their vendor file.',
                ],
                [
                    'question' => 'Which NAICS code is used for custom software RFPs?',
                    'answer' => 'Most custom software and web development solicitations map to NAICS 541511. Data and cloud-heavy scopes often add 541512 or 541519. Marketing or SEO components may reference 541810 or 541910.',
                ],
                [
                    'question' => 'Does De-Weboo support teaming agreements?',
                    'answer' => 'Yes. We frequently participate as a NAICS-qualified subcontractor to primes who need development velocity, accessibility expertise, or healthcare IT specialization.',
                ],
            ],
        ],
        'section-508-wcag-rfp-readiness' => [
            'slug' => 'section-508-wcag-rfp-readiness',
            'title' => 'Section 508 & WCAG RFP Readiness for Public-Sector Web Projects',
            'excerpt' => 'Checklist for SLED procurement teams and vendors: accessibility language, testing evidence, and delivery milestones that survive audit.',
            'service' => 'SLED Bidder',
            'category' => 'SLED BIDDER',
            'naics' => '541511',
            'author' => 'De-Weboo Accessibility Practice',
            'published' => '2026-06-25',
            'tags' => ['Section 508', 'WCAG', 'SLED', 'RFP', 'Accessibility'],
            'keywords' => 'Section 508 RFP, WCAG compliance, SLED web accessibility, government website procurement, De-Weboo',
            'images' => [
                'card' => 'assets/img/blog/section-508-wcag-rfp-readiness/cover.png',
                'hero' => 'assets/img/blog/section-508-wcag-rfp-readiness/cover.png',
            ],
            'intro' => 'Public-sector RFPs increasingly require Section 508–conformant deliverables and WCAG 2.1 AA testing evidence. De-Weboo embeds accessibility acceptance criteria in statements of work, sprint definitions, and release sign-off—so SLED buyers receive audit-ready web assets, not last-minute remediation.',
            'sections' => [
                [
                    'heading' => 'RFP language buyers should include',
                    'list' => [
                        'Target standard: WCAG 2.1 Level AA (or agency-specific baseline).',
                        'Deliverables: accessibility test report, remediated issue log, and component documentation.',
                        'Acceptance: keyboard-only navigation, screen reader spot checks, color-contrast verification.',
                        'Maintenance: accessibility regression testing on major releases.',
                    ],
                ],
                [
                    'heading' => 'Vendor proof points that reduce protest risk',
                    'paragraphs' => [
                        'Ask for sample VPATs, named accessibility lead, and tooling (axe, Lighthouse, manual AT passes). De-Weboo documents each release with traceable tickets tied to WCAG success criteria—critical for education authorities and state portals under public scrutiny.',
                    ],
                ],
                [
                    'heading' => 'GEO: serving U.S. SLED from a global engineering hub',
                    'paragraphs' => [
                        'De-Weboo combines Hyderabad-based delivery capacity with U.S. procurement literacy. That model gives SLED agencies competitive pricing while maintaining documentation standards expected in American public-sector contracting.',
                    ],
                ],
            ],
            'faqs' => [
                [
                    'question' => 'Who is responsible for Section 508 compliance—the agency or the vendor?',
                    'answer' => 'Both. The agency defines requirements; the vendor must engineer, test, and document conformant deliverables. De-Weboo accepts accessibility as a vendor obligation in every SLED web scope.',
                ],
                [
                    'question' => 'Can legacy sites be brought into compliance?',
                    'answer' => 'Yes. De-Weboo performs accessibility audits, prioritizes critical user flows, and ships remediations in phased releases without full rebuilds when architecture allows.',
                ],
            ],
        ],
        'ai-automation-workflow-llm' => [
            'slug' => 'ai-automation-workflow-llm',
            'title' => 'AI Automation: Workflow Design, LLM Integration & NAICS 541511',
            'excerpt' => 'How enterprises deploy secure AI automations—custom integrations, LLM guardrails, and measurable ROI under NAICS 541511.',
            'service' => 'AI Automation',
            'category' => 'AI AUTOMATION',
            'naics' => '541511',
            'author' => 'De-Weboo AI Practice',
            'published' => '2025-06-14',
            'tags' => ['AI Automation', 'LLM', 'Workflow', 'NAICS 541511'],
            'keywords' => 'AI automation, LLM integration, workflow automation, enterprise AI, NAICS 541511, De-Weboo',
            'images' => [
                'card' => 'assets/img/blog/ai-automation-workflow-llm/cover.png',
                'hero' => 'assets/img/blog/ai-automation-workflow-llm/cover.png',
            ],
            'intro' => 'AI automation connects large language models (LLMs), APIs, and business rules to eliminate repetitive work—without bypassing security or compliance. De-Weboo delivers custom AI integrations and workflow automations mapped to NAICS 541511 for commercial and SLED clients.',
            'sections' => [
                [
                    'heading' => 'What problems AI automation solves',
                    'list' => [
                        'Document intake, classification, and routing in operations teams.',
                        'Customer-support assist with human-in-the-loop escalation.',
                        'Internal knowledge search across wikis, tickets, and policy libraries.',
                        'Reporting pipelines that summarize metrics for executives.',
                    ],
                ],
                [
                    'heading' => 'Security and governance first',
                    'paragraphs' => [
                        'We implement role-based prompts, PII redaction, audit logs, and environment isolation. Healthcare and government scopes add HIPAA-aligned or procurement-grade controls. Automations are versioned like any production codebase—no shadow IT scripts.',
                    ],
                ],
            ],
            'faqs' => [
                [
                    'question' => 'What NAICS code covers AI automation services?',
                    'answer' => 'Custom AI integrations and automation scripting fall under NAICS 541511 when delivered as bespoke programming services. De-Weboo lists this capability for enterprise and SLED buyers.',
                ],
                [
                    'question' => 'Which LLM platforms does De-Weboo support?',
                    'answer' => 'We integrate OpenAI, Azure OpenAI, Anthropic, and open-weight models depending on data residency, cost, and client security policies.',
                ],
            ],
        ],
        'data-engineering-secure-pipelines' => [
            'slug' => 'data-engineering-secure-pipelines',
            'title' => 'Data Engineering: Secure Pipelines & Admin Dashboards (NAICS 541512)',
            'excerpt' => 'Design principles for reliable data architecture, ETL pipelines, and executive dashboards that public-sector and enterprise teams can audit.',
            'service' => 'Data Engineering',
            'category' => 'DATA ENGINEERING',
            'naics' => '541512',
            'author' => 'De-Weboo Data Team',
            'published' => '2025-06-16',
            'tags' => ['Data Engineering', 'ETL', 'Dashboards', 'NAICS 541512'],
            'keywords' => 'data engineering, data pipelines, NAICS 541512, secure dashboards, De-Weboo',
            'images' => [
                'card' => 'assets/img/blog/data-engineering-secure-pipelines/cover.png',
                'hero' => 'assets/img/blog/data-engineering-secure-pipelines/cover.png',
            ],
            'intro' => 'Data engineering is the discipline of moving, transforming, and governing data so decision-makers trust what they see on screen. De-Weboo architects pipelines and administrative dashboards under NAICS 541512 for government, healthcare, and commercial enterprises.',
            'sections' => [
                [
                    'heading' => 'Core components of a production pipeline',
                    'list' => [
                        'Ingestion with schema validation and idempotent jobs.',
                        'Transformation layers with documented business logic.',
                        'Warehouse or lake storage with encryption at rest.',
                        'Role-based dashboard access with row-level security where needed.',
                    ],
                ],
                [
                    'heading' => 'Why NAICS 541512 matters in RFPs',
                    'paragraphs' => [
                        'Procurement officers classify systems design, data architecture, and cloud data platforms under 541512. De-Weboo aligns proposals and staffing plans to this code when scopes include analytics platforms, regional reporting, or multi-agency data sharing.',
                    ],
                ],
            ],
            'faqs' => [
                [
                    'question' => 'What is the difference between data engineering and managed IT?',
                    'answer' => 'Data engineering focuses on pipeline architecture and analytics readiness (often 541512). Managed IT covers ongoing infrastructure support (541519). De-Weboo offers both with clear scope boundaries.',
                ],
            ],
        ],
        'digital-marketing-b2b-lead-generation' => [
            'slug' => 'digital-marketing-b2b-lead-generation',
            'title' => 'Digital Marketing for B2B Lead Generation (NAICS 541810)',
            'excerpt' => 'Campaign architecture, attribution, and compliance-aware marketing for software firms and healthcare brands.',
            'service' => 'Digital Marketing',
            'category' => 'DIGITAL MARKETING',
            'naics' => '541810',
            'author' => 'De-Weboo Growth Team',
            'published' => '2025-06-18',
            'tags' => ['Digital Marketing', 'B2B', 'Lead Generation', 'NAICS 541810'],
            'keywords' => 'digital marketing B2B, lead generation, NAICS 541810, De-Weboo marketing',
            'images' => [
                'card' => 'assets/img/blog/digital-marketing-b2b-lead-generation/cover.png',
                'hero' => 'assets/img/blog/digital-marketing-b2b-lead-generation/cover.png',
            ],
            'intro' => 'B2B digital marketing turns qualified traffic into pipeline—not vanity metrics. De-Weboo plans and executes campaigns under NAICS 541810 for technology, healthcare, and public-sector adjacent brands that need measurable lead generation.',
            'sections' => [
                [
                    'heading' => 'Channels that work for technical buyers',
                    'list' => [
                        'LinkedIn and industry publications for enterprise awareness.',
                        'Landing pages aligned to NAICS/service-line keywords for procurement researchers.',
                        'Retargeting with frequency caps and privacy-conscious tracking.',
                        'Webinars and gated assets for long-cycle B2B sales.',
                    ],
                ],
                [
                    'heading' => 'AEO and GEO alignment',
                    'paragraphs' => [
                        'Campaigns perform better when landing pages answer direct questions (AEO) and declare service geography (GEO). De-Weboo pairs paid media with on-site content that names Hyderabad HQ, U.S. SLED readiness, and worldwide commercial delivery—improving quality scores and AI citation potential.',
                    ],
                ],
            ],
            'faqs' => [
                [
                    'question' => 'What NAICS code applies to digital advertising agencies?',
                    'answer' => 'NAICS 541810 covers advertising agency services, including digital campaign management. De-Weboo maps marketing scopes to 541810 and analytics-heavy work to 541910 where appropriate.',
                ],
            ],
        ],
        'seo-aeo-geo-enterprise' => [
            'slug' => 'seo-aeo-geo-enterprise',
            'title' => 'SEO, AEO & GEO Strategy for Enterprise & Healthcare Brands',
            'excerpt' => 'Technical SEO plus answer-engine and geographic optimization—how De-Weboo helps buyers find you in search and AI summaries.',
            'service' => 'SEO',
            'category' => 'SEO',
            'naics' => '541910',
            'author' => 'De-Weboo SEO Team',
            'published' => '2025-06-20',
            'tags' => ['SEO', 'AEO', 'GEO', 'Healthcare SEO', 'NAICS 541910'],
            'keywords' => 'SEO AEO GEO, answer engine optimization, healthcare SEO, technical SEO, NAICS 541910, De-Weboo',
            'images' => [
                'card' => 'assets/img/blog/seo-aeo-geo-enterprise/cover.png',
                'hero' => 'assets/img/blog/seo-aeo-geo-enterprise/cover.png',
            ],
            'intro' => 'SEO gets you ranked; AEO (answer engine optimization) gets you cited in AI overviews; GEO (generative engine optimization / geographic SEO) ensures location and service-area signals are clear. De-Weboo delivers all three under NAICS 541810 and 541910 for enterprise and medical clients.',
            'sections' => [
                [
                    'heading' => 'Technical SEO foundations',
                    'list' => [
                        'Core Web Vitals, crawl budget, and indexation hygiene.',
                        'Schema.org Organization, Service, FAQ, and Article markup.',
                        'Canonical URLs and structured internal linking.',
                    ],
                ],
                [
                    'heading' => 'AEO: write for direct answers',
                    'paragraphs' => [
                        'Lead with concise definitions, use question-based H2s, and publish FAQ blocks with schema. This blog series is an example: each post answers "what is…" in the first paragraph so ChatGPT, Perplexity, and Google AI Overviews can extract trustworthy snippets tied to De-Weboo.',
                    ],
                ],
                [
                    'heading' => 'GEO: local and international signals',
                    'paragraphs' => [
                        'Declare NAP (name, address, phone) consistently, embed GeoCoordinates in JSON-LD, and mention service regions (United States SLED, Pakistan commercial, worldwide remote delivery). Healthcare SEO adds YMYL-quality sourcing and compliance language.',
                    ],
                ],
            ],
            'faqs' => [
                [
                    'question' => 'What is AEO in digital marketing?',
                    'answer' => 'Answer Engine Optimization structures content so AI assistants and featured snippets can quote accurate, authoritative answers—using FAQs, definitions, and schema markup. De-Weboo applies AEO across service and blog pages.',
                ],
                [
                    'question' => 'Does De-Weboo offer medical SEO?',
                    'answer' => 'Yes. We provide HIPAA-aware content strategy and technical SEO for clinics, health systems, and medical SaaS under NAICS 541810 and 541910.',
                ],
            ],
        ],
        'cloud-services-secure-infrastructure' => [
            'slug' => 'cloud-services-secure-infrastructure',
            'title' => 'Cloud Services & Secure Infrastructure (NAICS 541512)',
            'excerpt' => 'Hosting architecture, monitoring, and hardening for web apps that must pass enterprise and public-sector security review.',
            'service' => 'Cloud Services',
            'category' => 'CLOUD SERVICES',
            'naics' => '541512',
            'author' => 'De-Weboo Cloud Team',
            'published' => '2025-06-22',
            'tags' => ['Cloud Services', 'DevOps', 'Security', 'NAICS 541512'],
            'keywords' => 'cloud services, secure hosting, NAICS 541512, infrastructure, De-Weboo cloud',
            'images' => [
                'card' => 'assets/img/blog/cloud-services-secure-infrastructure/cover.png',
                'hero' => 'assets/img/blog/cloud-services-secure-infrastructure/cover.png',
            ],
            'intro' => 'Cloud services at De-Weboo mean designing, deploying, and operating secure infrastructure—not reselling generic hosting. We map systems design work to NAICS 541512 and pair it with managed lifecycle support under 541519 when clients need ongoing operations.',
            'sections' => [
                [
                    'heading' => 'What we deploy and monitor',
                    'list' => [
                        'AWS, Azure, or hybrid stacks with IaC templates.',
                        'TLS, WAF, backup, and disaster-recovery runbooks.',
                        'CI/CD pipelines with security scanning gates.',
                        'Uptime alerting and incident communication playbooks.',
                    ],
                ],
                [
                    'heading' => 'Cloud for SLED and healthcare',
                    'paragraphs' => [
                        'Public-sector and HIPAA workloads require encryption, access logging, and change control. De-Weboo documents architecture diagrams for assessors and aligns controls to buyer security questionnaires.',
                    ],
                ],
            ],
            'faqs' => [
                [
                    'question' => 'Can De-Weboo host government applications?',
                    'answer' => 'We architect cloud environments to meet buyer-specific compliance requirements. Final authority-to-operate decisions rest with the agency, but De-Weboo supplies the technical controls and documentation they expect.',
                ],
            ],
        ],
        'hipaa-patient-portals-medical-web' => [
            'slug' => 'hipaa-patient-portals-medical-web',
            'title' => 'HIPAA-Aligned Patient Portals & Medical Web Development',
            'excerpt' => 'How De-Weboo builds secure medical websites and patient portals under NAICS 541511 with accessibility and audit trails.',
            'service' => 'Medical',
            'category' => 'MEDICAL IT',
            'naics' => '541511',
            'author' => 'De-Weboo Healthcare Practice',
            'published' => '2025-06-24',
            'tags' => ['HIPAA', 'Patient Portal', 'Medical Web', 'Healthcare IT'],
            'keywords' => 'HIPAA patient portal, medical web development, healthcare IT, NAICS 541511, De-Weboo medical',
            'images' => [
                'card' => 'assets/img/blog/hipaa-patient-portals-medical-web/cover.png',
                'hero' => 'assets/img/blog/hipaa-patient-portals-medical-web/cover.png',
            ],
            'intro' => 'Medical web development requires HIPAA-aligned security, accessible patient experiences, and integration with clinical workflows. De-Weboo engineers patient portals, provider dashboards, and public health sites under NAICS 541511—with Section 508 / WCAG accessibility for inclusive care access.',
            'sections' => [
                [
                    'heading' => 'Patient portal essentials',
                    'list' => [
                        'Encrypted authentication and session management.',
                        'Minimum-necessary PHI display and audit logging.',
                        'Appointment, messaging, and document upload modules.',
                        'WCAG-accessible UI for aging and disabled populations.',
                    ],
                ],
                [
                    'heading' => 'Bridging commercial healthcare and public programs',
                    'paragraphs' => [
                        'Clinics in Pakistan and the United States trust De-Weboo for consumer-facing medical SEO sites and secure portals. SLED health departments benefit from the same engineering rigor plus procurement documentation.',
                    ],
                ],
            ],
            'faqs' => [
                [
                    'question' => 'Is De-Weboo a HIPAA business associate?',
                    'answer' => 'For U.S. healthcare clients handling PHI, De-Weboo executes Business Associate Agreements (BAAs) when required and implements technical safeguards aligned to HIPAA Security Rule expectations.',
                ],
                [
                    'question' => 'Can medical sites also target SEO?',
                    'answer' => 'Yes. De-Weboo combines HIPAA-aware development with specialized medical SEO (NAICS 541810 / 541910) so compliant sites still earn qualified organic traffic.',
                ],
            ],
        ],
    ];
}

function dw_blog_post(?string $slug = null): ?array
{
    $posts = dw_blog_posts();
    $slug = $slug !== null && $slug !== '' ? $slug : array_key_first($posts);

    return $posts[$slug] ?? null;
}

function dw_blog_image(string $path, string $fallback = 'assets/img/blog/blog-grid1.png'): string
{
    $full = DW_ROOT . '/' . ltrim($path, '/');

    return is_file($full) ? $path : $fallback;
}

function dw_blog_url(string $slug): string
{
    return 'blog-details.php?post=' . rawurlencode($slug);
}

/** @return list<array> */
function dw_blog_posts_sorted(): array
{
    $posts = array_values(dw_blog_posts());
    usort($posts, static fn (array $a, array $b): int => strcmp($b['published'], $a['published']));

    return $posts;
}

/** @return array<string, list<array>> */
function dw_blog_posts_by_service(): array
{
    $grouped = [];
    foreach (dw_blog_posts() as $post) {
        $service = $post['service'];
        $grouped[$service][] = $post;
    }

    return $grouped;
}

function dw_blog_format_date(string $isoDate): string
{
    $ts = strtotime($isoDate);

    return $ts !== false ? date('j M Y', $ts) : $isoDate;
}

/** Safe HTML for blog card titles (keeps B2B, B2C & B2A on one line). */
function dw_blog_card_title(string $title): string
{
    $safe = e($title);

    return str_replace(
        'B2B, B2C &amp; B2A',
        '<span class="text-nowrap">B2B, B2C &amp; B2A</span>',
        $safe
    );
}
