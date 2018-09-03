<?php

$img = imagecreatefromjpeg("Images/certificado.jpg");

$black = imagecolorallocate($img, 0, 0, 0);

imagestring($img, 5, 410, 250, "Antonio baitola", $black);
imagestring($img, 5, 420, 290, "Formado", $black);
imagestring($img, 5, 400, 330, "Data:" . date("d/m/Y"), $black);

header("Content-type: image/jpeg");

//imagejpeg($img, "Images/Certificado " . date("d-m-Y"). ".jpg");
imagejpeg($img);

imagedestroy($img);

?>