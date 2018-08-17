<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$teste = $conn->query("SELECT * FROM tb_usuarios");

$fatiador = $teste->fetchall(PDO::FETCH_ASSOC);

$data = array();

foreach ($fatiador as $linha) {

	array_push($data, $linha);
	foreach ($linha as $coluna => $value) {

		echo "<b>" . $coluna . ": <b>" . $value . "<br>";
		
	}

	echo "=======================================================<br>";
}

echo json_encode($data);

?>