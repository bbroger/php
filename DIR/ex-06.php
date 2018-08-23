<?php

$arquivos = scandir("Arq");

$data = array();
foreach ($arquivos as $img) {

	if (!in_array($img, array (".", ".."))) {

		$local = "Arq" . DIRECTORY_SEPARATOR . $img;
		$informa = pathinfo($local);

		$informa["size"] = filesize($local);
		$informa["modified"] = date("d/m/Y H:i:s", filemtime($local));
		$informa["Permissions"] = fileperms($local);
		$informa["url"] = "http://localhost:83/variaveis/DIR/". str_replace("\\", "/", $local);
		array_push($data, $informa);
	}
}

echo json_encode($data);

?>