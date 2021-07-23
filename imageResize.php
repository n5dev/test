<?php
$im = new imagick($_SERVER['DOCUMENT_ROOT']."/image.png");
$w = 200;
$h = 200;

$im->resizeImage($w, $h, Imagick::FILTER_LANCZOS, 1);
$im->cropImage($w, $h / 2, 0, 50);
          
if ($im->writeImage($_SERVER['DOCUMENT_ROOT']."/200x100_image.png")) {
    echo '<img src="200x100_image.png" width="200" height="100" alt="Изображение">';
}

$im->clear();
$im->destroy();
