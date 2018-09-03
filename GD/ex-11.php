<?php

$img = imagecreatefromjpeg("Images". DIRECTORY_SEPARATOR. "certificado.jpg");

$black = imagecolorallocate($img, 0, 0, 0);

imagettftext($img, 45, 0, 250, 240, $black, __DIR__ . DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($img, 45, 0, 250, 330, $black, __DIR__ . DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf", "Marcos Nery");
imagettftext($img, 45, 0, 250, 400, $black, __DIR__ . DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf", "CURSO PHP");

imagestring($img, 5, 250, 500, "Concluido em: ". date("d/m/Y"), $black);
header("Content-type:". "images". DIRECTORY_SEPARATOR . "jpeg");

imagejpeg($img);
imagedestroy($img);

?>