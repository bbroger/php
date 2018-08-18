<?php

$conn = new PDO ("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn->beginTransaction();

$teste = $conn->prepare("UPDATE tb_usuarios SET desenha = ? WHERE idusuario = ?");

$aa = "antonieta123";
$bb = 12;

$teste->execute(array($aa, $bb));

echo "Update feito com sucesso <br>";

//$conn->rollback();
$conn->commit();

//echo "Rollback feito com sucesso";
echo "Commit feito com sucesso";


?>
