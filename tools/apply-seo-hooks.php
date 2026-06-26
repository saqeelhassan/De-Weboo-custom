<?php

declare(strict_types=1);

$root = dirname(__DIR__);

foreach (glob($root . '/*.php') as $file) {
    $name = basename($file);
    if (str_starts_with($name, 'build-')) {
        continue;
    }

    $content = file_get_contents($file);
    if (!str_contains($content, '$page_title')) {
        continue;
    }
    if (str_contains($content, 'dw_load_page_seo')) {
        continue;
    }

    $content = preg_replace(
        '/require_once __DIR__ \. \'\/config\.php\';\s*\n(?:\$page_title = [^;]+;\s*\n\$page_description = [^;]+;\s*\n)/',
        "require_once __DIR__ . '/config.php';\nrequire_once __DIR__ . '/includes/seo.php';\ndw_load_page_seo(basename(__FILE__, '.php'));\n",
        $content,
        1,
        $count
    );

    if ($count) {
        file_put_contents($file, $content);
        echo "SEO hook: $name\n";
    }
}

echo "Done.\n";
