<?php

header("Content-type: image/png");

$img = imagecreate(255, 255);

$black = imagecolorallocate($img, 0, 0, 0);
$green = imagecolorallocate($img, 0, 255, 0);

imagestring($img, 5, 100, 120, "teste", $green);

imagepng($img);

imagedestroy($img);

?>