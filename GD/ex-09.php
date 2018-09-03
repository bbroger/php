<?php

$img = imagecreatefromjpeg("Images/certificado.jpg");

$red = imagecolorallocate($img, 255, 0, 0);

imagettftext($img, 40, 0, 200, 350, $red, __DIR__. DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Playball". DIRECTORY_SEPARATOR . "Playball-Regular.ttf", utf8_decode("Concluído em: ") . date("d/ m/ Y"));

header("Content-type: image/jpeg");

imagejpeg($img);

imagedestroy($img);

?>