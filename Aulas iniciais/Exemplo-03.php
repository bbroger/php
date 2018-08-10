<?php

$nome = "Glaucio";

function teste(){

	global $nome;
	echo $nome;
	echo "<br>";
}

if (isset($nome)){

	echo "FUDEU";

}

function teste2(){

$nome = "Pedro";
echo $nome . " agora no teste2";

}

teste();

teste2();

?>