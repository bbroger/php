<?php

$img = imagecreatefromjpeg("Images/certificado.jpg");

$red = imagecolorallocate($img, 255, 0, 0);

imagestring($img, 5, 400, 500, "teste", $red);

header("Content-type: image/jpeg");

imagejpeg($img, "Images/certificado". date("d-m-Y") . ".jpg");

imagedestroy($img);

?>