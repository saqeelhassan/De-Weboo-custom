<?php

declare(strict_types=1);

$source = $argv[1] ?? '';
$dest = $argv[2] ?? '';
$targetW = (int) ($argv[3] ?? 1024);
$targetH = (int) ($argv[4] ?? 465);

if ($source === '' || $dest === '' || !is_file($source)) {
    fwrite(STDERR, "Usage: php resize-gallery-image.php <source> <dest> [width] [height]\n");
    exit(1);
}

$srcInfo = getimagesize($source);
if ($srcInfo === false) {
    fwrite(STDERR, "Invalid source image.\n");
    exit(1);
}

[$srcW, $srcH] = $srcInfo;
$mime = $srcInfo['mime'] ?? '';

$src = match ($mime) {
    'image/png' => imagecreatefrompng($source),
    'image/jpeg' => imagecreatefromjpeg($source),
    'image/webp' => imagecreatefromwebp($source),
    default => null,
};

if ($src === false || $src === null) {
    fwrite(STDERR, "Unsupported image type: {$mime}\n");
    exit(1);
}

$scale = max($targetW / $srcW, $targetH / $srcH);
$scaledW = (int) ceil($srcW * $scale);
$scaledH = (int) ceil($srcH * $scale);
$srcX = (int) max(0, floor(($scaledW - $targetW) / 2));
$srcY = (int) max(0, floor(($scaledH - $targetH) / 2));

$scaled = imagecreatetruecolor($scaledW, $scaledH);
imagecopyresampled($scaled, $src, 0, 0, 0, 0, $scaledW, $scaledH, $srcW, $srcH);

$out = imagecreatetruecolor($targetW, $targetH);
imagecopy($out, $scaled, 0, 0, $srcX, $srcY, $targetW, $targetH);

$ext = strtolower(pathinfo($dest, PATHINFO_EXTENSION));
if ($ext === 'png') {
    imagepng($out, $dest, 6);
} else {
    imagejpeg($out, $dest, 88);
}

imagedestroy($src);
imagedestroy($scaled);
imagedestroy($out);

echo "Saved {$targetW}x{$targetH} -> {$dest}\n";
