<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$teste = $conn->prepare("INSERT INTO tb_usuarios (deslogin, desenha) VALUES (:var1, :var2)");

$aa = "Antonio Baitola";
$bb = "9988676";

$teste->bindParam(":var1", $aa);
$teste->bindParam(":var2", $bb);

$teste->execute();

echo "Foi concluido com sucesso";

?>