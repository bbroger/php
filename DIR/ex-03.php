<?php

$direct = "Fecomercio";

if(!is_dir($direct)){

	mkdir($direct);
}

$kiko = scandir($direct);

$data = array();
foreach ($kiko as $img) {
	
	if (!in_array($img, array (".", ".."))){


		$local = "Fecomercio" . DIRECTORY_SEPARATOR . $img;
		$informa = pathinfo($local);

		
		$informa["size"] = filesize($local);
		$informa["modified"] = date("d/m/Y H:i:s", filemtime($local));
		$informa["url"] = "http://localhost:83/variaveis/DIR/". str_replace("\\", "/", $local);

		array_push($data, $informa);
	}

}

echo json_encode($data);
?>