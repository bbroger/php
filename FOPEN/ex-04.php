<?php

require_once("config.php");
$file = fopen("Base.csv", "a+");

$oo = new Sql();
$layna = $oo->select("SELECT * FROM tb_usuarios");

$tt = array();

foreach ($layna[0] as $key => $value) {
	array_push($tt, $key);
}

fwrite($file, implode(",", $tt) . "\r\n");

foreach ($layna as $row) {
	$di = array();
	foreach ($row as $key => $value) {
		array_push($di, $value);
	}
	fwrite($file, implode(",", $di) . "\r\n");
}
fclose($file);

?>