<?php

header("Content-type: image/png");
// aqui eu estou declarando o tipo de resposta deste arquivo, ou seja, uma imagem do tipo png
// cuidado com o content, é bom vc só declara-lo dps q souber q tudo abaixo está certo.
$img = imagecreate(256, 256);
// aqui eu crio a imagem e digo qual é a largura e altura dela

$black = imagecolorallocate($img, 0, 0, 0);
// aqui estou criando uma paleta de cores pra utilizar, no primeiro parametro eu apsso o manipulador da minha image no caso $mig e dps quando de red, quando de green e quanto de azul "imagecolorallocate(image, red, green, blue)"
// obs: a primeira cor que vc cria é jogada como cor de fundo  
$red = imagecolorallocate($img, 255, 0, 0);

imagestring($img, 5, 60, 120, "Curso PHP", $red);
//imagestring(image, font, x, y, string, color)
//imagestring(manipulador, tamanho da fonte, posição no eixo x, posição no eixo y, texto, cor)
imagepng($img);
// aqui eu estou dizendo qual o formato DO ARQUIVO, podia ser um imagejpeg... ou outro, mas como no meu header eu colocar image/png então vai ser png, tbm posso colocar imagepng($img, nome do arquivo... data... , qualidade do arquivo)
//imagepng($img, nome do arquivo, 10);
// OBS: se vc colocar o nome do arquivo como segundo parametro, ele não vai mais mostrar na tela do navegador, agr ele vai gerar um arquivo com o nome que vc passou e colocar na pasta onde vc escolher.
imagedestroy($img);
// quando acabar tudo vc tem que destruir a variavel manipuladora, se n ela fica pendurada no php.
?>