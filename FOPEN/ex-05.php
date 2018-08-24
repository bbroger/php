<?php

require_once("config.php");

$file = fopen("Jesi.csv", "a+");

$obj = new Sql();

$tabel = $obj->select("SELECT * FROM tb_usuarios");
$data= array();
foreach ($tabel[0] as $key => $value) {
	array_push($data, $key);
}
fwrite($file, implode(",", $data) . "\r\n");

foreach ($tabel as $row) {
	$data2 = array();
	foreach ($row as $key => $value) {
		array_push($data2, $value);
	}
	fwrite($file, implode(",", $data2) . "\r\n");
}

fclose($file);

?>