<?php  

$image = imagecreatefromjpeg("images/certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 300, 150, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Bevan'.DIRECTORY_SEPARATOR.'Bevan-Regular.ttf', "CERTIFICADO");

imagettftext($image, 32, 0, 320, 300, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Playball'.DIRECTORY_SEPARATOR.'Playball-Regular.ttf', "Divanei Aparecido");

imagettftext($image, 18, 0, 320, 350, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Playball'.DIRECTORY_SEPARATOR.'Playball-Regular.ttf', utf8_decode("Concluíu o curso de PHP 7"));

//imagettftext($image, 32, 0, 300, 350, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Gamja_Flower'.DIRECTORY_SEPARATOR.'GamjaFlower-Regular.ttf', "Divanei Aparecido");

imagestring($image, 3, 320, 400, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);
?>