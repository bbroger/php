<?php

$manipula = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$kaka = $manipula->query("SELECT * FROM tb_usuarios");
$jo = $kaka->fetchall(PDO::FETCH_ASSOC);


//fetchall é um recurso apenas do PDO (o que na minha opnião torna ele melhor).
// o fetchall n precisa de um while pra ir "fatiando" separando todas as linha bonitinho e tal... ele ja faz isso internamente, muito mais util.

// qual a diferença entre o fetchall e o fetch_array, bom, usando a classe mysqli pra entrar no banco e fazendo aquele while la pra percorrer ele, agente usa o fetch_array pq qnd ele n conseguir percorrer as linhas, pq eles acabaram, ele vai sair do while pq vai retornar um valor "false", ou seja, é usado no mysqli pq qnd acaba ele retorna esse valor e sai do laço "não consegue mais fazer". o fetch_array precisa de um while ou uma estrutura de repetição pra "fatiar" a tabela em linha e tal, ja o fetchall n, ele faz isso internamente e dps é só jogar o resultado em uma variavel e usar da forma que quiser, assim como ta no exemplo.



$dados = array();

foreach ($jo as $linha) {

	array_push($dados, $linha);
	foreach ($linha as $coluna => $value) {
		
		echo "<b>". $coluna . ": <b>" . $value . "<br>";
	}
	echo "===========================<br>";
}

echo json_encode($dados);

?>