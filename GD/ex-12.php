<?php

$img = imagecreatefromjpeg("Images". DIRECTORY_SEPARATOR . "certificado.jpg");

$black = imagecolorallocate($img, 0, 0, 0);

imagettftext($img, 45, 0, 250, 260, $black, __DIR__ . DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf" , "CERTIFICADO");
imagettftext($img, 45, 0, 290, 350, $black, __DIR__ . DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf" , "MARCOS NERY");
imagettftext($img, 45, 0, 310, 430, $black, __DIR__ . DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf" , "CURSO PHP 7");

imagestring($img, 5, 385, 500, utf8_decode("Concluído em: ") . date("d/m/Y"), $black);

header("Content-type: image" . DIRECTORY_SEPARATOR . "jpeg" );

imagejpeg($img);

imagedestroy($img);





?>