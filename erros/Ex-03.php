<?php

function resolva($code, $mensagem, $arq, $linha){

echo json_encode(array(
	"Codigo"=>$code,
	"Linha"=>$mensagem,
	"Arquivo"=>$arq,
	"Mensagem"=>$linha
			));

}


set_error_handler("resolva");

echo 30 / 0;

?>