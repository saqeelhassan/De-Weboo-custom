<?php
declare(strict_types=1);
require_once __DIR__ . '/seo-config.php';
require_once __DIR__ . '/blog-posts.php';
require_once __DIR__ . '/portfolio-projects.php';
require_once __DIR__ . '/team-members.php';
require_once __DIR__ . '/service-content.php';

/** Respect all Disallow rules conservatively, including named crawler groups. */
function dw_sitemap_allowed(string $path): bool
{
    if ($path === '/search' || str_starts_with($path, '/tools/')) { return false; }
    $robots = (string) file_get_contents(dirname(__DIR__) . '/robots.txt');
    preg_match_all('/^Disallow:\s*(\S+)/mi', $robots, $matches);
    foreach ($matches[1] as $rule) {
        $pattern = str_replace(['\\*', '\\$'], ['.*', '$'], preg_quote($rule, '~'));
        if (preg_match('~^' . $pattern . '~', $path)) { return false; }
    }
    return true;
}

/** File-backed content modified times; never substitute the current request time. */
function dw_sitemap_entries(): array
{
    $root = dirname(__DIR__);
    $entries = [];
    $add = static function(string $path, string $source, ?string $modified = null) use (&$entries): void {
        if (!dw_sitemap_allowed($path)) { return; }
        $entries[dw_site_url() . $path] = $modified ?? gmdate('c', (int) filemtime($source));
    };
    foreach (glob($root . '/*.php') ?: [] as $file) {
        $slug = basename($file, '.php');
        if (str_starts_with($slug, 'build-') || in_array($slug, ['config', 'sitemap', 'search', 'error', 'blog-details', 'portfolio-details', 'team-details', 'digital-wedding-card'], true)) { continue; }
        $code = (string) file_get_contents($file);
        if (!str_contains($code, 'header.php') && !str_contains($code, 'support-pages.php')) { continue; }
        $source = isset(dw_service_content()[$slug]) && filemtime(__DIR__ . '/service-copy.json') > filemtime($file) ? __DIR__ . '/service-copy.json' : $file;
        if ($slug === 'faqs' && filemtime(__DIR__ . '/faqs-data.json') > filemtime($source)) { $source = __DIR__ . '/faqs-data.json'; }
        $add($slug === 'index' ? '/' : '/' . $slug, $source);
    }
    $add('/services/digital-wedding-card', $root . '/digital-wedding-card.php');
    foreach (dw_blog_posts() as $post) { $add(dw_blog_url($post['slug']), __DIR__ . '/blog-posts.php', $post['modified'] ?? null); }
    foreach (dw_portfolio_projects() as $project) { $add(dw_portfolio_url($project['slug']), __DIR__ . '/portfolio-projects.php', $project['modified'] ?? null); }
    foreach (dw_team_members() as $member) { $add(dw_team_member_url($member['slug']), __DIR__ . '/team-members.php'); }
    ksort($entries);
    return $entries;
}

function dw_sitemap_xml(): string
{
    $xml = new XMLWriter(); $xml->openMemory(); $xml->setIndent(true); $xml->startDocument('1.0', 'UTF-8');
    $xml->startElement('urlset'); $xml->writeAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
    foreach (dw_sitemap_entries() as $url => $modified) {
        $xml->startElement('url'); $xml->writeElement('loc', $url); $xml->writeElement('lastmod', $modified); $xml->endElement();
    }
    $xml->endElement(); $xml->endDocument();
    return $xml->outputMemory();
}
