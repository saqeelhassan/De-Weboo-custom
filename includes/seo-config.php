<?php

declare(strict_types=1);

/**
 * Site-wide SEO / AEO / GEO constants for De-Weboo Dev.
 */
function dw_site_url(): string
{
    return 'https://deweboo.com';
}

function dw_canonical_url(): string
{
    $path = (string) (parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');
    $path = preg_replace('~/(?:index\.php)?$~', '/', $path) ?? $path;
    $path = preg_replace('~\.php$~', '', $path) ?? $path;
    if ($path === '/seo-services') { $path = '/seo'; }
    return dw_site_url() . ($path === '/' ? '/' : rtrim($path, '/'));
}

function dw_org_config(): array
{
    return [
        'name' => 'De-Weboo Dev',
        'legalName' => 'De-Weboo Dev',
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
            'lead@deweboo.com',
        ],
        'telephonePK' => '+923367770349',
        'telephonePKDisplay' => '+92 336 7770349',
        'whatsapp' => '+15512023922',
        'whatsappDisplay' => '+1 551 202 3922',
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
        'markets' => ['B2B', 'B2C', 'B2A'],
        'coreServices' => [
            'Web & Mobile Development',
            'AI Automation',
            'Data Engineering',
            'Digital Marketing',
            'SEO',
            'Cloud Services',
            'AI Video and Content',
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
        'defaultKeywords' => 'web mobile development, AI automation, data engineering, data pipeline engineering, digital marketing, SEO, medical healthcare SEO, cloud services',
        // Use UTC for opening/closing times. Populate only after hours are confirmed.
        'openingHoursTimezone' => 'UTC',
        'openingHoursSpecification' => [],
        'reviewSchema' => ['enabled' => false, 'reviews' => []],
        'youtube' => '',
        'facebook' => 'https://www.facebook.com/deweboodev/',
        'linkedin' => 'https://www.linkedin.com/company/de-weboo-dev/',
        'instagram' => 'https://www.instagram.com/deweboodev/',
        'pinterest' => 'https://www.pinterest.com/Deweboodev/',
        'sameAs' => [
            'https://caddsight.com/',
            'https://www.facebook.com/deweboodev/',
            'https://www.linkedin.com/company/de-weboo-dev/',
            'https://www.instagram.com/deweboodev/',
            'https://www.pinterest.com/Deweboodev/',
        ],
        'primaryContactRep' => [
            'name' => 'Aqeel Hassan Gilani',
            'url' => '/aqeel-hassan-gilani',
            // Personal profile URLs only; keep company accounts in organization sameAs.
            'sameAs' => [
                'https://www.facebook.com/aqeelhassangillani',
                'https://www.linkedin.com/in/aqeel-hassan-gillani/',
            ],
            'title' => 'Lead Developer',
            'image' => 'assets/img/services/techgon-author.jpg',
        ],
    ];
}

/** Primary sales / engineering contact shown beside call & WhatsApp blocks. */
function dw_contact_rep(): array
{
    return dw_org_config()['primaryContactRep'];
}
