<?php
declare(strict_types=1);

/** Add intrinsic dimensions and progressive image sources to rendered local images. */
function dw_optimize_image_output(string $html): string
{
    static $manifest;
    $manifest ??= json_decode((string) file_get_contents(__DIR__ . '/image-manifest.json'), true) ?? [];
    $basePath = function_exists('dw_base_path') ? dw_base_path() : '';
    // Existing picture markup (including the eager hero) already defines its sources.
    $parts = preg_split('~(<picture\b[^>]*>.*?</picture>)~is', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
    foreach ($parts as &$part) {
        $isPicture = str_starts_with(strtolower($part), '<picture');
        $part = preg_replace_callback('~<img\b[^>]*>~i', static function(array $match) use ($manifest, $isPicture, $basePath): string {
            $tag = $match[0];
            if (!preg_match('~\bsrc="([^"?]+)(?:\?[^" ]*)?"~', $tag, $src)) { return $tag; }
            $key = '/' . ltrim(html_entity_decode($src[1], ENT_QUOTES, 'UTF-8'), '/');
            if ($basePath !== '' && str_starts_with($key, $basePath . '/')) { $key = substr($key, strlen($basePath)); }
            $image = $manifest[$key] ?? null;
            if ($image === null) { return $tag; }
            foreach (['width', 'height'] as $dimension) {
                if (!preg_match('~\b' . $dimension . '\s*=~i', $tag)) { $tag = preg_replace('~\s*/?>$~', ' ' . $dimension . '="' . $image[$dimension] . '">', $tag); }
            }
            if (!preg_match('~\bloading\s*=~i', $tag)) { $tag = str_replace('<img', '<img loading="lazy"', $tag); }
            if (!preg_match('~\bdecoding\s*=~i', $tag)) { $tag = str_replace('<img', '<img decoding="async"', $tag); }
            if ($isPicture || empty($image['webp']) || str_contains($tag, 'srcset=')) { return $tag; }
            $sources = array_map(static fn(array $source): string => htmlspecialchars($basePath . $source['src'], ENT_QUOTES, 'UTF-8') . ' ' . $source['width'] . 'w', $image['webp']);
            return '<picture><source type="image/webp" srcset="' . implode(', ', $sources) . '" sizes="(max-width: 767px) 100vw, 60vw">' . $tag . '</picture>';
        }, $part) ?? $part;
    }
    $html = implode('', $parts);
    // Keep whitespace-sensitive blocks intact while reducing template indentation.
    $fragments = preg_split('~(<(?:script|style|pre|textarea)\b[^>]*>.*?</(?:script|style|pre|textarea)>)~is', $html, -1, PREG_SPLIT_DELIM_CAPTURE);
    foreach ($fragments as $index => &$fragment) {
        if ($index % 2 === 0) { $fragment = preg_replace('/^[\t ]+/m', '', $fragment) ?? $fragment; }
    }
    return implode('', $fragments);
}
