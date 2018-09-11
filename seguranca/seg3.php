<?php

$id = (isset($_GET["id"]))?$_GET["id"]:3;
//http://localhost:83/seguranca/seg3.php?id=4
// obs: se lembre da bendita "?" dps do .php no link

if (!is_numeric($id) || strlen($id) > 5) {
	exit("VAZA");
}

// Pelo que percebi "segurança" está mais voltada para boas praticas de programação do que pra conhecimentos especificos, aqui eu estou tratando o que vem da url pra o usuario não conseguir ver TUDO alterando o valor do id na url. obs: ele podia passar na url  "id=4 OR 1 = 1 --" aqui ele consegue fazer com que o navegador mostre todas as informações do banco, além disso tem a verificação de tamanho do que vem no id.
// ou seja, sem esse if acima, o codigo vai ter uma brecha enorme.

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";
// por uma boa pratica, msm o $id sendo numerico, coloque ele dentro das aspas, isso ajuda a melhorar a segurança (no seu SELECT)

$exec = mysqli_query($conn, $sql);
// executando os comandos nas variaveis

while ($resultado = mysqli_fetch_object($exec)) {
	// o msqli_fetch_object serve pra "fatiar" e colocar minhas informações na forma de objeto certinho na minha variavel.
	var_dump($resultado);
}

// em relação aos comandos em mysqli, ta tudo na pasta "mysqli" no git msm.

?>