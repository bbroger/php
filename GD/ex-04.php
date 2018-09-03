<?php

header("Content-type: image/png");

$img = imagecreate(255, 255);

$red = imagecolorallocate($img, 255, 0, 0); 
$black = imagecolorallocate($img, 0, 0, 0);

imagestring($img, 5, 100, 120, "PHP", $black);

imagepng($img);

imagedestroy($img);

?>