<?php

declare(strict_types=1);

require_once __DIR__ . '/seo-config.php';

$org = dw_org_config();
$canonical = $page_canonical ?? dw_canonical_url();
$orgId = rtrim($org['url'], '/') . '/#organization';
$websiteId = rtrim($org['url'], '/') . '/#website';
$webpageId = $canonical . '#webpage';

$serviceOffers = array_map(
    static fn (string $service): array => [
        '@type' => 'Offer',
        'itemOffered' => [
            '@type' => 'Service',
            'name' => $service,
            'provider' => ['@id' => $orgId],
            'areaServed' => ['Worldwide', 'United States'],
            'audience' => [
                '@type' => 'BusinessAudience',
                'audienceType' => 'B2B, B2C, B2A, Healthcare',
            ],
        ],
    ],
    $org['coreServices']
);

$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => ['Organization', 'ProfessionalService'],
            '@id' => $orgId,
            'name' => $org['name'],
            'legalName' => $org['legalName'],
            'url' => $org['url'],
            'logo' => [
                '@type' => 'ImageObject',
                'url' => $org['logo'],
            ],
            'image' => $org['logo'],
            'description' => $page_description,
            'email' => $org['email'],
            'telephone' => [$org['telephonePK'], $org['whatsapp']],
            'priceRange' => '$$$',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => $org['address']['streetAddress'],
                'addressLocality' => $org['address']['addressLocality'],
                'addressRegion' => $org['address']['addressRegion'],
                'postalCode' => $org['address']['postalCode'],
                'addressCountry' => $org['address']['addressCountry'],
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => $org['geo']['latitude'],
                'longitude' => $org['geo']['longitude'],
            ],
            'areaServed' => [
                ['@type' => 'Country', 'name' => 'Pakistan'],
                ['@type' => 'Country', 'name' => 'United States'],
                'Worldwide',
            ],
            'knowsAbout' => array_merge($org['coreServices'], $org['aiTerms'], [
                'HIPAA Compliance',
                'Section 508 Accessibility',
                'WCAG',
                'Enterprise Software Engineering',
                'Database Architecture',
            ]),
            'additionalProperty' => [
                [
                    '@type' => 'PropertyValue',
                    'name' => 'MarketFocus',
                    'value' => implode(', ', $org['markets']),
                    'description' => 'B2B enterprise, B2C consumer, and B2A business-to-authority delivery models',
                ],
            ],
            'parentOrganization' => $org['parentOrganization'],
            'sameAs' => $org['sameAs'],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'De-Weboo Dev Software & IT Services',
                'itemListElement' => $serviceOffers,
            ],
            'contactPoint' => [
                [
                    '@type' => 'ContactPoint',
                    'telephone' => $org['telephonePK'],
                    'contactType' => 'customer service',
                    'email' => $org['email'],
                    'areaServed' => 'Worldwide',
                    'availableLanguage' => ['English'],
                ],
            ],
        ],
        [
            '@type' => 'WebSite',
            '@id' => $websiteId,
            'url' => $org['url'],
            'name' => $org['name'],
            'description' => 'Custom web & software development agency and healthcare IT specialist.',
            'publisher' => ['@id' => $orgId],
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => ['@type' => 'EntryPoint', 'urlTemplate' => $org['url'] . '/search?q={search_term_string}'],
                'query-input' => 'required name=search_term_string',
            ],
            'inLanguage' => 'en-US',
        ],
        [
            '@type' => 'WebPage',
            '@id' => $webpageId,
            'url' => $canonical,
            'name' => $page_title,
            'description' => $page_description,
            'isPartOf' => ['@id' => $websiteId],
            'about' => ['@id' => $orgId],
            'inLanguage' => 'en-US',
        ],
    ],
];

$rep = dw_contact_rep();
$personUrl = rtrim($org['url'], '/') . $rep['url'];
$personId = $personUrl . '#person';
$schema['@graph'][0]['employee'] = ['@id' => $personId];
$person = [
    '@type' => 'Person',
    '@id' => $personId,
    'name' => $rep['name'],
    'url' => $personUrl,
    'image' => rtrim($org['url'], '/') . '/' . ltrim($rep['image'], '/'),
    'jobTitle' => $rep['title'],
    'worksFor' => ['@id' => $orgId],
];
if ($rep['sameAs'] !== []) {
    $person['sameAs'] = $rep['sameAs'];
}
$schema['@graph'][] = $person;
if (!empty($is_person_profile)) {
    $schema['@graph'][2]['@type'] = 'ProfilePage';
    $schema['@graph'][2]['mainEntity'] = ['@id' => $personId];
    $schema['@graph'][2]['about'] = ['@id' => $personId];
}

require_once __DIR__ . '/service-content.php';
$schemaSlug = basename((string) ($_SERVER['SCRIPT_NAME'] ?? ''), '.php');
$services = dw_service_content();
$serviceData = $services[$schemaSlug] ?? null;
if (!empty($org['openingHoursSpecification'])) {
    $schema['@graph'][0]['openingHoursSpecification'] = $org['openingHoursSpecification'];
}
$schema['@graph'][0]['contactPoint'][] = [
    '@type' => 'ContactPoint', 'telephone' => $org['whatsapp'], 'contactType' => 'sales',
    'areaServed' => 'Worldwide', 'availableLanguage' => ['English'],
];
if (!empty($page_faqs)) { $schema['@graph'][] = dw_faq_schema($page_faqs, $canonical); }
if (!empty($serviceData['faqs'])) { $schema['@graph'][] = dw_faq_schema($serviceData['faqs'], $canonical); }
if ($serviceData !== null || in_array($schemaSlug, ['services-details', 'blog-details', 'portfolio-details'], true)) {
    $group = $schemaSlug === 'blog-details' ? 'Blog' : ($schemaSlug === 'portfolio-details' ? 'Portfolio' : 'Services');
    $name = $post['title'] ?? $project['shortName'] ?? $serviceData['name'] ?? 'Service details';
    $schema['@graph'][] = ['@type' => 'BreadcrumbList', 'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $org['url'] . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => $group, 'item' => $org['url'] . '/' . strtolower($group)],
        ['@type' => 'ListItem', 'position' => 3, 'name' => $name, 'item' => $canonical],
    ]];
}
if ($schemaSlug === 'testimonials') {
    require_once __DIR__ . '/review-schema.php';
    $reviewNode = dw_review_schema($org['reviewSchema'], $orgId);
    if ($reviewNode !== null) { $schema['@graph'][] = $reviewNode; }
}

$json = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP);
if ($json === false) {
    return;
}
?>
    <script type="application/ld+json"><?php echo $json; ?></script>
