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
    $slug = basename((string) ($_SERVER['SCRIPT_NAME'] ?? 'index.php'), '.php');

    if ($slug === 'index') {
        return $base . '/';
    }

    return $base . '/' . $slug;
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
            'lead@deweboo.com',
        ],
        'telephone' => '+13058823730',
        'telephoneDisplay' => '+1 305 882 3730',
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
        'facebook' => 'https://www.facebook.com/deweboo',
        'sameAs' => [
            'https://caddsight.com/',
            'https://www.facebook.com/deweboo',
        ],
        'primaryContactRep' => [
            'name' => 'Syed Aqeel Hassan Gillani',
            'title' => 'CEO & Founder',
            'image' => 'assets/img/services/techgon-author.jpg',
        ],
    ];
}

/** Primary sales / engineering contact shown beside call & WhatsApp blocks. */
function dw_contact_rep(): array
{
    return dw_org_config()['primaryContactRep'];
}
