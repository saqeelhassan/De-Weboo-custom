<?php

declare(strict_types=1);

$h = file_get_contents(__DIR__ . '/index.html');
if (!preg_match('/<!--<< Footer Section Start >>-->(.*?)<\/html>/s', $h, $m)) {
    fwrite(STDERR, "footer default no match\n");
    exit(1);
}
file_put_contents(__DIR__ . '/includes/_footer_default.html', trim($m[1]));

$h2 = file_get_contents(__DIR__ . '/index-2.html');
if (!preg_match('/<!--<< Footer Section Start >>-->(.*?)<\/html>/s', $h2, $m2)) {
    fwrite(STDERR, "footer style2 no match\n");
    exit(1);
}
file_put_contents(__DIR__ . '/includes/_footer_style2.html', trim($m2[1]));
echo "ok\n";
