<?php

function manipulaErro($code, $mensagem, $file, $linha){

	echo json_encode(array(
	"Codigo"=>$code,
	"Mensagem"=>$mensagem,
	"Linha"=>$linha,
	"Arquivo"=>$file
		));
}

set_error_handler("manipulaErro");

echo 400 / 0; 

?>