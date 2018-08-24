<?php

require_once("config.php");

$tt = new Sql();

$users = $tt->select("SELECT * FROM tb_usuarios");

$headers = array();

foreach ($users[0] as $key => $value) {
	// aqui ele ta buscando no eu array a posição 0 dele, q tenha o nome das colunas,. obs: só usamos a key mas tem q colocar o value no foreach tbm, se n ele vai jogar o valor do value como se fosse key.
	array_push($headers, ucfirst($key));
}

//print_r($headers);

echo implode(",", $headers);

// o headers é semelhante ao split, ele vai pegar cada valor do array $header e separar com o separador que eu escolher no primeiro parametro, nesse caso escolhi ",".



?>