<?php

// criando thumbnail atráves de uma imagem ja existente \/

header("Content-type: image/jpeg");

$img = "wallpaper.jpg";

$new_w = 256;
$new_h = 256;

list($old_w, $old_h) = getimagesize($img);
//var_dump(getimagesize($img));
// o getimagesize($filename) me retorna diversas informações sobre o arquivo em um array, a primeira e a segunda informação dessa array são respectivamente a altura e a largura, quando eu crio a função list e passo como parametro 2 variaveis aleatorias, é como se eu disesse o seguinte, jogue cada posição desse array (de acordo com a quantidade de variaveis no list) para cada variavel respectivamente, ou seja, a altura é jogada pra primeira variavel... a largura é jogada pra segunda, ai ele para, caso eu tivesse uma terceira, a terceira posição do array seria jogada pra essa variavel e assim vai...

$new_image = imagecreatetruecolor($new_w, $new_h);
//aqui eu estou criando uma imagem nova, estou carregando nela a função imagecreatetruecolor que carrega pra mim mais de 16 mil cores nessa imagem, ou seja, ela tem todas essas cores disponiveis pra ela.
$old_image = imagecreatefromjpeg($img);

// agora q eu tenho a minha imagem nova ( que não tem nada só a largura e altura) e tenho a velha imagem ( a wallpapper ), agora eu vou juntar as duas e criar uma thumbnail com a imagem reduzida, pra isso eu utilizo a função imagecopyresampled \/

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_w, $new_h, $old_w, $old_h);
//imagecopyresampled(Imagem nova, imagem antiga, eixo x da imagem nova, eixo y da imagem nova, eixo x da imagem antiga, eixo y da imagem antiga, largua da imagem nova, altura da imagem nova, largura da imagem antiga, altura da imagem antiga)
// essa função copia uma imagem REDIMENSIONANDO ela.

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);




?>