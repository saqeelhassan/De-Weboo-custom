<?php

declare(strict_types=1);

$source = $argv[1] ?? '';
$dest = $argv[2] ?? '';
$matchRef = $argv[3] ?? '';

if ($source === '' || $dest === '' || !is_file($source)) {
    fwrite(STDERR, "Usage: php resize-gallery-1.php <source> <dest> [match-ref-image]\n");
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

$targetW = 731;
$targetH = 465;

if ($matchRef !== '' && is_file($matchRef)) {
    $ref = getimagesize($matchRef);
    if ($ref !== false) {
        [$refW, $refH] = $ref;
        $targetH = $refH;
        $targetW = (int) round($refW * 5 / 7);
    }
}

$scale = max($targetW / $srcW, $targetH / $srcH);
$scaledW = (int) ceil($srcW * $scale);
$scaledH = (int) ceil($srcH * $scale);
$srcX = (int) max(0, floor(($scaledW - $targetW) / 2));
$srcY = (int) max(0, floor(($scaledH - $targetH) / 2));

$scaled = imagecreatetruecolor($scaledW, $scaledH);
imagecopyresampled($scaled, $src, 0, 0, 0, 0, $scaledW, $scaledH, $srcW, $srcH);

$out = imagecreatetruecolor($targetW, $targetH);
imagealphablending($out, false);
imagesavealpha($out, true);
$transparent = imagecolorallocatealpha($out, 0, 0, 0, 127);
imagefilledrectangle($out, 0, 0, $targetW, $targetH, $transparent);
imagecopy($out, $scaled, 0, 0, $srcX, $srcY, $targetW, $targetH);

imagepng($out, $dest, 6);

imagedestroy($src);
imagedestroy($scaled);
imagedestroy($out);

echo "Saved {$targetW}x{$targetH} -> {$dest}\n";
