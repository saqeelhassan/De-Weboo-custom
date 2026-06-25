<?php

declare(strict_types=1);

$raw = file_get_contents(__DIR__ . '/includes/_nav_extract.html');

$topStart = '<!-- Header Top Start -->';
$topEnd = '<!-- Header Top End -->';
$p1 = strpos($raw, $topStart);
$p2 = strpos($raw, $topEnd);
if ($p1 === false || $p2 === false) {
    fwrite(STDERR, "header top markers missing\n");
    exit(1);
}
$p2 += strlen($topEnd);
$topBlock = substr($raw, $p1, $p2 - $p1);
$withoutTop = substr_replace($raw, '%%HEADER_TOP%%', $p1, $p2 - $p1);

$html = $withoutTop;
$html = preg_replace_callback('/(href|action)="([a-z0-9_-]+\.html)"/i', static function (array $m): string {
    $base = basename($m[2], '.html');
    return $m[1] . '="' . $base . '.php"';
}, $html);

$html = str_replace(
    '<header id="header-sticky" class="header-1 w-100">',
    '<header id="header-sticky" class="<?php echo e($header_nav_class); ?>">',
    $html
);

$html = preg_replace(
    '/(<a href="index\.php" class="header-logo">\s*)<img src="assets\/img\/logo\/logo\.png" alt="logo-img">/',
    '$1<img src="<?php echo e($header_logo_src); ?>" alt="De-Weboo logo">',
    $html,
    1,
    $count
);
if ($count !== 1) {
    fwrite(STDERR, "main logo replace count=$count\n");
    exit(1);
}

$html = str_replace(
    '<a href="index.php" class="header-logo">',
    '<a href="index.php" class="header-logo">',
    $html
);

$html = str_replace(
    '<div class="header-hamburger-inner d-xl-flex gap-xxl-4 gap-xl-3 align-items-center d-none">
                        <a href="#0" class="search-trigger search-icon d-xl-block d-none fs-five">
                            <i class="fa-solid fa-magnifying-glass black"></i>
                        </a>',
    '<div class="header-hamburger-inner d-xl-flex gap-xxl-4 gap-xl-3 align-items-center d-none">
                        <a href="#0" class="search-trigger search-icon d-xl-block d-none fs-five">
                            <i class="fa-solid fa-magnifying-glass <?php echo e($nav_search_icon_color_inner); ?>"></i>
                        </a>',
    $html
);

$html = str_replace(
    '<img src="assets/img/header/home',
    '<img loading="lazy" src="assets/img/header/home',
    $html
);

$wrappedTop = "<?php if (!empty(\$show_header_top)) : ?>\n" . $topBlock . "\n<?php endif; ?>\n";

$html = str_replace('%%HEADER_TOP%%', $wrappedTop, $html);

$preamble = <<<'PHP'
<?php

declare(strict_types=1);

$show_header_top = $show_header_top ?? true;
$header_nav_class = $header_nav_class ?? 'header-1 w-100';
$header_logo_src = $header_logo_src ?? 'assets/img/logo/logo.png';
$nav_search_icon_color_inner = $nav_search_icon_color_inner ?? 'black';

PHP;

$out = $preamble . "?>\n" . $html . "\n";

file_put_contents(__DIR__ . '/includes/navbar.php', $out);
echo "includes/navbar.php written\n";
