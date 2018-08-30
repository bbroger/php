<?php

function tt ($name){

if (!$name){

	throw new Exception("Deu merda", 22);
	
}

echo $name . "<br>";

}

try{

tt("");

}catch(Exception $e){

	echo json_encode(array(
		"Mensagem"=>$e->getMessage(),
		"Linha"=>$e->getLine()
		));
}

?>