<?php

$my = scandir("Tela");

$data = array();
foreach ($my as $key) {
	
	if (!in_array($key, array (".", ".."))){

		$loc = "Tela". DIRECTORY_SEPARATOR . $key;

		$kaka = pathinfo($loc);

		$kaka["Tamanho"] = filesize($loc);
		$kaka["Grupo"] = filegroup($loc);
		$kaka["Tamanho"] = date("d/m/Y H:i:s", filemtime($loc));
		$kaka["url"] = "http://localhost:83/variaveis/DIR/" . str_replace("\\", "/", $loc);
		array_push($data, $kaka);
	}
}

echo json_encode($data);
?>