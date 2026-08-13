<?php

declare(strict_types=1);

require_once __DIR__ . '/helpers.php';

/**
 * @return list<array{
 *     title: string,
 *     url: string,
 *     type: string,
 *     excerpt: string,
 *     text: string
 * }>
 */
function dw_site_search_index(): array
{
    require_once __DIR__ . '/blog-posts.php';
    require_once __DIR__ . '/portfolio-projects.php';
    require_once __DIR__ . '/team-members.php';
    require_once __DIR__ . '/support-pages.php';

    /** @var array<string, array{title: string, description: string, keywords?: string}> $meta */
    $meta = require __DIR__ . '/seo-meta.php';

    $staticSlugs = [
        'index' => 'Home',
        'about' => 'About Us',
        'services' => 'Services',
        'contact' => 'Contact',
        'blog' => 'Blog',
        'team' => 'Our Team',
        'portfolio' => 'Portfolio',
        'faqs' => 'FAQs',
        'testimonials' => 'Testimonials',
        'web-development' => 'Web Development',
        'mobile-app-development' => 'Mobile App Development',
        'ai-machine-learning' => 'AI and Machine Learning',
        'enterprise-software-development' => 'Enterprise Software Development',
        'data-engineering' => 'Data Engineering',
        'digital-marketing' => 'Digital Marketing',
        'seo' => 'SEO',
        'cloud-services' => 'Cloud Services',
        'collaboration' => 'Collaboration',
        'pricing-plan' => 'Pricing',
        'privacy-policy' => 'Privacy Policy',
        'client-support' => 'Client Support',
        'help-center' => 'Help Center',
        'system-status' => 'System Status',
        'feedback' => 'Feedback',
        'terms-and-conditions' => 'Terms & Condition',
    ];

    $items = [];

    foreach ($staticSlugs as $slug => $label) {
        // This block is now handled by the generic meta lookup below, but we need to ensure the slug exists in meta
        // This is a placeholder to ensure the loop continues to work correctly with the new structure
    }

    $services = [
        ['Custom Medical Systems', 'HIPAA-aligned medical websites and clinical workflows', 'services'],
        ['Real Estate Website Development', 'Property listing platforms, IDX/MLS integrations, and agent & brokerage websites', 'real-estate-website-development'],
    ];

    foreach ($services as [$title, $desc, $url]) {
        $items[] = [
            'title' => $title,
            'url' => $url,
            'type' => 'Service',
            'excerpt' => $desc,
            'text' => $title . ' ' . $desc,
        ];
    }

    // Re-add static slugs using the meta data, now that all individual service pages exist
    foreach ($staticSlugs as $slug => $label) {
        if (!isset($meta[$slug])) {
            continue;
        }
        $items[] = [
            'title' => $label,
            'url' => $slug === 'index' ? '/' : $slug,
            'type' => 'Page',
            'excerpt' => $meta[$slug]['description'],
            'text' => $label . ' ' . $meta[$slug]['title'] . ' ' . $meta[$slug]['description'] . ' ' . ($meta[$slug]['keywords'] ?? ''),
        ];
    }

    foreach (dw_blog_posts() as $post) {
        $tags = implode(' ', $post['tags'] ?? []);
        $items[] = [
            'title' => $post['title'],
            'url' => dw_blog_url($post['slug']),
            'type' => 'Blog',
            'excerpt' => $post['excerpt'],
            'text' => $post['title'] . ' ' . $post['excerpt'] . ' ' . ($post['service'] ?? '') . ' ' . $tags . ' ' . ($post['keywords'] ?? ''),
        ];
    }

    foreach (dw_portfolio_projects() as $project) {
        $features = implode(' ', $project['keyFeatures'] ?? []);
        $items[] = [
            'title' => $project['fullName'],
            'url' => dw_portfolio_url($project['slug']),
            'type' => 'Portfolio',
            'excerpt' => $project['overview'],
            'text' => $project['shortName'] . ' ' . $project['fullName'] . ' ' . $project['overview'] . ' ' . ($project['category'] ?? '') . ' ' . ($project['services'] ?? '') . ' ' . $features,
        ];
    }

    foreach (dw_team_members() as $member) {
        $items[] = [
            'title' => $member['name'],
            'url' => dw_team_member_url($member['slug']),
            'type' => 'Team',
            'excerpt' => $member['role'] . ' — ' . $member['intro'],
            'text' => $member['name'] . ' ' . $member['role'] . ' ' . $member['intro'] . ' ' . $member['bio'],
        ];
    }

    foreach (dw_support_pages() as $page) {
        $sectionText = '';
        foreach ($page['sections'] as $section) {
            $sectionText .= ' ' . $section['heading'] . ' ' . strip_tags($section['body']);
            if (!empty($section['list'])) {
                $sectionText .= ' ' . implode(' ', array_map('strip_tags', $section['list']));
            }
        }
        $items[] = [
            'title' => $page['title'],
            'url' => $page['seo_slug'] . '.php',
            'type' => 'Support',
            'excerpt' => $page['intro'],
            'text' => $page['title'] . ' ' . $page['intro'] . $sectionText,
        ];
    }

    return $items;
}

