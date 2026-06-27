<?php

declare(strict_types=1);

/**
 * Portfolio case studies. Drop images into paths under assets/img/portfolio/{slug}/.
 */
function dw_portfolio_projects(): array
{
    return [
        'sindh-wdd-dashboard' => [
            'slug' => 'sindh-wdd-dashboard',
            'shortName' => 'Sindh WDD Dashboard',
            'fullName' => 'Women Development Department Portal',
            'client' => 'Government of Sindh (Women Development Department)',
            'services' => 'Web Application Development, Database Architecture, Dashboard UI Design',
            'techStack' => 'Laravel, MySQL, Bootstrap / Tailwind CSS',
            'category' => 'Government',
            'projectDate' => 'Government deployment',
            'overview' => 'A secure, custom-built administrative and data-entry dashboard designed for the Government of Sindh\'s Women Development Department. This web application streamlines regional data collection, case management, and administrative tracking, replacing fragmented manual reporting with a unified digital ecosystem.',
            'keyFeatures' => [
                'Role-Based Security: Fine-grained authorization levels to protect sensitive administrative and citizen records.',
                'Data-Entry Dashboard: Optimized form layouts for error-free data collection across regional offices.',
                'Advanced Analytics: Real-time summary statistics and reporting tools tailored for department officials.',
            ],
            'technicalHighlights' => [
                'Architected a secure, relational database scheme in MySQL to handle high-volume administrative logging.',
                'Developed scalable backend controllers in Laravel to process complex data filters and secure export utilities.',
                'Implemented strict validation rules ensuring high data integrity across all input channels.',
            ],
            'images' => [
                'cover' => 'assets/img/portfolio/sindh-wdd/cover.jpg',
                'card' => 'assets/img/portfolio/sindh-wdd/card.jpg',
                'gallery1' => 'assets/img/portfolio/sindh-wdd/gallery-1.jpg',
                'gallery2' => 'assets/img/portfolio/sindh-wdd/card-1.png',
            ],
        ],
        'edustream-lms' => [
            'slug' => 'edustream-lms',
            'shortName' => 'EduStream LMS',
            'fullName' => 'Custom Multi-Role Learning Management System',
            'client' => 'Digital Sindh Institute of Management and Technology (DSIMT)',
            'services' => 'Full-Stack Web Development, LMS Architecture, Custom UX/UI',
            'techStack' => 'Laravel, Inertia.js, React, Tailwind CSS, MySQL',
            'category' => 'Education',
            'projectDate' => 'Institutional deployment',
            'overview' => 'A high-performance, white-label Learning Management System (LMS) built for Digital Sindh Institute of Management and Technology (DSIMT). The platform includes a branded login portal, a full admin command dashboard for registrations, courses, fees, and finance, plus dedicated instructor workspaces for exams, quizzes, assignments, and enrollments.',
            'keyFeatures' => [
                'Branded Login Portal: DSIMT split-screen sign-in with role-based demo and production access flows.',
                'Admin Command Dashboard: Registrations, course approvals, fee collection, expenses, and real-time analytics.',
                'Instructor Workspace: Course management, exams/quizzes, assignments, and enrollment insights per instructor.',
            ],
            'technicalHighlights' => [
                'Utilized Inertia.js to seamlessly connect a powerful Laravel backend with a highly reactive React-based single-page application (SPA) frontend.',
                'Optimized file handling and streaming logic for fast, efficient loading of educational resources.',
                'Engineered clean multi-tenant routing boundaries to ensure absolute data privacy between different user classes.',
            ],
            'images' => [
                'cover' => 'assets/img/portfolio/edustream-lms/cover.jpg',
                'card' => 'assets/img/portfolio/edustream-lms/card.jpg',
                'gallery1' => 'assets/img/portfolio/edustream-lms/gallery-1.jpg',
                'gallery2' => 'assets/img/portfolio/edustream-lms/gallery-2.jpg',
            ],
        ],
        'de-weboo-platform' => [
            'slug' => 'de-weboo-platform',
            'shortName' => 'De Weboo Platform',
            'fullName' => 'De Weboo Core Agency Site',
            'client' => 'Internal Agency Project',
            'services' => 'Full-Stack Development, Vibe Coding, High-Performance UI Architecture',
            'techStack' => 'Next.js / React, Tailwind CSS, Framer Motion, Node.js',
            'category' => 'Agency',
            'projectDate' => 'Flagship deployment',
            'overview' => 'The flagship, production-grade custom web application for De Weboo. Engineered prioritizing elite performance, seamless modern animations, and ironclad security, this platform serves as both a primary corporate hub and a live showcase of cutting-edge full-stack capabilities.',
            'keyFeatures' => [
                'Dynamic Portfolio Hub: A highly structured, interactive showcase grid utilizing fluid layouts and custom asset placeholders.',
                'Interactive UI Elements: Modern, smooth visual interactions (such as concentric-ring status cards and custom-timed micro-interactions).',
                'Asynchronous Lead Pipelines: Seamlessly integrated contact handlers ensuring instant client notifications without page reloads.',
            ],
            'technicalHighlights' => [
                'Accelerated production cycles using advanced AI workflows and vibe coding patterns while keeping code output strictly clean and highly maintainable.',
                'Achieved top-tier web performance metrics through smart component structures and lazy-loading media configurations.',
                'Created a fully customized, responsive CSS theme layer matching the agency\'s premium visual brand identity.',
            ],
            'images' => [
                'cover' => 'assets/img/portfolio/de-weboo-platform/cover.jpg',
                'card' => 'assets/img/portfolio/de-weboo-platform/card.jpg',
                'gallery1' => 'assets/img/portfolio/de-weboo-platform/gallery-1.jpg',
                'gallery2' => 'assets/img/portfolio/de-weboo-platform/gallery-2.jpg',
            ],
        ],
        'dream-asa-homes' => [
            'slug' => 'dream-asa-homes',
            'shortName' => 'Dream Asa Homes',
            'fullName' => 'Dream Asa Homes Platform',
            'client' => 'Real Estate Agency',
            'services' => 'WordPress Theme Engineering, Custom Fields Architecture, Advanced SEO Optimization',
            'techStack' => 'WordPress (Core), PHP, Advanced Custom Fields (ACF), Tailwind CSS',
            'category' => 'Real Estate',
            'projectDate' => 'Production deployment',
            'overview' => 'A bespoke, lightning-fast real estate platform for Dream Asa Homes—built on a custom WordPress theme without heavy page-builders. The site features cinematic property hero sliders, a lifestyle-focused listings introduction, and an about experience that showcases construction quality and long-term investment value for apartments, villas, and premium flats.',
            'keyFeatures' => [
                'Cinematic Hero Sliders: Full-width property showcases with consultation CTAs and premium listing highlights such as Cityline Premium Flats.',
                'Lifestyle Listings Intro: Split hero layouts helping buyers find homes that match budget, documentation trust, and location value.',
                'About & Trust Content: Verified listings narrative with construction photography and investment-focused copy for first-time and portfolio buyers.',
            ],
            'technicalHighlights' => [
                'Wrote semantic, optimized PHP template loops ensuring minimum database overhead and near-instant load speeds.',
                'Structured modular Tailwind styles directly into custom WordPress templates for clean, unbloated stylesheet delivery.',
                'Configured advanced schema markup mapping out property structures perfectly for search engines to boost organic visibility.',
            ],
            'images' => [
                'cover' => 'assets/img/portfolio/dream-asa-homes/cover.jpg',
                'card' => 'assets/img/portfolio/dream-asa-homes/card.jpg',
                'gallery1' => 'assets/img/portfolio/dream-asa-homes/gallery-1.jpg',
                'gallery2' => 'assets/img/portfolio/dream-asa-homes/gallery-2.jpg',
            ],
        ],
        'ezfalcons-hub' => [
            'slug' => 'ezfalcons-hub',
            'shortName' => 'Ezfalcons Hub',
            'fullName' => 'Ezfalcons Custom Corporate Theme',
            'client' => 'Tech & Corporate Services Brand',
            'services' => 'Theme Customization, Component Engineering, Performance Tuning',
            'techStack' => 'WordPress, PHP, JavaScript, Custom CSS',
            'category' => 'Corporate',
            'projectDate' => 'Production deployment',
            'overview' => 'A highly tailored, modern corporate WordPress website engineered to display premium services and high-level client onboarding funnels. This custom theme build maximizes standard WordPress hooks to create a secure, completely custom-branded corporate identity with flexible content structures.',
            'keyFeatures' => [
                'Bespoke Service Blocks: Highly interactive layouts designed to communicate complex business service breakdowns smoothly.',
                'Seamless CTA Funnels: Strategically mapped placement hooks maximizing lead capture and customer inquiry management.',
                'Cross-Browser Fluidity: Impeccable UI consistency across all desktop viewports and legacy browsers.',
            ],
            'technicalHighlights' => [
                'Eliminated bulky plugin dependencies by hard-coding critical layout requirements directly into the theme engine.',
                'Conducted deep server-side caching and file minification tune-ups to achieve optimized load speeds.',
                'Implemented clean security hardening principles protecting contact channels from spam and unauthorized manipulation.',
            ],
            'images' => [
                'cover' => 'assets/img/portfolio/ezfalcons-hub/cover.jpg',
                'card' => 'assets/img/portfolio/ezfalcons-hub/card.jpg',
                'gallery1' => 'assets/img/portfolio/ezfalcons-hub/gallery-1.jpg',
                'gallery2' => 'assets/img/portfolio/ezfalcons-hub/gallery-2.jpg',
            ],
        ],
        'ezfalcons-seo' => [
            'slug' => 'ezfalcons-seo',
            'shortName' => 'EZ Falcons SEO',
            'fullName' => 'EZ Falcons Search Engine Optimization',
            'client' => 'EZ Falcons (Tech & Corporate Services Brand)',
            'services' => 'Technical SEO, On-Page Optimization, Schema Markup, Search Console & Indexing',
            'techStack' => 'WordPress SEO, Google Search Console, Structured Data, Core Web Vitals, AEO-Ready Metadata',
            'category' => 'SEO',
            'projectDate' => 'Ongoing engagement',
            'overview' => 'A dedicated SEO engagement for the EZ Falcons corporate brand—separate from theme development and digital marketing campaigns. We engineered technical SEO, schema architecture, and crawl optimization to strengthen organic visibility for corporate service pages and regional search intent.',
            'keyFeatures' => [
                'Technical SEO Audit & Fixes: Crawlability, indexation, canonical tags, and site architecture tuned for corporate service discovery.',
                'Schema & Rich Results: Organization, service, and breadcrumb markup aligned to EZ Falcons business lines.',
                'On-Page & AEO Optimization: Title/meta frameworks, heading structure, and citation-ready content patterns for search and AI surfaces.',
            ],
            'technicalHighlights' => [
                'Implemented SEO standards directly in custom WordPress templates without reliance on heavy plugin stacks.',
                'Configured Google Search Console monitoring and structured data validation workflows.',
                'Aligned page speed and Core Web Vitals with ranking stability across the corporate site.',
            ],
            'images' => [
                'cover' => 'assets/img/portfolio/ezfalcons-hub/cover.jpg',
                'card' => 'assets/img/portfolio/ezfalcons-hub/card.jpg',
                'gallery1' => 'assets/img/portfolio/ezfalcons-hub/gallery-1.jpg',
                'gallery2' => 'assets/img/portfolio/ezfalcons-hub/gallery-2.jpg',
            ],
        ],
        'ezfalcons-digital-marketing' => [
            'slug' => 'ezfalcons-digital-marketing',
            'shortName' => 'EZ Falcons Marketing',
            'fullName' => 'EZ Falcons Digital Marketing',
            'client' => 'EZ Falcons (Tech & Corporate Services Brand)',
            'services' => 'Digital Marketing, Lead Generation, Campaign Strategy, Conversion Funnels',
            'techStack' => 'Google Analytics, Landing Page Optimization, CTA Funnels, Content Strategy, CRM-Ready Forms',
            'category' => 'Marketing',
            'projectDate' => 'Ongoing engagement',
            'overview' => 'A standalone Digital Marketing engagement for EZ Falcons—distinct from the corporate theme build and technical SEO program. Mapped to NAICS 541810 (Advertising Agencies) and NAICS 541910 (Marketing Research), we drive qualified lead generation and consumer-focused campaigns that convert traffic into corporate service inquiries.',
            'keyFeatures' => [
                'Lead Generation Funnels: Landing pages and CTA pathways engineered for high-intent corporate inquiries.',
                'Campaign & Content Strategy: Messaging, offers, and keyword-aligned content for EZ Falcons service lines.',
                'Conversion Tracking: Analytics setup to measure inquiry quality from marketing channels and form submissions.',
            ],
            'technicalHighlights' => [
                'Mapped service-specific marketing journeys across the custom WordPress theme without disrupting performance.',
                'Built reusable campaign landing templates for rapid promotion of corporate offerings.',
                'Integrated measurable conversion goals tied to business development follow-up workflows.',
            ],
            'images' => [
                'cover' => 'assets/img/portfolio/ezfalcons-hub/cover.jpg',
                'card' => 'assets/img/portfolio/ezfalcons-hub/card.jpg',
                'gallery1' => 'assets/img/portfolio/ezfalcons-hub/gallery-1.jpg',
                'gallery2' => 'assets/img/portfolio/ezfalcons-hub/gallery-2.jpg',
            ],
        ],
        'dr-yousef-pour-site' => [
            'slug' => 'dr-yousef-pour-site',
            'shortName' => 'Dr. Yousef Pour Site',
            'fullName' => 'Dr. Yousef Pour Medical/Professional Platform',
            'client' => 'Medical Professional / Consultant',
            'services' => 'Custom PHP Development, Frontend Engineering, Medical UI/UX Design',
            'techStack' => 'Custom PHP, Bootstrap, Tailwind CSS, jQuery, GSAP, Swiper, Font Awesome',
            'category' => 'Healthcare',
            'projectDate' => 'Production deployment',
            'overview' => 'A premium, bespoke medical platform developed from the ground up in custom PHP for Dr. Yousef Pour — not a WordPress theme or off-the-shelf CMS build. Hand-crafted templates, custom CSS, and a polished frontend stack project clinical authority, showcase procedures and credentials, and guide patients through consultation booking with smooth, accessible interactions.',
            'keyFeatures' => [
                'Custom PHP Architecture: Lightweight server-rendered pages built without WordPress, page builders, or bloated theme dependencies.',
                'Premium Frontend Experience: GSAP and Swiper-powered motion, responsive Bootstrap/Tailwind layouts, and Font Awesome iconography for a refined medical brand feel.',
                'Streamlined Consultation Funnel: Intuitive user flows with clear, accessible Call-to-Actions (CTAs) for scheduling appointments and inquiries.',
            ],
            'technicalHighlights' => [
                'Authored semantic PHP templates and custom CSS from scratch, tuned for fast load times and lean page weight.',
                'Integrated jQuery, GSAP (3.11.5), and Swiper for hero sliders, mega-menu navigation, and micro-interactions without sacrificing performance.',
                'Implemented accessible, responsive typography and high-contrast UI design to ensure readability for users of all age groups and devices.',
            ],
            'images' => [
                'cover' => 'assets/img/portfolio/dr-yousef-pour-site/cover.jpg',
                'card' => 'assets/img/portfolio/dr-yousef-pour-site/card.jpg',
                'gallery1' => 'assets/img/portfolio/dr-yousef-pour-site/gallery-1.jpg',
                'gallery2' => 'assets/img/portfolio/dr-yousef-pour-site/gallery-2.jpg',
            ],
        ],
        'new-super-prime' => [
            'slug' => 'new-super-prime',
            'shortName' => 'New Super Prime',
            'fullName' => 'New Super Prime Custom Theme',
            'client' => 'Pervez Iqbal (New Super Prime Brand)',
            'services' => 'Custom Theme Engineering, Multilingual Architecture, Advanced UI Effects',
            'techStack' => 'WordPress (Core), PHP, JavaScript, Tailwind CSS, WPML / Polylang',
            'category' => 'Corporate',
            'projectDate' => 'Production deployment',
            'overview' => 'A highly optimized, multi-language custom WordPress theme designed and built completely from scratch for the New Super Prime brand. Engineered to eliminate the bloat of standard page builders, this corporate platform blends high-performance backend architecture with premium visual effects to showcase the brand\'s global operations.',
            'keyFeatures' => [
                'Multilingual Architecture: Seamless, native language switching engineered for a flawless international user experience.',
                'Advanced UI Effects: Smooth micro-interactions, custom animations, and a highly polished, responsive layout built for premium branding.',
                'Dynamic Content Management: Custom post types and custom fields allowing the client to easily update brand assets and services without touching code.',
            ],
            'technicalHighlights' => [
                'Architected a completely lightweight, bespoke WordPress theme from the ground up using core PHP templates and Tailwind CSS.',
                'Integrated performance-first asset optimization patterns for lightning-fast loading alongside rich visual effects.',
                'Hardcoded layout components to achieve a near-perfect Google PageSpeed Insights score while maintaining rich visual effects.',
            ],
            'images' => [
                'cover' => 'assets/img/portfolio/new-super-prime/cover.jpg',
                'card' => 'assets/img/portfolio/new-super-prime/card.jpg',
                'gallery1' => 'assets/img/portfolio/new-super-prime/gallery-1.jpg',
                'gallery2' => 'assets/img/portfolio/new-super-prime/gallery-2.jpg',
            ],
        ],
        'new-super-prime-seo' => [
            'slug' => 'new-super-prime-seo',
            'shortName' => 'New Super Prime SEO',
            'fullName' => 'New Super Prime Search Engine Optimization',
            'client' => 'Pervez Iqbal (New Super Prime Brand)',
            'services' => 'Multilingual SEO, Technical SEO, Schema Optimization, PageSpeed & Core Web Vitals',
            'techStack' => 'WordPress SEO, WPML / Polylang, Structured Data, Google Search Console, Hreflang Strategy',
            'category' => 'SEO',
            'projectDate' => 'Ongoing engagement',
            'overview' => 'A dedicated SEO program for the New Super Prime brand—separate from the custom theme build and digital marketing campaigns. We engineered multilingual technical SEO, schema markup, and performance-led optimization to maximize organic discoverability across global corporate service pages.',
            'keyFeatures' => [
                'Multilingual SEO Architecture: Language-aware URLs, hreflang tags, and localized metadata for international search.',
                'Schema & Rich Results: Organization, service, and breadcrumb structured data for stronger SERP presentation.',
                'Performance-Led SEO: Core Web Vitals and asset tuning to protect rankings alongside premium UI effects.',
            ],
            'technicalHighlights' => [
                'Embedded SEO schema and meta patterns into the custom WordPress theme without sacrificing PageSpeed scores.',
                'Built keyword frameworks for corporate service pages across multiple languages.',
                'Established SEO baselines and ongoing technical optimization cycles for organic growth.',
            ],
            'images' => [
                'cover' => 'assets/img/portfolio/new-super-prime/cover.jpg',
                'card' => 'assets/img/portfolio/new-super-prime/card.jpg',
                'gallery1' => 'assets/img/portfolio/new-super-prime/gallery-1.jpg',
                'gallery2' => 'assets/img/portfolio/new-super-prime/gallery-2.jpg',
            ],
        ],
        'new-super-prime-digital-marketing' => [
            'slug' => 'new-super-prime-digital-marketing',
            'shortName' => 'New Super Prime Marketing',
            'fullName' => 'New Super Prime Digital Marketing',
            'client' => 'Pervez Iqbal (New Super Prime Brand)',
            'services' => 'Digital Marketing, Lead Generation, Brand Campaigns, Conversion Strategy',
            'techStack' => 'Google Analytics, Campaign Landing Pages, Multilingual Content, CTA Funnels',
            'category' => 'Marketing',
            'projectDate' => 'Ongoing engagement',
            'overview' => 'A standalone Digital Marketing engagement for New Super Prime—distinct from the custom theme and technical SEO programs. Under NAICS 541810 (Advertising Agencies) and NAICS 541910 (Marketing Research), we deliver consumer marketing, lead generation, and campaign strategy to grow international corporate inquiries.',
            'keyFeatures' => [
                'Brand Campaign Strategy: Coordinated messaging and promotional content aligned to New Super Prime global operations.',
                'Lead Generation Funnels: High-converting landing flows and CTAs for corporate and partnership inquiries.',
                'Multilingual Marketing Content: Localized campaign copy supporting international audience segments.',
            ],
            'technicalHighlights' => [
                'Designed campaign-ready landing templates within the custom WordPress theme architecture.',
                'Configured conversion tracking and analytics for marketing channel performance.',
                'Aligned marketing journeys with premium brand visuals and micro-interaction design standards.',
            ],
            'images' => [
                'cover' => 'assets/img/portfolio/new-super-prime/cover.jpg',
                'card' => 'assets/img/portfolio/new-super-prime/card.jpg',
                'gallery1' => 'assets/img/portfolio/new-super-prime/gallery-1.jpg',
                'gallery2' => 'assets/img/portfolio/new-super-prime/gallery-2.jpg',
            ],
        ],
    ];
}

function dw_portfolio_project(?string $slug = null): ?array
{
    $projects = dw_portfolio_projects();
    $slug = $slug !== null && $slug !== '' ? $slug : array_key_first($projects);

    return $projects[$slug] ?? null;
}

function dw_portfolio_image(string $path, string $fallback = 'assets/img/services/project1.png'): string
{
    $full = DW_ROOT . '/' . ltrim($path, '/');

    return is_file($full) ? $path : $fallback;
}

function dw_portfolio_url(string $slug): string
{
    return 'portfolio-details.php?project=' . rawurlencode($slug);
}
