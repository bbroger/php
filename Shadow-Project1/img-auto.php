<?php  

$image = imagecreatefromjpeg("Images/beta.jpeg");

$conta = "testebeta"; // conta que vai vir de forma automatica via post na hora do cadastro 
$senha = "testebeta"; // senha que vai vir de forma automatica via post na hora do cadastro 
$titleColor = imagecolorallocate($image, 255, 255, 0);
$gray = imagecolorallocate($image, 100, 100, 100);


imagettftext($image, 30, 0, 55, 195, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Black'.DIRECTORY_SEPARATOR.'Black-Jack1.ttf', utf8_decode("Conta Cadastrada :" ));

imagettftext($image, 20, 0, 55, 231, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Playball'.DIRECTORY_SEPARATOR.'Playball-Regular.ttf', utf8_decode("-> " . $conta));

imagettftext($image, 30, 0, 55, 282, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Black'.DIRECTORY_SEPARATOR.'Black-Jack1.ttf', utf8_decode("Senha Cadastrada :" ));

imagettftext($image, 20, 0, 55, 327, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'Playball'.DIRECTORY_SEPARATOR.'Playball-Regular.ttf', utf8_decode("-> " . $senha));

imagettftext($image, 62, 0, 80, 470, $titleColor, __DIR__ .DIRECTORY_SEPARATOR.'fonts'.DIRECTORY_SEPARATOR.'evafangoriasuperital'.DIRECTORY_SEPARATOR.'evafangoriasuperital.ttf', utf8_decode("SHADOW" ));



header("Content-type: image".DIRECTORY_SEPARATOR."jpeg");

imagejpeg($image, "img".date("Y-m-d").".jpg", 80);


imagedestroy($image)
?>