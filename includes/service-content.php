<?php
declare(strict_types=1);

/** Shared taxonomy. Content fields intentionally await approved service copy. */
function dw_service_content(): array
{
    $definitions = [
        'web-development' => ['Web Development', ['web development', 'web application', 'website', 'e-commerce', 'custom web apps']],
        'mobile-app-development' => ['Mobile App Development', ['mobile app', 'ios', 'android', 'flutter']],
        'ai-machine-learning' => ['AI & Machine Learning', ['ai automation', 'machine learning', 'llm']],
        'enterprise-software-development' => ['Enterprise Software Development', ['enterprise', 'erp', 'crm', 'lms']],
        'real-estate-website-development' => ['Real Estate Website Development', ['real estate', 'idx', 'mls']],
        'data-engineering' => ['Data Engineering', ['data engineering', 'database', 'dashboard', 'data pipeline']],
        'digital-marketing' => ['Digital Marketing', ['digital marketing', 'marketing', 'lead generation']],
        'seo' => ['SEO', ['seo', 'search engine', 'aeo', 'geo']],
        'cloud-services' => ['Cloud Services', ['cloud', 'hosting', 'devops']],
        'ai-video-content' => ['AI Video & Content', ['ai video', 'ai content', 'video production']],
        'digital-wedding-card' => ['Digital Wedding Cards', ['wedding', 'invitation']],
    ];
    static $copy;
    $copy ??= json_decode(file_get_contents(__DIR__ . '/service-copy.json'), true, 512, JSON_THROW_ON_ERROR);
    $services = [];
    foreach ($definitions as $slug => [$name, $tags]) {
        $services[$slug] = array_replace(['name' => $name, 'tags' => $tags, 'included' => '', 'process' => '', 'tools' => '', 'results' => '', 'faqs' => []], $copy[$slug] ?? []);
    }
    return $services;
}

function dw_content_matches_service(array $item, string $slug): bool
{
    if (isset($item['serviceSlugs'])) { return in_array($slug, $item['serviceSlugs'], true); }
    $services = dw_service_content();
    $text = strtolower(implode(' ', array_merge($item['tags'] ?? [], [$item['service'] ?? '', $item['services'] ?? '', $item['category'] ?? ''])));
    foreach ($services[$slug]['tags'] ?? [] as $tag) {
        if (preg_match('~(?<![a-z])' . preg_quote($tag, '~') . '(?![a-z])~i', $text)) { return true; }
    }
    return false;
}

function dw_related_service(array $post): string
{
    // Prioritize the explicitly assigned service before broader overlapping tags.
    foreach (array_keys(dw_service_content()) as $slug) {
        if (dw_content_matches_service(['service' => $post['service'] ?? ''], $slug)) { return $slug; }
    }
    foreach (array_keys(dw_service_content()) as $slug) {
        if (dw_content_matches_service($post, $slug)) { return $slug; }
    }
    return 'web-development';
}

function dw_faq_schema(array $faqs, string $url): array
{
    return ['@type' => 'FAQPage', '@id' => $url . '#faq', 'mainEntity' => array_map(static fn(array $faq): array => [
        '@type' => 'Question', 'name' => $faq['question'],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => trim(preg_replace('/\s+/u', ' ', html_entity_decode(strip_tags($faq['answer']), ENT_QUOTES | ENT_HTML5, 'UTF-8')) ?? '')],
    ], $faqs)];
}
