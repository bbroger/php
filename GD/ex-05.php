<?php

$img = imagecreatefromjpeg("Images/certificado.jpg");
// aqui eu estou gerando uma imagem a PARTIR de uma imagem que ja existe.

$black = imagecolorallocate($img, 0, 0, 0);

imagestring($img, 5, 120, 220, "Icra", $black);
imagestring($img, 5, 120, 320, "Curso PHP", $black);
imagestring($img, 5, 120, 370, "Data:" . date("d/m/Y"), $black);

header("Content-type: image/jpeg");

imagejpeg($img, "Images/teste". date("d-m-Y").".jpg");
//OBS: não sei o q q ocorre aqui, mas se vc tentar colocar a função date no nome do arquivo com "/" da erro, vc tem que colocar com "-".
imagedestroy($img);

?>