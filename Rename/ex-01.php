<?php

$file = "dir1";
$file2 = "dir2";

if(!is_dir($file)) {
	mkdir("$file");
}

if(!is_dir($file2)) {
	mkdir("$file2");
}

$kk = "itka.txt";

$pp = fopen($file . DIRECTORY_SEPARATOR . $kk, "w+");
// aqui eu criei um arquivo. obs: geralmente só se coloca a variavel ou o nome do arquivo,  mas aqui eu coloquei o caminho dele... com o nome

fwrite($pp, date("d/m/Y H:i:s"));

fclose($pp);

// pra vc move-lo... ou manipula-lo... vc tem que fechar 

$maluco = "xD.txt";

rename($file . DIRECTORY_SEPARATOR . $kk, $file2 . DIRECTORY_SEPARATOR . $maluco);
//rename funciona aassim, alem de renomear eu posso mover o arquivo tbm, rename(oldname, newname), da forma que ta ai acima, ou eu posso move-lo sem mudar o nome, mantendo tudo.

?>