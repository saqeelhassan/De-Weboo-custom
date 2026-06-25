<?php
$h = file_get_contents(__DIR__ . '/index.html');
if (!preg_match('/<!-- Preloader Start -->(.*?)<\/header>/s', $h, $m)) {
    fwrite(STDERR, "no match\n");
    exit(1);
}
file_put_contents(__DIR__ . '/includes/_nav_extract.html', $m[0]);
echo strlen($m[0]), "\n";
