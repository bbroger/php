<?php 
$filename = "logo.png";

$base64 = base64_encode(file_get_contents($filename));

// "file_get_contents" vai ler o arquivo e me retonar um valor em binario, ja o "base$64_encode" vai transformar esse binario em uma linha legivel pra mim.
 
$fileInfo = new finfo(FILEINFO_MIME_TYPE);

// aqui eu acho uuma função nativa do php "finfo" com o construtor "FILEINFO_MIME_TYPE", isso vai me tornar o TIPO do dado.
$mimetype = $fileInfo->file($filename);
// isso vai retonar o tipo do dado "mimetype", não da pra usar o gettype aqui, pq ele é pra outras aplicações... tipo de um valor é string... um campo e etc... aqui vc ta pegando o TIPO do arquivo, se é um word... excel... pdf... e etc
 
//aqui eu acho o metodo $file da classe finfo e passo por parametro a variavel com o nome do meu arquivo

$base64encode = "data:".$mimetype.";base64,".$base64;
// jogo tudo isso pra uma variavel pra poder mostrar ela na tela. obs: tem q ser com essa sintaxe pra funcionar
//ai la em baixo eu ancoro isso a uma link e tal, e dps mostro a imagem. obs: o "?=?" era pra ser "?php?", mas pode ser escrito dessa outra forma ai
?>
<a href="<?=$base64encode?>" target="_blank">Link para a imagem</a>
<img src="<?=$base64encode?>">