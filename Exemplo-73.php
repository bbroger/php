<?php

/*function pegarClasse($nomeClasse){

	if(file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse .".php") === true){

		// DIRECTORY_SEPARATOR = / Isso ai é aquele separador de pastas, tipo abstratas/htds/...
		// OBS: perceba que em outros lugares eu tenho que colocar o $nomeClasse de forma normal, fora das aspas e etc..., mas dentro do require_once... eu coloco dentro msm , ah n ser que vc tenha o arquivo em outra pasta, ai vai ser fora msm da forma que ta ai. tem um exemplo simples onde vc usa dentro das aspas o $nomeClasse.php no arquivo exemplo 72.
	
	require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse .".php"); 

	//file_exists retorna de o arquivo existe ou não

}

}*/
//spl_autoload_register regitra uma função como autoload, é como se ele adicionasse essa função a ela.

//spl_autoload_register("pegarClasse");
//caso esteja na mesma pasta, é só colocar o nome do arquivo dentro do require once normal... da forma que tu aprendeu... mas... se tiver em outra pasta... tem que colocar da forma que na linha 05.

// obs: vc pode colocar a função anonima dentro do comando spl_auto... se quiser.

spl_autoload_register(function ($nomeClasse){

	if(file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse .".php") === true){
	require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse .".php");
}
});







$tutu = new foda();
echo $tutu->printa("123"), "<br>", $tutu->falar();


?>