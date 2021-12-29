<?php
session_start();
header('Content-Type:image/png');
$image = imagecreatetruecolor(80, 30);
$back = imagecolorallocate($image, 24, 0, 0);
imagefill($image, 0, 0, $back);

$color = imagecolorallocate($image, 255, 21, 21);
$a = "";
for ($k = 0; $k < 4; $k++) {
    $a .= rand(1, 9);

}
for ($i = 0; $i < 200; $i++) {
    $port = imagecolorallocate($image, rand(50, 200), rand(50, 200), rand(50, 200));

    imagesetpixel($image, rand(1, 79), rand(1, 29), $port);
}
for ($p = 0; $p < 10; $p++) {
    $op = imagecolorallocate($image, rand(50, 200), rand(50, 200), rand(50, 200));
    $od = imagecolorallocate($image, rand(50, 200), rand(50, 200), rand(50, 200));

    imageline($image, rand(1, 79), rand(1, 29), rand(1, 79), rand(1, 29), $od);
    imagefill($image, rand(1, 79), rand(1, 29), $op);
}
$_SESSION['yzm'] = $a;
imagestring($image, 5, 18, 6, $a, $color);
imagepng($image);
imagedestroy($image);
