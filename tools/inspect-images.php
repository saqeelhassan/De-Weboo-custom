<?php

declare(strict_types=1);

foreach ($argv as $i => $path) {
    if ($i === 0) {
        continue;
    }
    if (!is_file($path)) {
        echo "$path missing\n";
        continue;
    }
    $s = getimagesize($path);
    echo basename($path) . ': ' . $s[0] . 'x' . $s[1] . "\n";
}
