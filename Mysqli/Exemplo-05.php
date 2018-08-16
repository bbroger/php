<?php

$nunes = new mysqli("localhost", "root", "", "dbphp7");

if ($nunes->connect_error){

	$lucas = $nunes->connect_error;
	echo $lucas;
}

$acesso = $nunes->prepare("INSERT INTO tb_usuarios (deslogin, desenha) VALUES (?, ?)");

$acesso->bind_param("ss", $dd, $cc);

$dd = "Antônio";
$cc = "9999999";
//obs: com caracteres estranhos como acento e etc... buga no banco de dados.

$acesso->execute();



?>