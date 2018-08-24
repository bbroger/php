<?php

//$file = fopen("log.txt", "w+");
//obs: o "w" apaga oq tinha no arquivo e insere oq vc quiser colocar, ja o "a" mantem o conteudo q tava la e escreve junto.
$file = fopen("log.txt", "a+");
// "fopen" função pra manipular arquivo, primeiro vc passa o caminho do arquivo, como ta nessa pasta msm eu só preciso colocar o nome dele, já no segundo parametro vc passa o a informação do q vai fazer nele, nesse caso ai usei o "w" que significa "escrever", e como o arquivo n existia coloquei o "+" dps dele pra o codigo cria-lo. obs- sempre que tiver o "+" é pra se o codigo n achar o arquivo no local indicado, ele crie o mesmo.

fwrite($file, date("d/m/Y H:i:s") . "\r\n");
// como é arquivo de texto, vc n pode usar um "<br>" pra quebrar linha, tem q ser "/r" pra retornar pra o inicio da linha e "/n" pra criar uma nova linha.
//fwrite é pra escrever no arquivo, primeiro vc passa a variavel "manipulador" onde vc alocou ele , dps vc passa o q quer escrever, seja uma função date... ou outra etc

fclose($file);

echo "BORAAAAAAAAAAAAAAAA";

?>