<?php

$kiki = scandir("Tuta");

$data = array();
foreach ($kiki as $key) {
	
	if (!in_array($key, array (".", ".."))){

		$local = "Tuta". DIRECTORY_SEPARATOR . $key;

		$info = pathinfo($local);

		$info["size"] = filesize($local);
		$info["Data de Modificação"] = date("d/m/Y H:i:s", filemtime($local));
		$info["Permissões"] = fileperms($local);
		$info["Grupo"] = filegroup($local);
		$info["Tipo"] = filetype($local);	
		$info["url"] = "http://localhost:83/variaveis/DIR/" . str_replace("\\", "/", $local);
			
			array_push($data, $info);
	}
}

echo json_encode($data);

?>