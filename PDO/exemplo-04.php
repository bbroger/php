<?php

$objeto = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
// pra trabalhar com SQLSERVER só muda a linha acima ai, tem na aula "conecatando php7 ao sql server", no pc aqui deu merda e n rodou, mas é bem facil, msm coisa.

$kilua = $objeto->query("SELECT * FROM tb_usuarios");
$fatiador = $kilua->fetchall(PDO::FETCH_ASSOC);

foreach ($fatiador as $linha) {
	foreach ($linha as $coluna => $value) {
		
		echo "<b>". $coluna .": <b>" . $value . "<br>";
	}
	echo "===============================<br>";
}





?>