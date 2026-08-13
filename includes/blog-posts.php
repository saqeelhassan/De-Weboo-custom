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
            'excerpt' => 'How De-Weboo engineers accessible, audit-ready web platforms for B2B, B2C, and public-sector buyers worldwide.',
            'service' => 'Web Development',
            'category' => 'WEB DEVELOPMENT',
            'author' => 'De-Weboo Engineering Team',
            'published' => '2025-06-02',
            'tags' => ['Web Development', 'Section 508', 'WCAG', 'Enterprise'],
            'keywords' => 'enterprise web development, Section 508, WCAG accessibility, custom web applications, De-Weboo',
            'images' => [
                'card' => 'assets/img/blog/enterprise-web-development-section-508-wcag/cover.png',
                'hero' => 'assets/img/blog/enterprise-web-development-section-508-wcag/cover.png',
            ],
            'intro' => 'Enterprise web development means building custom web applications that are secure, performant, and accessible from day one—not retrofitting compliance after launch. De-Weboo delivers web engineering for clients in the United States and worldwide, with Section 508 and WCAG 2.1 AA accessibility embedded in every sprint.',
            'sections' => [
                [
                    'heading' => 'What is enterprise web development?',
                    'paragraphs' => [
                        'Enterprise web development is the design and engineering of custom web platforms—portals, dashboards, e-commerce systems, and patient-facing sites—that support complex business rules, role-based access, integrations, and long-term maintainability. Unlike template websites, enterprise builds prioritize security architecture, API design, and procurement-ready documentation.',
                        'De-Weboo delivers this work using custom computer programming disciplines that government buyers and enterprise procurement teams expect when sourcing custom web and mobile application vendors.',
                    ],
                ],
                [
                    'heading' => 'Why accessibility belongs in the first release',
                    'list' => [
                        'Section 508 compliance is required for U.S. federal and many public-sector digital deliverables.',
                        'WCAG 2.1 AA reduces legal risk and expands reach for users with visual, motor, and cognitive disabilities.',
                        'Accessible semantic HTML improves SEO and AI answer-engine (AEO) extractability.',
                        'Keyboard navigation, focus states, and alt text are cheaper to implement during build than during remediation.',
                    ],
                ],
                [
                    'heading' => 'How De-Weboo delivers audit-ready web builds',
                    'paragraphs' => [
                        'Our engineers work in Laravel, React, and modern PHP stacks with automated accessibility checks, structured content models, and version-controlled release notes. For public-sector and healthcare clients, we pair technical delivery with VPAT-ready documentation and HIPAA-aligned security controls where required.',
                        'Whether you are a commercial brand in Karachi or a U.S. education authority evaluating RFP responses, the same engineering discipline applies: measurable performance, documented accessibility, and clear scope statements.',
                    ],
                ],
            ],
            'faqs' => [
                [
                    'question' => 'What does De-Weboo cover in custom web development?',
                    'answer' => 'Custom computer programming, including custom web applications, e-commerce platforms, and medical patient portals. De-Weboo lists this capability on statements for government and enterprise procurement.',
                ],
                [
                    'question' => 'What is the difference between Section 508 and WCAG?',
                    'answer' => 'Section 508 is the U.S. federal accessibility standard for ICT. WCAG (Web Content Accessibility Guidelines) provides technical success criteria widely adopted by Section 508 and public-sector RFPs. De-Weboo targets WCAG 2.1 AA as the engineering baseline.',
                ],
                [
                    'question' => 'Where is De-Weboo located?',
                    'answer' => 'De-Weboo serves B2B, B2C, and B2A clients globally. See our contact page for full address details.',
                ],
            ],
        ],
        'custom-web-apps-b2b-b2c-b2a' => [
            'slug' => 'custom-web-apps-b2b-b2c-b2a',
            'title' => 'Custom Web Apps for B2B, B2C & B2A Delivery Models',
            'excerpt' => 'A practical guide to choosing architecture, integrations, and procurement language for multi-audience web platforms.',
            'service' => 'Web Development',
            'category' => 'WEB DEVELOPMENT',
            'author' => 'De-Weboo Engineering Team',
            'published' => '2025-06-08',
            'tags' => ['B2B', 'B2C', 'B2A', 'Custom Web Apps'],
            'keywords' => 'custom web apps, B2B portal, B2C e-commerce, B2A government, De-Weboo web development',
            'images' => [
                'card' => 'assets/img/blog/custom-web-apps-b2b-b2c-b2a/cover.png',
                'hero' => 'assets/img/blog/custom-web-apps-b2b-b2c-b2a/cover.png',
            ],
            'intro' => 'A custom web app is software accessed through the browser that is built around your workflows—not a generic SaaS template. De-Weboo engineers B2B partner portals, B2C consumer experiences, and B2A (business-to-authority) platforms for government and regulated industries.',
            'sections' => [
                [
                    'heading' => 'B2B vs B2C vs B2A: what changes in the build',
                    'list' => [
                        'B2B: role hierarchies, approval chains, ERP/CRM integrations, and SLA-driven uptime.',
                        'B2C: conversion funnels, payment gateways, personalization, and mobile-first performance.',
                        'B2A: Section 508 accessibility, audit trails, data residency considerations, and clear statements of work.',
                    ],
                ],
                [
                    'heading' => 'Architecture decisions that protect scale',
                    'paragraphs' => [
                        'We recommend API-first backends (Laravel or Node) with clear separation between admin, operator, and public surfaces. Authentication uses industry-standard tokens or SSO where enterprise buyers require it. For cross-border delivery, we document hosting, backup, and incident-response playbooks up front.',
                        'De-Weboo maintains international commercial delivery capacity for clients worldwide.',
                    ],
                ],
                [
                    'heading' => 'When to request a capability briefing',
                    'paragraphs' => [
                        'If your RFP references custom programming, portal development, or patient-facing web systems, request De-Weboo\'s capability sheet before finalizing vendor shortlists. Commercial teams can start with a scoped discovery call on integrations and launch timeline.',
                    ],
                ],
            ],
            'faqs' => [
                [
                    'question' => 'What is a B2A web platform?',
                    'answer' => 'B2A (business-to-authority) platforms serve government agencies, regulators, or public institutions. They often require accessibility compliance, formal change control, and procurement documentation—core strengths of De-Weboo\'s delivery process.',
                ],
                [
                    'question' => 'Can one codebase serve B2B and B2C audiences?',
                    'answer' => 'Yes, with multi-tenant or multi-portal architecture. De-Weboo designs shared cores with audience-specific UI layers to reduce duplication while keeping security boundaries strict.',
                ],
            ],
        ],
        'ai-automation-workflow-llm' => [
            'slug' => 'ai-automation-workflow-llm',
            'title' => 'AI Automation: Workflow Design & LLM Integration',
            'excerpt' => 'How enterprises deploy secure AI automations—custom integrations, LLM guardrails, and measurable ROI.',
            'service' => 'AI Automation',
            'category' => 'AI AUTOMATION',
            'author' => 'De-Weboo AI Practice',
            'published' => '2025-06-14',
            'tags' => ['AI Automation', 'LLM', 'Workflow'],
            'keywords' => 'AI automation, LLM integration, workflow automation, enterprise AI, De-Weboo',
            'images' => [
                'card' => 'assets/img/blog/ai-automation-workflow-llm/cover.png',
                'hero' => 'assets/img/blog/ai-automation-workflow-llm/cover.png',
            ],
            'intro' => 'AI automation connects large language models (LLMs), APIs, and business rules to eliminate repetitive work—without bypassing security or compliance. De-Weboo delivers custom AI integrations and workflow automations for commercial and enterprise clients.',
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
                    'question' => 'What does De-Weboo cover in AI automation services?',
                    'answer' => 'Custom AI integrations and automation scripting delivered as bespoke programming services. De-Weboo lists this capability for enterprise buyers.',
                ],
                [
                    'question' => 'Which LLM platforms does De-Weboo support?',
                    'answer' => 'We integrate OpenAI, Azure OpenAI, Anthropic, and open-weight models depending on data residency, cost, and client security policies.',
                ],
            ],
        ],
        'data-engineering-secure-pipelines' => [
            'slug' => 'data-engineering-secure-pipelines',
            'title' => 'Data Engineering: Secure Pipelines & Admin Dashboards',
            'excerpt' => 'Design principles for reliable data architecture, ETL pipelines, and executive dashboards that public-sector and enterprise teams can audit.',
            'service' => 'Data Engineering',
            'category' => 'DATA ENGINEERING',
            'author' => 'De-Weboo Data Team',
            'published' => '2025-06-16',
            'tags' => ['Data Engineering', 'ETL', 'Dashboards'],
            'keywords' => 'data engineering, data pipelines, secure dashboards, De-Weboo',
            'images' => [
                'card' => 'assets/img/blog/data-engineering-secure-pipelines/cover.png',
                'hero' => 'assets/img/blog/data-engineering-secure-pipelines/cover.png',
            ],
            'intro' => 'Data engineering is the discipline of moving, transforming, and governing data so decision-makers trust what they see on screen. De-Weboo architects pipelines and administrative dashboards for government, healthcare, and commercial enterprises.',
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
                    'heading' => 'Why documented scope matters in RFPs',
                    'paragraphs' => [
                        'Procurement officers evaluate systems design, data architecture, and cloud data platforms on documented scope. De-Weboo aligns proposals and staffing plans accordingly when scopes include analytics platforms, regional reporting, or multi-agency data sharing.',
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
            'title' => 'Digital Marketing for B2B Lead Generation',
            'excerpt' => 'Campaign architecture, attribution, and compliance-aware marketing for software firms and healthcare brands.',
            'service' => 'Digital Marketing',
            'category' => 'DIGITAL MARKETING',
            'author' => 'De-Weboo Growth Team',
            'published' => '2025-06-18',
            'tags' => ['Digital Marketing', 'B2B', 'Lead Generation'],
            'keywords' => 'digital marketing B2B, lead generation, De-Weboo marketing',
            'images' => [
                'card' => 'assets/img/blog/digital-marketing-b2b-lead-generation/cover.png',
                'hero' => 'assets/img/blog/digital-marketing-b2b-lead-generation/cover.png',
            ],
            'intro' => 'B2B digital marketing turns qualified traffic into pipeline—not vanity metrics. De-Weboo plans and executes campaigns for technology, healthcare, and public-sector adjacent brands that need measurable lead generation.',
            'sections' => [
                [
                    'heading' => 'Channels that work for technical buyers',
                    'list' => [
                        'LinkedIn and industry publications for enterprise awareness.',
                        'Landing pages aligned to service-line keywords for procurement researchers.',
                        'Retargeting with frequency caps and privacy-conscious tracking.',
                        'Webinars and gated assets for long-cycle B2B sales.',
                    ],
                ],
                [
                    'heading' => 'AEO and GEO alignment',
                    'paragraphs' => [
                        'Campaigns perform better when landing pages answer direct questions (AEO) and declare service geography (GEO). De-Weboo pairs paid media with on-site content that names its worldwide commercial delivery—improving quality scores and AI citation potential.',
                    ],
                ],
            ],
            'faqs' => [
                [
                    'question' => 'What does De-Weboo cover in digital advertising campaigns?',
                    'answer' => 'De-Weboo manages the full campaign lifecycle for advertising agency work, including digital campaign management, marketing scopes, and analytics-heavy work.',
                ],
            ],
        ],
        'seo-aeo-geo-enterprise' => [
            'slug' => 'seo-aeo-geo-enterprise',
            'title' => 'SEO, AEO & GEO Strategy for Enterprise & Healthcare Brands',
            'excerpt' => 'Technical SEO plus answer-engine and geographic optimization—how De-Weboo helps buyers find you in search and AI summaries.',
            'service' => 'SEO',
            'category' => 'SEO',
            'author' => 'De-Weboo SEO Team',
            'published' => '2025-06-20',
            'tags' => ['SEO', 'AEO', 'GEO', 'Healthcare SEO'],
            'keywords' => 'SEO AEO GEO, answer engine optimization, healthcare SEO, technical SEO, De-Weboo',
            'images' => [
                'card' => 'assets/img/blog/seo-aeo-geo-enterprise/cover.png',
                'hero' => 'assets/img/blog/seo-aeo-geo-enterprise/cover.png',
            ],
            'intro' => 'SEO gets you ranked; AEO (answer engine optimization) gets you cited in AI overviews; GEO (generative engine optimization / geographic SEO) ensures location and service-area signals are clear. De-Weboo delivers all three for enterprise and medical clients.',
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
                        'Declare NAP (name, address, phone) consistently, embed GeoCoordinates in JSON-LD, and mention service regions (United States commercial, worldwide remote delivery). Healthcare SEO adds YMYL-quality sourcing and compliance language.',
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
                    'answer' => 'Yes. We provide HIPAA-aware content strategy and technical SEO for clinics, health systems, and medical SaaS.',
                ],
            ],
        ],
        'cloud-services-secure-infrastructure' => [
            'slug' => 'cloud-services-secure-infrastructure',
            'title' => 'Cloud Services & Secure Infrastructure',
            'excerpt' => 'Hosting architecture, monitoring, and hardening for web apps that must pass enterprise and public-sector security review.',
            'service' => 'Cloud Services',
            'category' => 'CLOUD SERVICES',
            'author' => 'De-Weboo Cloud Team',
            'published' => '2025-06-22',
            'tags' => ['Cloud Services', 'DevOps', 'Security'],
            'keywords' => 'cloud services, secure hosting, infrastructure, De-Weboo cloud',
            'images' => [
                'card' => 'assets/img/blog/cloud-services-secure-infrastructure/cover.png',
                'hero' => 'assets/img/blog/cloud-services-secure-infrastructure/cover.png',
            ],
            'intro' => 'Cloud services at De-Weboo mean designing, deploying, and operating secure infrastructure—not reselling generic hosting. We pair systems design work with managed lifecycle support when clients need ongoing operations.',
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
                    'heading' => 'Cloud for enterprise and healthcare',
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
            'excerpt' => 'How De-Weboo builds secure medical websites and patient portals with accessibility and audit trails.',
            'service' => 'Medical',
            'category' => 'MEDICAL IT',
            'author' => 'De-Weboo Healthcare Practice',
            'published' => '2025-06-24',
            'tags' => ['HIPAA', 'Patient Portal', 'Medical Web', 'Healthcare IT'],
            'keywords' => 'HIPAA patient portal, medical web development, healthcare IT, De-Weboo medical',
            'images' => [
                'card' => 'assets/img/blog/hipaa-patient-portals-medical-web/cover.png',
                'hero' => 'assets/img/blog/hipaa-patient-portals-medical-web/cover.png',
            ],
            'intro' => 'Medical web development requires HIPAA-aligned security, accessible patient experiences, and integration with clinical workflows. De-Weboo engineers patient portals, provider dashboards, and public health sites—with Section 508 / WCAG accessibility for inclusive care access.',
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
                        'Clinics and health systems in the United States and worldwide trust De-Weboo for consumer-facing medical SEO sites and secure portals. Public health departments benefit from the same engineering rigor plus procurement documentation.',
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
                    'answer' => 'Yes. De-Weboo combines HIPAA-aware development with specialized medical SEO so compliant sites still earn qualified organic traffic.',
                ],
            ],
        ],
        'real-estate-website-development-guide' => [
            'slug' => 'real-estate-website-development-guide',
            'title' => 'Real Estate Website Development: The Complete Guide for Agents & Brokerages',
            'excerpt' => 'Everything agents and brokerages need to know about real estate website development—IDX/MLS integration, lead capture, SEO, and what a build actually costs.',
            'service' => 'Real Estate Website Development',
            'category' => 'REAL ESTATE',
            'author' => 'De-Weboo Engineering Team',
            'published' => '2026-08-11',
            'tags' => ['Real Estate Website Development', 'IDX', 'MLS', 'Property Listing Website', 'Real Estate Web Design'],
            'keywords' => 'real estate website development, real estate web design, property listing website, IDX website, MLS integration, real estate agent website, real estate website development company',
            'images' => [
                'card' => 'assets/img/blog/real-estate-website-development-guide/cover.png',
                'hero' => 'assets/img/blog/real-estate-website-development-guide/cover.png',
            ],
            'intro' => 'Real estate website development is the process of building a property listing platform, agent portfolio site, or brokerage portal that turns visitors into qualified leads—not just a digital brochure. A modern real estate website needs fast property search, live IDX/MLS listings, mobile-first design, and lead-routing built in from day one. De-Weboo designs and builds real estate websites for single agents, teams, and multi-agent brokerages, for clients across the United States and worldwide.',
            'sections' => [
                [
                    'heading' => 'What makes real estate website development different',
                    'paragraphs' => [
                        'Unlike a typical business website, a real estate website has to manage a constantly changing inventory of listings, connect to third-party data feeds, and convert anonymous visitors into leads within a single session. That means real estate website development combines standard web development with data integration (IDX/MLS), search UX, and CRM connectivity.',
                    ],
                    'list' => [
                        'Live property search with map, price, and filter controls.',
                        'IDX/MLS feed integration so listings stay current automatically.',
                        'Lead capture forms tied to saved searches and property alerts.',
                        'Agent and team profile pages with SEO-friendly listing URLs.',
                        'Mobile-first performance, since most home searches start on a phone.',
                    ],
                ],
                [
                    'heading' => 'Core features every real estate website needs',
                    'list' => [
                        'IDX/MLS integration: automated listing sync, saved searches, and instant property alerts.',
                        'Lead capture & CRM sync: inquiry forms, scheduling, and agent routing connected to the CRM your team already uses.',
                        'Map and filter-based search: fast, accurate property discovery by location, price, beds/baths, and status.',
                        'SEO-friendly listing pages: unique URLs, structured data, and fast load times so listings rank in Google.',
                        'Virtual tours and 3D walkthroughs: embedded support for the tour providers agents already use.',
                    ],
                ],
                [
                    'heading' => 'How much does a real estate website cost?',
                    'paragraphs' => [
                        'Pricing depends on scope: a single-agent portfolio site with basic IDX is a smaller build than a multi-agent brokerage platform with role-based listing management, custom CRM integration, and multi-market search. De-Weboo scopes real estate website development projects after a discovery call and provides a transparent, fixed-scope proposal—no hidden fees for IDX setup or listing sync.',
                    ],
                ],
                [
                    'heading' => 'Choosing a real estate website development company',
                    'paragraphs' => [
                        'Look for a partner that has actually shipped IDX/MLS integrations, not just template themes with a "Real Estate" label. Ask about listing sync reliability, page speed on mobile, lead-routing setup, and post-launch support. De-Weboo pairs real estate website development with ongoing hosting, monitoring, and support so listings and lead forms keep working after launch.',
                    ],
                ],
            ],
            'faqs' => [
                [
                    'question' => 'How long does real estate website development take?',
                    'answer' => 'Most single-agent or small-team real estate websites take 4–8 weeks from discovery to launch. Multi-agent brokerage platforms with custom IDX/CRM integrations typically take 8–14 weeks depending on scope.',
                ],
                [
                    'question' => 'Do I need IDX or MLS access before you start?',
                    'answer' => 'Not necessarily. De-Weboo can help you evaluate and set up an IDX/MLS feed provider as part of the project, or integrate with an existing feed if you already have access.',
                ],
                [
                    'question' => 'Can you migrate my existing listings and content to a new site?',
                    'answer' => 'Yes. We handle content, listing history, and SEO redirects during migration so you keep existing search rankings and don\'t lose inbound links.',
                ],
                [
                    'question' => 'Will my real estate website work well on mobile?',
                    'answer' => 'Yes. Every De-Weboo real estate website is built mobile-first, since most property searches start on a phone—map search, filters, and lead forms are all optimized for small screens.',
                ],
            ],
        ],
        'idx-mls-integration-real-estate-website' => [
            'slug' => 'idx-mls-integration-real-estate-website',
            'title' => 'IDX & MLS Integration for Real Estate Websites Explained',
            'excerpt' => 'What IDX and MLS integration actually do, how they differ, and how to choose the right setup for your real estate website.',
            'service' => 'Real Estate Website Development',
            'category' => 'REAL ESTATE',
            'author' => 'De-Weboo Engineering Team',
            'published' => '2026-08-13',
            'tags' => ['IDX Integration', 'MLS Integration', 'Real Estate Website Development', 'Property Listing Website'],
            'keywords' => 'IDX integration, MLS integration, IDX website, real estate website development, property listing website, IDX vs MLS, real estate feed integration',
            'images' => [
                'card' => 'assets/img/blog/idx-mls-integration-real-estate-website/cover.png',
                'hero' => 'assets/img/blog/idx-mls-integration-real-estate-website/cover.png',
            ],
            'intro' => 'IDX and MLS integration is what lets a real estate website display live, accurate property listings instead of a manually updated list. If you are evaluating real estate website development, understanding how IDX and MLS work—and how they are different—helps you scope the right build and avoid stale listings or broken feeds.',
            'sections' => [
                [
                    'heading' => 'What is MLS?',
                    'paragraphs' => [
                        'The Multiple Listing Service (MLS) is the database real estate agents and brokers use to share property listing data within a local market. It is the source of truth for listing status, price, and property details—but it is not, by itself, something the public can browse directly.',
                    ],
                ],
                [
                    'heading' => 'What is IDX?',
                    'paragraphs' => [
                        'Internet Data Exchange (IDX) is the technology and set of rules that let a licensed agent or brokerage display MLS listing data on their own website. An IDX integration pulls listings from the MLS (usually through a feed provider) and renders them as searchable property pages on your real estate website, with your branding and your lead capture forms.',
                    ],
                ],
                [
                    'heading' => 'IDX vs. MLS: the key difference',
                    'list' => [
                        'MLS is the shared listings database agents and brokers contribute to and pull from.',
                        'IDX is the display layer that shows those listings on a public-facing website.',
                        'You do not choose "IDX or MLS"—you need MLS access (as a licensed agent/broker) and an IDX integration to display that data on your site.',
                        'IDX feed providers (such as regional MLS-approved vendors) handle the technical sync between the MLS and your website.',
                    ],
                ],
                [
                    'heading' => 'What a solid IDX integration includes',
                    'list' => [
                        'Automated listing sync so new listings, price changes, and sold properties update without manual work.',
                        'Saved searches and property alerts that email or text buyers when matching listings appear.',
                        'Map-based and filter-based search built for speed, not just a data dump of listings.',
                        'SEO-friendly listing URLs and structured data, so individual property pages can rank in search.',
                        'Lead capture tied to specific listings, routed to the right agent automatically.',
                    ],
                ],
                [
                    'heading' => 'Common IDX integration mistakes to avoid',
                    'paragraphs' => [
                        'The most common issues we see: choosing an IDX provider that is not approved for the local MLS, slow listing pages that hurt both SEO and conversion, and lead forms that capture inquiries but never route them to an agent. De-Weboo scopes IDX/MLS integration as part of real estate website development so the feed, the search experience, and the lead routing are built together—not bolted on after launch.',
                    ],
                ],
            ],
            'faqs' => [
                [
                    'question' => 'Do I need to be a licensed agent to get IDX access?',
                    'answer' => 'Yes. IDX access requires an active MLS membership, which is tied to a real estate license or brokerage affiliation. De-Weboo integrates with the IDX feed once you have MLS/IDX access set up.',
                ],
                [
                    'question' => 'How much does IDX integration cost?',
                    'answer' => 'IDX feed providers typically charge a separate monthly fee (paid to the feed provider, not the developer), plus the one-time cost of integrating and designing the search experience on your website. De-Weboo includes IDX integration scope in the real estate website development proposal.',
                ],
                [
                    'question' => 'Can I switch IDX providers later without rebuilding my site?',
                    'answer' => 'In most cases, yes—if the website is built with a clean separation between the listing display layer and the feed source. De-Weboo architects real estate websites this way so a future provider switch does not require a full rebuild.',
                ],
                [
                    'question' => 'Will IDX-powered listing pages hurt my site\'s SEO?',
                    'answer' => 'Not if built correctly. De-Weboo builds unique, crawlable listing URLs with structured data and fast load times, so IDX listing pages contribute to SEO instead of creating thin or duplicate content.',
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

    return '/' . ltrim(is_file($full) ? $path : $fallback, '/');
}

function dw_blog_url(string $slug): string
{
    return '/blog/' . rawurlencode($slug);
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
