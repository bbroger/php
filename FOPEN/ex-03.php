<?php

require_once("config.php");

$dd = new Sql();
$tabela = $dd->select("SELECT * FROM tb_usuarios");

$teste = array();
foreach ($tabela[0] as $key => $value) {
	array_push($teste, $key);
}

$file = fopen("teste.csv", "w+");

fwrite($file, implode("/", $teste) . "\r\n");


//lembre que no implode ele separa os elementos do meu ARRAY, ou seja, no segundo parametro vc passa o seu ARRAY que vc fez o push certinho e tal.


foreach ($tabela as $row) {

$tuta = array();
// primeiro ele cria uma variavel que recebe um array vazio
	
		// ai ele percorre cada linha do array
foreach ($row as $key => $value) {
		array_push($tuta, $value);
		// em cada linha ele vai pegar cada valor e jogar pro array $tuyta
}
fwrite($file, implode(",", $tuta) . "\r\n");
// dps q ele jogar tudo pro array tuta, ele vai passar pro arquivo através do fwrite q vc ja aprendeu.
//OBS MUITO IMPORTANTE: perceba que dps disso ele vai VOLTAR pra primeira linha do array (se ainda tiver linhas pra percorrer) e vai jogar DENOVO um array VAZIO pra $tuta, ou seja, TUDO QUE TAVA LA ANTES SUMIU, ai ele vai fazer o mesmo processo dnv... e vai jogar cada array pro arquivo atraves do fwrite.
}

fclose($file);
//aqui ele fecha normal
?>