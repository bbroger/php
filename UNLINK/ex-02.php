<?php

$iu = "Wen";

if(!is_dir($iu)){
	mkdir($iu);
}
else{
	echo "O diretorio já existe. <br>";
}

$my = scandir($iu);

foreach ($my as $key) {
	 if(!in_array($key, array(".", ".."))){
	 	unlink("Images/". $key);

	 	echo "Arquivo: " . $key . " Deletado com sucesso! <br>";
	 }
}


?>