<?php

$conn = new PDO("mysql:dbname=dbphp7;host:localhost", "root", "");

$teste = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$aa = 9;

$teste->bindParam(":ID", $aa);

$teste->execute();

echo "tudo certin";

?>