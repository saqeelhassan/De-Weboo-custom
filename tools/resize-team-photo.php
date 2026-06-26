<?php

declare(strict_types=1);

$src = $argv[1] ?? '';
$slug = $argv[2] ?? 'member';

if ($src === '' || !is_file($src)) {
    fwrite(STDERR, "Usage: php resize-team-photo.php <source-image> <slug>\n");
    exit(1);
}

$teamDir = __DIR__ . '/../assets/img/team';

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

save_portrait_jpg($img, $teamDir . '/' . $slug . '.jpg', 600, 750);
imagedestroy($img);

echo "Created {$teamDir}/{$slug}.jpg\n";
