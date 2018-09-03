<?php

header("Content-type: image/jpeg");

$img = imagecreate(450, 450);

$black =imagecolorallocate($img, 0, 0, 0); 
$red = imagecolorallocate($img, 255, 0, 0);

imagestring($img, 5, 200, 200, "Maluco", $red);

imagejpeg($img);

imagedestroy($img);


?>