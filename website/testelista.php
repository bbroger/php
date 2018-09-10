<?php

$filename = "Base.csv";

if(file_exists($filename)){

	$file = fopen($filename, "r");
	// "r" é modo de leitura

	$headers = explode(",", fgets($file));

// o "explode" age EXATAMENTE como o SPLIT, ele vai procurar no csv todas as "," e qnd ele achar ele vai "explodir" e separar as posições do array através delas. o "fgets(manipulador do arquivo)" retorna uma linha do arquivo (a primeira no caso) e pula para a proxima. obs: ELE SÓ FAZ ISSO 1 VEZ, então vc tem que fazer uma estrutura de repetição pra ele continuar percorrendo o arquivo.

	//$data = array();

	while ($row = fgets($file)) {
		$rowData = array();
		// o fgets me retorna uma linha apenas, por isso a estrutura de repetição, pra ele continuar rodando, ele retorna uma linha e vai pra proxima. obs: ele só retorna a linha do jeito q ta la, por isso uso o explode pra separar essa linha e transforma-la em um array
		$rowData = explode(",", $row);
		// aqui eu to separando minha linha usando como delimitador a "," que ta dentro do arquivo, isso vai me retonar um array.
		print_r($rowData[2]); 
		echo "<br>";
		//aqui eu to jogando omeu array linha pra o meu array data, ai vai ficar um array de arrays.
	}

	fclose($file);
	// fechei meu arquivo pra n consumir memoria
}

//echo json_encode($data);


?>