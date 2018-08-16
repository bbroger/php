<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$tt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, desenha) VALUES (:LOGIN, :PASSWORD)");
// na classe mysqli(que RARAMENTE será usada, agente colocava "?" no lugar do parametro e dps passava ele pelo bind e etc, agr vc coloca o ":" e um nome generico pra viriavel, ele n importa, ai dps faz o bind la em baixo. EM PDO ( que é o q agente MAIS VAI USAR) o bind é diferente do q é usado no mysqli, ele é assim : bindParam("variavel generica que vc colocou no comando", variavel (verdadeira) que guarda o valor que vai no comando); ex: $tt->bindParam(":LOGIN", $login);

$login = "José";
$password = "9988767";

$tt->bindParam(":LOGIN", $login);
$tt->bindParam(":PASSWORD", $pasword);
//preste atenção nisso, no primeiro parametro qnd vc passa a variavel generica e tal é DA MESMA forma que ta la, com ":" e tudo.
//perceba que vc n precisa identificar o tipo como fazia em mysqli

$tt->execute();

echo "INSERIDO COM SUCESSO";

// pra printar a tabela com o select... vc tem que fazer aquele jogo entre metodos, objetos e novas variavel, ja pra inserir é mais simples, compare os codigos de select com esse daqui dps pra ver.


?>