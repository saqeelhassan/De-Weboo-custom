<?php

declare(strict_types=1);

$path = __DIR__ . '/../assets/img/faq/faq-customer.png';

$img = @imagecreatefrompng($path);
if ($img === false) {
    fwrite(STDERR, "Failed to load {$path}\n");
    exit(1);
}

$sw = imagesx($img);
$sh = imagesy($img);
$tw = 60;
$th = 60;
$min = min($sw, $sh);
$sx = (int) (($sw - $min) / 2);
$sy = (int) (($sh - $min) / 2);

$out = imagecreatetruecolor($tw, $th);
imagealphablending($out, false);
imagesavealpha($out, true);
$transparent = imagecolorallocatealpha($out, 0, 0, 0, 127);
imagefilledrectangle($out, 0, 0, $tw, $th, $transparent);
imagealphablending($out, true);
imagecopyresampled($out, $img, 0, 0, $sx, $sy, $tw, $th, $min, $min);

imagepng($out, $path, 9);
imagedestroy($img);
imagedestroy($out);

echo "Resized faq-customer.png from {$sw}x{$sh} to 60x60\n";
