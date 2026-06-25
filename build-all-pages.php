<?php

declare(strict_types=1);

$root = __DIR__;
$footerMarker = '<!--<< Footer Section Start >>-->';

$layouts = [
    'index' => [
        'show_header_top' => 'false',
        'header_nav_class' => "'header-1 style3 w-100'",
        'header_logo_src' => "'assets/img/logo/logo-white.png'",
        'nav_search_icon_color_inner' => "'white'",
        'footer_variant' => "'style2'",
    ],
];

function extract_meta(string $html, string $tag, string $attr = 'content'): ?string
{
    if (preg_match('/<meta\s+name="' . preg_quote($tag, '/') . '"\s+' . $attr . '="([^"]*)"/i', $html, $m)) {
        return html_entity_decode($m[1], ENT_QUOTES | ENT_HTML5, 'UTF-8');
    }

    return null;
}

function extract_title(string $html): ?string
{
    if (preg_match('/<title>(.*?)<\/title>/is', $html, $m)) {
        return trim(html_entity_decode($m[1], ENT_QUOTES | ENT_HTML5, 'UTF-8'));
    }

    return null;
}

function localize_html_links(string $html): string
{
    return preg_replace_callback('/(href|action)="([a-z0-9_-]+\.html)"/i', static function (array $m): string {
        return $m[1] . '="' . basename($m[2], '.html') . '.php"';
    }, $html);
}

function add_lazy_loading(string $html): string
{
    return preg_replace_callback('/<img\s+([^>]*?)>/i', static function (array $m): string {
        $inner = $m[1];
        if (preg_match('/\bloading\s*=/i', $inner)) {
            return $m[0];
        }
        if (preg_match('/hero-ele|class="[^"]*\bhero-ele/', $inner)) {
            return $m[0];
        }
        if (preg_match('/target\.png/', $inner)) {
            return $m[0];
        }

        return '<img loading="lazy" ' . $inner . '>';
    }, $html);
}

function improve_alt_attributes(string $html): string
{
    $html = preg_replace('/alt="img"/i', 'alt="Illustration"', $html);
    $html = preg_replace('/alt="logo-img"/i', 'alt="De-Weboo logo"', $html);
    $html = preg_replace('/alt="icon"/i', 'alt=""', $html);
    $html = preg_replace('/alt="news-img"/i', 'alt="Blog post thumbnail"', $html);

    return preg_replace_callback('/<img\s+((?![^>]*\balt=)[^>]*)>/i', static function (array $m): string {
        return '<img alt="" ' . $m[1] . '>';
    }, $html);
}

foreach (glob($root . '/*.html') as $htmlPath) {
    $base = basename($htmlPath, '.html');
    $html = file_get_contents($htmlPath);

    $headerEnd = strpos($html, '</header>');
    if ($headerEnd === false) {
        fwrite(STDERR, "skip $base: no </header>\n");
        continue;
    }
    $contentStart = $headerEnd + strlen('</header>');

    $footerPos = strpos($html, $footerMarker);
    if ($footerPos === false) {
        fwrite(STDERR, "skip $base: no footer marker\n");
        continue;
    }

    $middle = trim(substr($html, $contentStart, $footerPos - $contentStart));
    $middle = localize_html_links($middle);
    $middle = add_lazy_loading($middle);
    $middle = improve_alt_attributes($middle);

    $titlePhp = var_export(extract_title($html) ?? 'De-Weboo – Digital Agency', true);
    $descPhp = var_export(extract_meta($html, 'description') ?? 'Digital agency – IT solutions and technology services.', true);

    $layoutLines = [];
    if (isset($layouts[$base])) {
        foreach ($layouts[$base] as $k => $v) {
            $layoutLines[] = "\$$k = $v;";
        }
    }

    $layoutPhp = $layoutLines !== [] ? "\n" . implode("\n", $layoutLines) . "\n" : "\n";

    $phpOut = <<<PHP
<?php

declare(strict_types=1);

require_once __DIR__ . '/config.php';
\$page_title = {$titlePhp};
\$page_description = {$descPhp};
{$layoutPhp}require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>
{$middle}
<?php require_once __DIR__ . '/includes/footer.php'; ?>

PHP;

    $outPath = $root . '/' . $base . '.php';
    file_put_contents($outPath, $phpOut);
    echo "Wrote $base.php\n";
}
