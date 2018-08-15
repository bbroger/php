<?php

$obj = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$man = $obj->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
$teste = $man->fetchall(PDO::FETCH_ASSOC);

$data = array();
foreach ($teste as $linha) {

	array_push($data, $linha);

	foreach ($linha as $coluna => $value) {
	
		echo "<b>". $coluna . ": <b>" . $value . "<br>";
	}

	echo "================================<br>";
}

echo json_encode($data);

?>