<?php

declare(strict_types=1);

/**
 * Site-wide SEO / AEO / GEO constants for De-Weboo.
 */
function dw_site_url(): string
{
    if (!empty($_SERVER['HTTP_HOST'])) {
        $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';

        return $scheme . '://' . rtrim((string) $_SERVER['HTTP_HOST'], '/');
    }

    return 'https://deweboo.com';
}

function dw_canonical_url(): string
{
    $base = dw_site_url();
    $script = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');

    if ($script === 'index.php') {
        return $base . '/';
    }

    return $base . '/' . $script;
}

function dw_org_config(): array
{
    return [
        'name' => 'De-Weboo',
        'legalName' => 'De-Weboo',
        'parentOrganization' => [
            '@type' => 'Organization',
            'name' => 'CaddSight',
            'url' => 'https://caddsight.com/',
        ],
        'url' => dw_site_url(),
        'logo' => dw_site_url() . '/assets/img/logo/logo.png',
        'email' => 'Info@deweboo.com',
        /** Addresses that receive contact, consultation, portfolio, feedback, and teaming form submissions. */
        'inboundEmails' => [
            'Info@deweboo.com',
        ],
        'telephone' => '+923367770349',
        'telephoneDisplay' => '+92 (336) 7770349',
        'address' => [
            'streetAddress' => 'Lucky Shanghai Trade Centre, Office 2016, 2nd Floor, Auto Bhan Road',
            'addressLocality' => 'Hyderabad',
            'addressRegion' => 'Sindh',
            'postalCode' => '71000',
            'addressCountry' => 'PK',
        ],
        'geo' => [
            'latitude' => 25.3924,
            'longitude' => 68.3737,
        ],
        'naics' => ['541511', '541512', '541519', '541810', '541910'],
        'markets' => ['B2B', 'B2C', 'B2A'],
        'coreServices' => [
            'Web & Mobile Development',
            'AI Automation',
            'Data Engineering',
            'Digital Marketing',
            'SEO',
            'Cloud Services',
            'SLED Public Sector Procurement',
        ],
        'aiTerms' => [
            'AI Automation',
            'LLM Implementation',
            'Workflow Automation',
            'Data Engineering',
            'Data Pipeline Engineering',
            'Secure Data Administration Systems',
            'Custom AI Integrations',
        ],
        'naicsCapabilities' => [
            '541511' => 'Custom computer programming: web and mobile applications, e-commerce, medical websites, custom AI integrations, LLM configurations, and workflow automation scripting',
            '541512' => 'Computer systems design: data engineering, data architecture, secure data pipeline engineering, and cloud infrastructure',
            '541519' => 'Other computer related services: data management, administrative dashboard pipelines, and managed IT lifecycle support',
            '541810' => 'Advertising agencies: digital marketing, consumer lead generation, technical SEO, and specialized medical and healthcare SEO',
            '541910' => 'Marketing research and public opinion polling: SEO analytics, campaign research, and AEO content strategy',
        ],
        'defaultKeywords' => 'web mobile development, AI automation, data engineering, data pipeline engineering, digital marketing, SEO, medical healthcare SEO, cloud services, SLED bidder, NAICS 541511, NAICS 541512, NAICS 541810, NAICS 541910',
        'facebook' => 'https://www.facebook.com/deweboo',
        'sameAs' => [
            'https://caddsight.com/',
            'https://www.facebook.com/deweboo',
        ],
        'primaryContactRep' => [
            'name' => 'Syed Aqeel Hassan Gillani',
            'title' => 'Lead Developer, CEO & Founder',
            'image' => 'assets/img/services/techgon-author.jpg',
        ],
    ];
}

/** Primary sales / engineering contact shown beside call & WhatsApp blocks. */
function dw_contact_rep(): array
{
    return dw_org_config()['primaryContactRep'];
}
