<?php

function pegarClasse($nomeClasse){

	if(file_exists($nomeClasse . ".php") === true){
	require_once("$nomeClasse.php");

	//file_exists retorna de o arquivo existe ou não

}

}
//spl_autoload_register regitra uma função como autoload, é como se ele adicionasse essa função a ela.

spl_autoload_register("pegarClasse");
// vc pode adicionar o autoload a função essa forma ai acima, mas pra que serve isso se eu posso fazer varios autoloads de forma normal? dessa forma fica mais organizado e vc só precisa usar o comando acima quantas vezes quiser com o nome da função.





$tutu = new foda();
echo $tutu->printa("123"), "<br>", $tutu->falar();


?>