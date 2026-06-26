<?php

declare(strict_types=1);

/**
 * One-time text-only copy refresh for De-Weboo public pages.
 * Run: php tools/apply-b2b-copy.php
 */

$root = dirname(__DIR__);

$files = array_merge(
    glob($root . '/*.php') ?: [],
    [$root . '/includes/footer.php', $root . '/includes/header.php', $root . '/includes/seo-meta.php', $root . '/includes/collaboration-sections.php']
);

$replacements = [
    'Full-Service Digital Agency' => 'Enterprise Digital Agency · SLED Ready',
    'Web design, development, and SEO that help your business grow online.' => 'High-performance web, mobile apps, cloud, SEO & digital marketing—built for measurable growth worldwide.',
    'We help you launch faster, rank higher, and convert more visitors into paying customers.' => 'Government-grade security and elite engineering—delivered with the speed and ROI commercial brands expect.',
    "We've been working with Evolve for\n                                over a year now and we're happy\n                                with the results." => "De-Weboo delivered a secure, high-performance platform with the polish of a top commercial agency and the rigor we expect from healthcare IT.",
    'It amet consectetur adipiscing elit duis an tristique. Nulla aliquet enim tortor' => 'Practical insights on web performance, cloud architecture, healthcare compliance, and digital growth from the De-Weboo team.',
    'Geography affect solar energy potential greenhouse' => 'HIPAA-aligned healthcare websites: what procurement teams look for',
    'We are very fussy about which installers we allow provide' => 'How SLED buyers evaluate custom software vendors (NAICS 541511)',
    'We have published 81,194 uncensored reviews' => 'Cloud migration checklist for enterprise and public-sector teams',
    'Winning awards
                        on solar' => 'SLED & healthcare
                        projects delivered',
    'We have completed
                        projects' => 'Commercial & public-sector
                        engagements',
    'Genuine positive
                        feedback' => 'Client satisfaction
                        on secure builds',
    'We shows only the best websites and portfolios built completely with passion, simplicity &
                    creativity. Our team have
                    designed game changing product' => 'From healthcare systems to growth-focused brands, we engineer secure digital experiences with the same standards we bring to SLED procurement.',
    'IT service customized <br>
                        for you industry' => 'Secure IT tailored <br>
                        for your industry',
    'It has root in peace' => 'HIPAA-ready architecture',
    'De-Weboo builds websites, web apps, and marketing campaigns that help brands grow online.' => 'De-Weboo delivers web development, mobile apps, cloud solutions, SEO, and healthcare IT—engineered for enterprise brands and trusted for SLED & healthcare procurement.',
    'Services built for your growth' => 'Capabilities built for commercial growth & contract readiness',
    'Digital solutions that scale with your business' => 'Engineered for enterprise brands. Trusted for government & healthcare procurement.',
    'How we work with you' => 'How we deliver for commercial & public-sector clients',
    'Get all digital solution
                                    from our expert' => 'End-to-end web, cloud &amp;
                                    mobile from one team',
    'User-friendly interface
                                    makes it easy' => 'UX engineered for conversion
                                    and accessibility (508/WCAG)',
    'Track progress with
                                    real-time updates.' => 'Transparent delivery with
                                    security-first milestones',
    'De-Weboo partners with businesses worldwide to design, build, and scale digital products that drive growth.' => 'De-Weboo partners worldwide to design, build, and scale secure web, mobile, and cloud products—bringing healthcare-grade protection to every industry.',
    'Custom websites built for speed, accessibility, and conversions' => 'High-performance websites, patient portals & apps (NAICS 541511)',
    'SEO and content strategies that increase organic traffic' => 'Healthcare SEO, lead gen & digital marketing (NAICS 541810 & 541910)',
    'We collaborate closely with your team to deliver solutions aligned with your brand, audience, and business goals.' => 'We align every build to your brand, compliance requirements, and procurement goals—whether you are scaling commercially or bidding on SLED work.',
    'Secure IT solutions
                                    for your business.' => 'Cybersecurity & cloud infrastructure
                                    for every engagement.',
    'We assess your infrastructure, identify risks, and implement secure, scalable systems that protect data and support growth.' => 'We harden infrastructure, migrate workloads securely, and maintain HIPAA-aligned controls—the same discipline we use for healthcare and government clients.',
    'Security audits & compliance reviews' => 'HIPAA, NIST & Section 508 compliance reviews',
    '24/7 monitoring & incident response' => 'Managed IT & 24/7 monitoring (NAICS 541519)',
    'Cloud migration & backup solutions' => 'Secure cloud architecture & integrations (NAICS 541512)',
    'What makes De-Weboo different' => 'Government-grade security. Commercial-grade results.',
    'Technology that powers your business tomorrow' => 'Elite engineering for brands that cannot afford downtime',
    'A global digital agency trusted by businesses for websites, apps, and marketing campaigns.' => 'A global IT agency trusted for web, mobile, cloud, SEO, and healthcare IT—official SLED contractor with NAICS 541511, 541512, 541519, 541810 & 541910.',
    '24/7 Availability Across
                                Time Zones' => '24/7 delivery across time zones',
    'Agile Teams with Direct
                                Access' => 'Direct access to senior engineers & strategists',
    'Rapid Talent Acquisition' => 'Rapid mobilization for RFP & sprint timelines',
    'Building Scalable Teams' => 'Scalable teams for enterprise & SLED programs',
    'IT consulting' => 'Web & app development',
    'AI machine learning' => 'Cloud solutions',
    'IT development' => 'Digital marketing & SEO',
    'Data security' => 'Healthcare IT & HIPAA',
    'Data visualization' => 'Managed IT & infrastructure',
    'Improve IT planning' => 'SLED procurement support',
    'Helping businesses succeed online' => 'Commercial innovation. Contract-ready delivery.',
    'From startups to established brands, we create digital experiences that attract visitors, build trust, and convert leads into customers.' => 'Whether you are a growth brand or a SLED buyer, you get the same elite engineering, accessibility standards, and security controls we use in healthcare.',
    'Strategy workshops and user research that shape every project' => 'Discovery, UX, and compliance planning for web, mobile, and cloud programs',
    'Optimize technology' => 'Secure cloud & integrations',
    'Our service' => 'Our Services',
    'Get Decision' => 'Get a Consultation',
    'Get to meet Your Next
                        Agency' => 'Ready for enterprise-grade
                        digital delivery?',
    'We\'re delivering the best
                        customer experience' => 'Commercial speed. Healthcare security. SLED-ready capabilities.',
    'We\'re delivering the best
                    customer experience' => 'Commercial speed. Healthcare security. SLED-ready capabilities.',
    'Our portfolio' => 'Our Portfolio',
    'Platform <br>
                                            integration' => 'Healthcare <br>
                                            patient portal',
    'Technology solution' => 'Secure cloud platform',
    'Platform integration' => 'HIPAA-ready integration',
    'Web development' => 'Enterprise web build',
    'Smart vision' => 'SLED-ready portal',
    'Selected case studies' => 'Secure delivery case studies',
    'OUR FEATURED PROJECTS' => 'FEATURED WORK',
    'Page Not Found' => 'Page Not Found',
    'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.' => 'The page you requested may have moved. Return home or contact De-Weboo for web, cloud, healthcare IT, or SLED capability support.',
    'Specials client feedback' => 'What clients & partners say',
    'READ OUR TESTIMONIALS' => 'CLIENT TESTIMONIALS',
    'Creative digital strategies built for your business goals.' => 'Engineered for enterprise commercial brands. Trusted for government & healthcare procurement.',
    'With teams across time zones, De-Weboo delivers responsive support and consistent quality for web, mobile, and marketing projects.' => 'Official SLED contractor delivering web development, mobile apps, secure cloud, digital marketing, and HIPAA-aligned healthcare IT worldwide.',
    'Transparent process from discovery through launch and support' => 'Capabilities & procurement: NAICS 541511, 541512, 541519, 541810 & 541910',
    'Dedicated project managers and clear milestones at every stage' => 'HIPAA-aligned security practices applied to every industry we serve',
    'Performance-focused builds optimized for speed and search visibility' => 'Section 508 / WCAG accessibility and audit-ready documentation',
    'Creative digital solutions
                    for modern businesses' => 'Government-grade security.
                    Commercial-grade innovation.',
    'Problem solved' => 'Projects delivered on spec',
    'Satisfied clients' => 'Enterprise & SLED clients',
    'Pro team members' => 'Specialists on staff',
    'We combine strategy, design, and engineering to deliver measurable results for every client.' => 'Strategy, design, and engineering with the security discipline healthcare and public-sector buyers require.',
];

