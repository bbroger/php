<?php

$conn = new PDO("mysql:dbname=dbphp7;host:localhost", "root", ""); 

$teste = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, desenha = :SENHA WHERE idusuario = :ID");

// perceba que na linha de comando mandava NUNCA vai ter um valor de fato, oq vai ter sempre que vc precisar passar um valor vc vai jogar o valor pra uma VARIAVEL e dps vincular o parametro e a variavel através do bindParm(":parametro passado na linha de comando", $var);



$aa = "Sergio";
$bb = "0000009291292929";
$cc = "1";

$teste->bindParam(":LOGIN", $aa);
$teste->bindParam(":SENHA", $bb);
$teste->bindParam(":ID", $cc);

$teste->execute();

echo "TUDO DBOAASSA";

?>