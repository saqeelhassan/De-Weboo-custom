<?php

declare(strict_types=1);

require_once __DIR__ . '/seo-config.php';

$org = dw_org_config();
$canonical = $page_canonical ?? dw_canonical_url();
$orgId = rtrim($org['url'], '/') . '/#organization';
$websiteId = rtrim($org['url'], '/') . '/#website';
$webpageId = $canonical . '#webpage';

$naicsProperties = [];
foreach ($org['naics'] as $code) {
    $naicsProperties[] = [
        '@type' => 'PropertyValue',
        'name' => 'NAICS',
        'value' => $code,
        'description' => $org['naicsCapabilities'][$code] ?? 'North American Industry Classification System code — government procurement eligibility',
    ];
}

$serviceOffers = array_map(
    static fn (string $service): array => [
        '@type' => 'Offer',
        'itemOffered' => [
            '@type' => 'Service',
            'name' => $service,
            'provider' => ['@id' => $orgId],
            'areaServed' => ['Worldwide', 'United States', 'Pakistan'],
            'audience' => [
                '@type' => 'BusinessAudience',
                'audienceType' => 'B2B, B2C, B2A, SLED, Healthcare',
            ],
        ],
    ],
    $org['coreServices']
);

$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => ['ProfessionalService', 'LocalBusiness', 'Corporation'],
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
            'telephone' => $org['telephone'],
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
                ['@type' => 'Country', 'name' => 'United States'],
                ['@type' => 'Country', 'name' => 'Pakistan'],
                ['@type' => 'AdministrativeArea', 'name' => 'SLED — State, Local & Education authorities'],
            ],
            'knowsAbout' => array_merge($org['coreServices'], $org['aiTerms'], [
                'SLED Bidder',
                'Government Contracting',
                'HIPAA Compliance',
                'Section 508 Accessibility',
                'WCAG',
                'Enterprise Software Engineering',
                'Database Architecture',
            ]),
            'naics' => $org['naics'],
            'additionalProperty' => array_merge($naicsProperties, [
                [
                    '@type' => 'PropertyValue',
                    'name' => 'MarketFocus',
                    'value' => implode(', ', $org['markets']),
                    'description' => 'B2B enterprise, B2C consumer, and B2A business-to-authority public-sector delivery models',
                ],
                [
                    '@type' => 'PropertyValue',
                    'name' => 'GovernmentContractor',
                    'value' => 'Contract-ready SLED bidder',
                    'description' => 'Eligible for state, local, and education authority procurement under mapped NAICS codes',
                ],
            ]),
            'parentOrganization' => $org['parentOrganization'],
            'sameAs' => $org['sameAs'],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'De-Weboo Software & IT Services',
                'itemListElement' => $serviceOffers,
            ],
            'contactPoint' => [
                [
                    '@type' => 'ContactPoint',
                    'telephone' => $org['telephone'],
                    'contactType' => 'customer service',
                    'email' => $org['email'],
                    'areaServed' => 'Worldwide',
                    'availableLanguage' => ['English'],
                ],
                [
                    '@type' => 'ContactPoint',
                    'telephone' => $org['telephone'],
                    'contactType' => 'sales',
                    'contactOption' => 'TollFree',
                    'areaServed' => 'US',
                    'availableLanguage' => ['English'],
                ],
            ],
        ],
        [
            '@type' => 'WebSite',
            '@id' => $websiteId,
            'url' => $org['url'],
            'name' => $org['name'],
            'description' => 'Custom web & software development agency, SLED bidder, and healthcare IT specialist.',
            'publisher' => ['@id' => $orgId],
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

$json = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
if ($json === false) {
    return;
}
?>
    <script type="application/ld+json"><?php echo $json; ?></script>