$seoMeta = <<<'PHP'
<?php

declare(strict_types=1);

/**
 * Per-page SEO titles and meta descriptions for De-Weboo.
 */
return [
    'default' => [
        'title' => 'De-Weboo | Web, Mobile, Cloud & Healthcare IT – SLED Ready',
        'description' => 'Enterprise digital agency for web development, mobile apps, cloud, SEO, and HIPAA-aligned healthcare IT. Official SLED contractor — NAICS 541511, 541512, 541519, 541810 & 541910.',
    ],
    'index' => [
        'title' => 'De-Weboo | Enterprise Web, Mobile, Cloud & SEO Agency',
        'description' => 'High-performance websites, apps, cloud solutions, and digital marketing for global brands—plus SLED-ready procurement and healthcare-grade security on every project.',
    ],
    'about' => [
        'title' => 'About De-Weboo | Enterprise IT & SLED Capabilities',
        'description' => 'Engineered for enterprise commercial brands. Trusted for government & healthcare procurement. Meet the team behind secure web, mobile, and cloud delivery.',
    ],
    'services' => [
        'title' => 'Services | Web, Cloud, Healthcare IT & SLED – De-Weboo',
        'description' => 'Web development, mobile apps, secure cloud, digital marketing, managed IT, and healthcare IT—mapped to NAICS 541511, 541512, 541519, 541810 & 541910.',
    ],
    'services-details' => [
        'title' => 'Service Details | Secure Digital Solutions – De-Weboo',
        'description' => 'Deep-dive capabilities for custom software, cloud architecture, healthcare portals, SEO, and compliance-ready delivery for commercial and SLED clients.',
    ],
    'contact' => [
        'title' => 'Contact De-Weboo | Commercial Projects & SLED Inquiries',
        'description' => 'Start a web, mobile, cloud, or healthcare IT project—or request capabilities for SLED teaming. NAICS 541511, 541512, 541519, 541810 & 541910.',
    ],
    'blog' => [
        'title' => 'Insights | Web, Cloud, Healthcare IT & SLED – De-Weboo',
        'description' => 'Expert articles on secure development, cloud migration, healthcare compliance, SEO, and public-sector digital strategy.',
    ],
    'blog-sidebar' => [
        'title' => 'Blog Archive | De-Weboo Digital Insights',
        'description' => 'Browse insights on enterprise web, mobile, cloud, marketing, and procurement-ready IT from De-Weboo.',
    ],
    'blog-details' => [
        'title' => 'Blog Article | De-Weboo Digital Agency',
        'description' => 'In-depth guidance on technology, security, healthcare IT, and digital growth from De-Weboo specialists.',
    ],
    'team' => [
        'title' => 'Our Team | Engineers & Strategists – De-Weboo',
        'description' => 'Meet designers, developers, and cloud specialists delivering commercial innovation with government-grade rigor.',
    ],
    'team-details' => [
        'title' => 'Team Profile | De-Weboo Digital Agency',
        'description' => 'Specialist experience in secure web, mobile, cloud, healthcare IT, and client delivery at De-Weboo.',
    ],
    'portfolio' => [
        'title' => 'Portfolio | Enterprise Web & App Projects – De-Weboo',
        'description' => 'Case studies across commercial brands, healthcare, and public-facing platforms built for performance and compliance.',
    ],
    'portfolio-details' => [
        'title' => 'Case Study | De-Weboo Portfolio',
        'description' => 'Goals, secure architecture, and measurable results from a De-Weboo web, mobile, or cloud engagement.',
    ],
    'faqs' => [
        'title' => 'FAQs | Services, Security & SLED – De-Weboo',
        'description' => 'Answers on web development, healthcare IT, HIPAA practices, SLED capabilities, timelines, and how we work with new clients.',
    ],
    'testimonials' => [
        'title' => 'Client Testimonials | De-Weboo Reviews',
        'description' => 'Feedback from commercial, healthcare, and partner clients on secure delivery, performance, and collaboration.',
    ],
    'collaboration' => [
        'title' => 'Collaboration | De-Weboo & CaddSight Group',
        'description' => 'De-Weboo under CaddSight Group—integrated design, logistics, and digital solutions for commercial and SLED programs.',
    ],
    'pricing-plan' => [
        'title' => 'Pricing | Web, Cloud & Marketing Packages – De-Weboo',
        'description' => 'Transparent packages for websites, apps, cloud, SEO, and ongoing support—enterprise quality without enterprise friction.',
    ],
    'error' => [
        'title' => 'Page Not Found | De-Weboo',
        'description' => 'The page you requested could not be found. Return to De-Weboo or contact us for web, cloud, or procurement support.',
    ],
];
PHP;

