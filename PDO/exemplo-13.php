<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$teste = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");
// fique esperto na linha de comando, o select tem "*" para a palavra "tudo", OU SEJA, "select * from" significa "mostre tudo de" ja no DELETE NÃO TEM O "*" é direito msm "DELETE FROM..." da forma que ta ai.

// se vc quiser deletar tudo... vai pelo query msm, mas se n, tem que usar o prepare pra passar o parametro do WHERE e etc...


$aa = 150;

$teste->bindParam(":ID", $aa);

$teste->execute();

echo "tudo blz";

?>