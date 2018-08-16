<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$teste = $conn->prepare("INSERT INTO tb_usuarios (deslogin, desenha) VALUES (:LOGIN, :SENHA)");

$aa = "Pedro Alvares";
$bb = "30302929430";

$teste->bindParam(":LOGIN", $aa);
$teste->bindParam(":SENHA", $bb);

$teste->execute();

echo "TUDO CERTO!!!";

?>