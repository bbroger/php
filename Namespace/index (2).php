<?php

require_once("config.php");

use Cliente\Cadastro;
// aqui eu to usando o namespace\nomedoarquivo, atráves do comando "use", ou seja, ele vai buscar através desse caminho o meu arquivo la e vai passar a fazer tudo a partir dela.

$cad = new Cadastro();

$cad->setNome("Vinicius Nery");
$cad->setEmail("Viniciusneryb13@hotmail.com");
$cad->setSenha("12345678");



$cad->registrarVenda();
echo $cad;


// ele requere o "config.php", la dentro eu tenho um auto_load, ai quando eu crio um objeto de cadastro ele requere "cadastro.php", e dentro de cadastro eu tenho uma função __toString que passa tudo q eu printo pra string, "se n tivesse ele la, n daria, pq n consigo printar um objeto", e la ele esta transformando um array em um json, e retornando pra mim.

// quando vc printa um objeto de uma classe que tem __toString, ele vai printar como string todo o retorno que tiver nessa função.

//obs: é muito facil se perder nisso dai, tudo tem que ta especificado em um documento... pra vc saber como funciona.

?>