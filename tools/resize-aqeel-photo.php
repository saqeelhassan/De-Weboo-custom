<?php

declare(strict_types=1);

$src = $argv[1] ?? __DIR__ . '/../assets/img/services/techgon-author-source.png';
$teamDir = __DIR__ . '/../assets/img/team';
$svcDir = __DIR__ . '/../assets/img/services';

if (!is_file($src)) {
    fwrite(STDERR, "Source not found: {$src}\n");
    exit(1);
}

$img = @imagecreatefrompng($src);
if ($img === false) {
    $img = @imagecreatefromjpeg($src);
}
if ($img === false) {
    $img = @imagecreatefromstring((string) file_get_contents($src));
}
if ($img === false) {
    fwrite(STDERR, "Failed to load source image.\n");
    exit(1);
}

function save_square_jpg($img, string $dest, int $size): void
{
    $sw = imagesx($img);
    $sh = imagesy($img);
    $crop = min($sw, $sh);
    $sx = (int) (($sw - $crop) / 2);
    $sy = (int) (($sh - $crop) / 2);
    $out = imagecreatetruecolor($size, $size);
    imagecopyresampled($out, $img, 0, 0, $sx, $sy, $size, $size, $crop, $crop);
    imagejpeg($out, $dest, 92);
    imagedestroy($out);
}

function save_portrait_jpg($img, string $dest, int $tw, int $th): void
{
    $sw = imagesx($img);
    $sh = imagesy($img);
    $targetRatio = $tw / $th;
    $srcRatio = $sw / $sh;

    if ($srcRatio > $targetRatio) {
        $cw = (int) ($sh * $targetRatio);
        $ch = $sh;
        $sx = (int) (($sw - $cw) / 2);
        $sy = 0;
    } else {
        $cw = $sw;
        $ch = (int) ($sw / $targetRatio);
        $sx = 0;
        $sy = (int) (($sh - $ch) / 2);
    }

    $out = imagecreatetruecolor($tw, $th);
    imagecopyresampled($out, $img, 0, 0, $sx, $sy, $tw, $th, $cw, $ch);
    imagejpeg($out, $dest, 90);
    imagedestroy($out);
}

if (!is_dir($teamDir)) {
    mkdir($teamDir, 0777, true);
}

copy($src, $svcDir . '/techgon-author-source.png');
save_portrait_jpg($img, $teamDir . '/aqeel.jpg', 600, 750);
save_portrait_jpg($img, $teamDir . '/team-details-aqeel.jpg', 800, 900);
save_square_jpg($img, $svcDir . '/techgon-author.jpg', 50);

imagedestroy($img);

echo "Created team/aqeel.jpg, team/team-details-aqeel.jpg, services/techgon-author.jpg\n";
