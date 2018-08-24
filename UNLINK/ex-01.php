<?php

$tt = "Images";

if(!is_dir($tt)){

	mkdir("Images");
}
else{

	echo "O diretorio já existe";
}


//unlink("Images/eclipse.jpg"); // << cuidado ao deletar algo.

//OBS: "unlink" é SÓ PRA DELETAR ARQUIVO, se tentar deletar DIRETORIO n vai, pra deletar diretorio é rmdir; 

$jaja = scandir("Images");

foreach ($jaja as $arquivo) {

	if (!in_array($arquivo, array (".", ".."))){

	unlink("Images/" . $arquivo);

	echo "Arquivo: " . $arquivo . " Deletado<br>";

	//se lembre que as imagens não estão na mesma pasta que ta o arquivo com esse codigo, então vc tem q colocar o caminho delas apartir da pasta em q isso aqui ta. obs: se tiver na mesma pasta, basta colocar o nome.
	
	}
}

?>