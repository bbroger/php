<?php

$conn = new PDO("mysql:dbname=dbphp7;hosto=localhost", "root", "");

$dude = $conn->prepare("INSERT INTO tb_usuarios (deslogin, desenha) VALUES (:teste1, :teste2)");
// a unica manipulação pra variavel que vc precisa fazer no insert é só essa primeira ai, pq dessa forma ele vai jogar o resultado do comando pra $dude e dps vc vai poder utilizalo pra outras coisas.

$login = "Geisa Psicopata";
$senha = "antoniobaitola";

$dude->bindParam(":teste1", $login);
$dude->bindParam(":teste2", $senha);

$dude->execute();

echo "Inserido com sucesso<br>";

echo "=================================<br>";

$printar = $conn->query("SELECT * FROM tb_usuarios");

$fatiar = $printar->fetchall(PDO::FETCH_ASSOC);
//LEMBRE QUE O FETCH_ASSOC é passado como variavel ESTATICA, dessa forma que ta ai acima, se colocar só o FETCH_ASSOC simplesmente não funciona.

$data = array();

foreach ($fatiar as $linha) {

	array_push($data, $linha);

	foreach ($linha as $coluna => $value) {

		echo "<br>". $coluna . ": <b>" . $value . "<br>";
		
	}

	echo "===================================<br>";

	echo json_encode($data);
}

//NOTE QUE vc provavelmente vai ter que separar os arquivos de insert... select... e etc, pq se n, ele vai executar tudo, ai fudeu. kkk

?>