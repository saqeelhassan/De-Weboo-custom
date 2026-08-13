<?php

declare(strict_types=1);

require_once __DIR__ . '/seo-config.php';

/**
 * Load SEO title, description, keywords, and canonical for the current page slug.
 */
function dw_load_page_seo(string $slug): void
{
    global $page_title, $page_description, $page_keywords, $page_robots, $page_canonical;

    /** @var array<string, array{title: string, description: string, keywords?: string, robots?: string}> $meta */
    $meta = require __DIR__ . '/seo-meta.php';
    $data = $meta[$slug] ?? $meta['default'];
    $org = dw_org_config();

    $page_title = $data['title'];
    $page_description = $data['description'];
    $page_keywords = $data['keywords'] ?? $org['defaultKeywords'];
    $page_robots = $data['robots'] ?? 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';

    if ($slug === 'index') {
        $page_canonical = rtrim(dw_site_url(), '/') . '/';
    } else {
        $page_canonical = rtrim(dw_site_url(), '/') . '/' . $slug;
    }
}