file_put_contents($root . '/includes/seo-meta.php', $seoMeta);

$headerDefault = [
    "De-Weboo – Digital Agency" => 'De-Weboo | Enterprise Web, Mobile, Cloud & Healthcare IT',
    'De-Weboo is a digital agency specializing in web design, development, SEO, and branding for growing businesses.' => 'Enterprise digital agency for web development, mobile apps, cloud, SEO, and HIPAA-aligned healthcare IT. Official SLED contractor.',
];

$updated = 0;
foreach ($files as $file) {
    if (!is_file($file) || str_contains($file, DIRECTORY_SEPARATOR . 'tools' . DIRECTORY_SEPARATOR)) {
        continue;
    }
    $name = basename($file);
    if (in_array($name, ['config.php', 'build-all-pages.php', 'build-navbar-final.php', 'build-assemble-footer.php', 'build-extract-nav.php', 'build-extract-footer.php', 'apply-b2b-copy.php'], true)) {
        continue;
    }

    $content = file_get_contents($file);
    if ($content === false) {
        continue;
    }
    $original = $content;

    foreach ($replacements as $search => $replace) {
        $content = str_replace($search, $replace, $content);
    }

    if ($file === $root . '/includes/header.php') {
        foreach ($headerDefault as $search => $replace) {
            $content = str_replace($search, $replace, $content);
        }
    }

    if ($content !== $original) {
        file_put_contents($file, $content);
        $updated++;
        echo "Updated: {$name}\n";
    }
}

echo "Done. {$updated} files updated.\n";
