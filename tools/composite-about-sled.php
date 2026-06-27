<?php

declare(strict_types=1);

$mainSrc = $argv[1] ?? __DIR__ . '/../assets/about-sled-thumb.jpg';
$insetSrc = $argv[2] ?? __DIR__ . '/../assets/about-sled-caddsight-ele.jpg';
$dest = $argv[3] ?? __DIR__ . '/../assets/img/about/about2-thumb.png';

$targetW = 580;
$targetH = 650;
$insetW = 260;
$insetH = 195;
$insetX = $targetW - $insetW - 24;
$insetY = $targetH - $insetH - 24;
$radius = 18;

foreach ([$mainSrc, $insetSrc] as $path) {
    if (!is_file($path)) {
        fwrite(STDERR, "Missing source: {$path}\n");
        exit(1);
    }
}

function loadImage(string $path)
{
    $info = getimagesize($path);
    if ($info === false) {
        return null;
    }

    return match ($info['mime'] ?? '') {
        'image/jpeg' => imagecreatefromjpeg($path),
        'image/png' => imagecreatefrompng($path),
        'image/webp' => imagecreatefromwebp($path),
        default => null,
    };
}

function coverCrop($src, int $tw, int $th)
{
    $sw = imagesx($src);
    $sh = imagesy($src);
    $scale = max($tw / $sw, $th / $sh);
    $scaledW = (int) ceil($sw * $scale);
    $scaledH = (int) ceil($sh * $scale);
    $sx = (int) max(0, floor(($scaledW - $tw) / 2));
    $sy = (int) max(0, floor(($scaledH - $th) / 2));

    $scaled = imagecreatetruecolor($scaledW, $scaledH);
    imagecopyresampled($scaled, $src, 0, 0, 0, 0, $scaledW, $scaledH, $sw, $sh);

    $out = imagecreatetruecolor($tw, $th);
    imagecopy($out, $scaled, 0, 0, $sx, $sy, $tw, $th);
    imagedestroy($scaled);

    return $out;
}

function roundedMask(int $w, int $h, int $radius): GdImage
{
    $mask = imagecreatetruecolor($w, $h);
    imagealphablending($mask, false);
    imagesavealpha($mask, true);
    $transparent = imagecolorallocatealpha($mask, 0, 0, 0, 127);
    imagefill($mask, 0, 0, $transparent);
    $opaque = imagecolorallocatealpha($mask, 0, 0, 0, 0);
    imagefilledrectangle($mask, $radius, 0, $w - $radius - 1, $h - 1, $opaque);
    imagefilledrectangle($mask, 0, $radius, $w - 1, $h - $radius - 1, $opaque);
    imagefilledellipse($mask, $radius, $radius, $radius * 2, $radius * 2, $opaque);
    imagefilledellipse($mask, $w - $radius - 1, $radius, $radius * 2, $radius * 2, $opaque);
    imagefilledellipse($mask, $radius, $h - $radius - 1, $radius * 2, $radius * 2, $opaque);
    imagefilledellipse($mask, $w - $radius - 1, $h - $radius - 1, $radius * 2, $radius * 2, $opaque);

    return $mask;
}

$main = loadImage($mainSrc);
$inset = loadImage($insetSrc);
if ($main === null || $inset === null) {
    fwrite(STDERR, "Failed to load images.\n");
    exit(1);
}

$canvas = coverCrop($main, $targetW, $targetH);
$insetImg = coverCrop($inset, $insetW, $insetH);
$mask = roundedMask($insetW, $insetH, $radius);

for ($y = 0; $y < $insetH; $y++) {
    for ($x = 0; $x < $insetW; $x++) {
        $alpha = (imagecolorat($mask, $x, $y) >> 24) & 0x7F;
        if ($alpha === 127) {
            continue;
        }
        $color = imagecolorat($insetImg, $x, $y);
        imagesetpixel($canvas, $insetX + $x, $insetY + $y, $color);
    }
}

$dir = dirname($dest);
if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
}

imagepng($canvas, $dest, 6);

imagedestroy($main);
imagedestroy($inset);
imagedestroy($insetImg);
imagedestroy($mask);
imagedestroy($canvas);

echo "Saved {$targetW}x{$targetH} -> {$dest}\n";
