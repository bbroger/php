<?php

$conn = new PDO("mysql:dbname=dbphp7;hosto=localhost", "root", "");

$conn->beginTransaction();
// perceba que pra iniciar a transação eu n preciso passar isso acima pra uma outra variavel e tal, é só chamar e acabou, e pra dar commit ou rollback é a mesma coisa

//

$teste = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$aa = 10;

//vc pode vincular a variavel ao parametro com o "bindParam..." como fizemos varias vezes anteriormente ou \/

// tem uma segunda forma de vincular a variavel com parametro, é essa ai, ao invés de passar o parametro ":Parametro" eu coloco uma ou mais "?" na linha do comando no mesmo lugar deles, dependendo do numero de parametros, ai dps, pra vincular vc passa no execute como parametro um array, da forma que ta abaixo, e passa as variaveis RESPECTIVAMENTE.

$teste->execute(array($aa));

//$conn->rollback();

$conn->commit();



echo "PARTIU FERUMBRAS";



?>