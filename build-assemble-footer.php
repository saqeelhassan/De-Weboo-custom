<?php

declare(strict_types=1);

function localize_footer_html(string $html): string
{
    $html = preg_replace_callback('/(href|action)="([a-z0-9_-]+\.html)"/i', static function (array $m): string {
        return $m[1] . '="' . basename($m[2], '.html') . '.php"';
    }, $html);

    $html = preg_replace(
        '/<form action="#"\s+class="form-style1 form-style2/m',
        '<form method="post" action="<?php echo e(dw_self_path()); ?>" class="form-style1 form-style2',
        $html
    );

    $html = str_replace(
        '<form action="#" class="form-style1 d-flex align-items-center justify-content-between">',
        '<form method="post" action="<?php echo e(dw_self_path()); ?>" class="form-style1 d-flex align-items-center justify-content-between">',
        $html
    );

    $html = str_replace(
        '<input type="text" placeholder="Enter your mail">',
        '<input type="email" name="newsletter_email" autocomplete="email" placeholder="Enter your mail" value="<?php echo e($newsletter_email ?? \'\'); ?>">',
        $html
    );

    $html = str_replace(
        '<img src="assets/img/logo/logo-white.png" alt="img">',
        '<img src="assets/img/logo/logo-white.png" loading="lazy" alt="De-Weboo logo">',
        $html
    );

    $html = str_replace(
        '<form method="get">',
        '<form method="get" action="#">',
        $html
    );

    $html = str_replace(
        '<input type="search" class="main-search-input" placeholder="Search...">',
        '<input type="search" name="q" class="main-search-input" placeholder="Search..." value="<?php echo e($_GET[\'q\'] ?? \'\'); ?>">',
        $html
    );

    if (!str_ends_with(trim($html), '</html>')) {
        $html = rtrim($html) . "\n</html>\n";
    }

    return $html;
}

$d = trim(file_get_contents(__DIR__ . '/includes/_footer_default.html'));
$s2 = trim(file_get_contents(__DIR__ . '/includes/_footer_style2.html'));

$d = localize_footer_html($d);
$s2 = localize_footer_html($s2);

$out = <<<'OUT'
<?php

declare(strict_types=1);

$footer_variant = $footer_variant ?? 'default';
$newsletter_email = $newsletter_email ?? '';

if (($footer_variant ?? 'default') === 'style2') :
    ?>

OUT;
$out .= $s2;

$out .= <<<'OUT'
<?php else : ?>

OUT;
$out .= $d;

$out .= <<<'OUT'
<?php endif; ?>

OUT;

file_put_contents(__DIR__ . '/includes/footer.php', $out);
echo "includes/footer.php written\n";
