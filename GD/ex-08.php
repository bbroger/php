<?php  

$image = imagecreatefromjpeg("Images/certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 300, 150, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Bevan'.DIRECTORY_SEPARATOR.'Bevan-Regular.ttf', "CERTIFICADO");

imagettftext($image, 32, 0, 320, 300, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Playball'.DIRECTORY_SEPARATOR.'Playball-Regular.ttf', "Divanei Aparecido");

imagettftext($image, 18, 0, 320, 350, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Playball'.DIRECTORY_SEPARATOR.'Playball-Regular.ttf', utf8_decode("Concluíu o curso de PHP 7"));

// o imagetttext serve como o imagestring, só que com ele eu posso adicionar uma fonte previamente baixada na minha pasta, ele tem essa nomenclatura \/
//imagettftext(manipulador, tamanho da fonte, angulo em que ele vai ser colocada, posição eixo x, posição eixo y, cor, caminho da fonte (se lembre a instrução abaixo), texto.)
// quando for utilizar o imagettftext, no caminho da fonte vc tem que colocar __DIR__ . DIRECTORY_SEPARATOR antes do caminho, se n, n funciona.
//imagettftext($image, 32, 0, 300, 350, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Gamja_Flower'.DIRECTORY_SEPARATOR.'GamjaFlower-Regular.ttf', "Divanei Aparecido");

imagestring($image, 3, 320, 400, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

header("Content-type: image".DIRECTORY_SEPARATOR."jpeg");

imagejpeg($image);

imagedestroy($image)
?>