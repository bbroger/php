<?php

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$contents = file_get_contents($link);
// com isso é eu pego o conteudo binario da imagem do meu link

$parse = parse_url($link);


// aqui eu consigo o conteudo da imagem do link, basename, path e etc... \/
// use o var_dump($parse) pra ver todas as chaves e valores que esse array retorna e vc vai entender ele.

$basename = basename($parse["path"]);
// aqui eu pego o basename do meu arquivo, ou seja, o nome dele
$tt = fopen($basename, "w+");
// ai agora que eu ja tenho o nome do arquivo através do basename... eu uso ele pra criar o arquivo no meu servidor atraves do fopen (o nome do arquivo ta em basename), e com o arquivo criado eu passo o conteudo em binario. obs: pra nós o conteudo em binario n é legivel, mas quando vc cria o arquivo com o basename... e a extensão certinha e joga o conteudo binario nele através do fwrite, ele reconhece e fica como era pra ser.

fwrite($tt, $contents);

fclose($tt);

?>
<img src="?=$basename?">