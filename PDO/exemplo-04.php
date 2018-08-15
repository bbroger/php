<?php

$objeto = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$kilua = $objeto->query("SELECT * FROM tb_usuarios");
$fatiador = $kilua->fetchall(PDO::FETCH_ASSOC);

foreach ($fatiador as $linha) {
	foreach ($linha as $coluna => $value) {
		
		echo "<b>". $coluna .": <b>" . $value . "<br>";
	}
	echo "===============================<br>";
}





?>