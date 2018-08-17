<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$teste = $conn->prepare("UPDATE tb_usuarios SET idusuario = :ID1 WHERE idusuario = :ID2");

$aa = "150";
$bb = "1";

$teste->bindParam(":ID1", $aa);
$teste->bindParam(":ID2", $bb);

$teste->execute();

echo "MUDANÇA EFETUADO COM SUCESSO";

?>