/**
 * @return list<array{title: string, url: string, type: string, excerpt: string, score: int}>
 */
function dw_site_search(string $query, int $limit = 50): array
{
    $query = trim($query);
    if ($query === '') {
        return [];
    }

    $terms = preg_split('/\s+/u', mb_strtolower($query, 'UTF-8')) ?: [];
    $terms = array_values(array_filter($terms, static fn (string $t): bool => mb_strlen($t, 'UTF-8') >= 2));
    if ($terms === []) {
        $terms = [mb_strtolower($query, 'UTF-8')];
    }

    $results = [];

    foreach (dw_site_search_index() as $item) {
        $haystack = mb_strtolower($item['text'], 'UTF-8');
        $titleLower = mb_strtolower($item['title'], 'UTF-8');
        $score = 0;
        $matched = 0;

        foreach ($terms as $term) {
            if (mb_strpos($titleLower, $term, 0, 'UTF-8') !== false) {
                $score += 12;
                $matched++;
            } elseif (mb_strpos($haystack, $term, 0, 'UTF-8') !== false) {
                $score += 4;
                $matched++;
            }
        }

        if ($matched === 0) {
            continue;
        }

        if ($matched === count($terms)) {
            $score += 6;
        }

        $results[] = [
            'title' => $item['title'],
            'url' => $item['url'],
            'type' => $item['type'],
            'excerpt' => $item['excerpt'],
            'score' => $score,
        ];
    }

    usort($results, static fn (array $a, array $b): int => $b['score'] <=> $a['score']);

    if ($limit > 0) {
        $results = array_slice($results, 0, $limit);
    }

    return $results;
}

function dw_search_excerpt(string $text, string $query, int $maxLength = 180): string
{
    $plain = trim(preg_replace('/\s+/u', ' ', strip_tags($text)) ?? '');
    if ($plain === '') {
        return '';
    }

    if (mb_strlen($plain, 'UTF-8') <= $maxLength) {
        return $plain;
    }

    $terms = preg_split('/\s+/u', mb_strtolower(trim($query), 'UTF-8')) ?: [];
    $lower = mb_strtolower($plain, 'UTF-8');

    foreach ($terms as $term) {
        if ($term === '') {
            continue;
        }
        $pos = mb_strpos($lower, $term, 0, 'UTF-8');
        if ($pos !== false) {
            $start = max(0, $pos - 40);
            $snippet = mb_substr($plain, $start, $maxLength, 'UTF-8');
            if ($start > 0) {
                $snippet = '…' . $snippet;
            }
            if (mb_strlen($plain, 'UTF-8') > $start + $maxLength) {
                $snippet .= '…';
            }
            return $snippet;
        }
    }

    return rtrim(mb_substr($plain, 0, $maxLength, 'UTF-8')) . '…';
}
