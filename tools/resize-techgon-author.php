<?php

declare(strict_types=1);

$src = __DIR__ . '/../assets/img/services/techgon-author.jpeg';
$dest = __DIR__ . '/../assets/img/services/techgon-author.jpg';

if (!is_file($src)) {
    fwrite(STDERR, "Source not found: {$src}\n");
    exit(1);
}

$img = @imagecreatefromjpeg($src);
if ($img === false) {
    $img = @imagecreatefromstring((string) file_get_contents($src));
}

if ($img === false) {
    fwrite(STDERR, "Failed to load source image.\n");
    exit(1);
}

$width = imagesx($img);
$height = imagesy($img);
$crop = min($width, $height);
$srcX = (int) (($width - $crop) / 2);
$srcY = (int) (($height - $crop) / 2);

$out = imagecreatetruecolor(50, 50);
imagecopyresampled($out, $img, 0, 0, $srcX, $srcY, 50, 50, $crop, $crop);
imagejpeg($out, $dest, 90);

imagedestroy($img);
imagedestroy($out);

echo "Created {$dest} (50x50)\n";
