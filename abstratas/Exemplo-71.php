<?php

function __autoload($nomeClasse){


var_dump($nomeClasse);
require_once("$nomeClasse.php");

}

$tete = new foda();

// Quando vc cria o metodo magico "__autoload" vc da forma que está acima e dps cria um objeto de uma classe... ele vai pegar o nome da classe que vc criou o objeto e vai passar como parametro para autoload = $nomeClasse, ai ele vai buscar $nomeClasse.php com o require once... ai dps q ele tiver acoplado as duas, ele vai descer dnv e ver novamente o comando pra criação de um objeto, só que agora ele ja incluiu o arquivo, então ele só vai instaciar simplesmente como se a classe estivesse aqui.

// É MUITO IMPORTANTE QUE O ARQUIVO ONDE ESTÁ A CLASSE ESTEJA COM O MESMO NOME DELA!!!

$tete->nunes = "João Pedro Cardoso";
echo $tete-> printa("030.030.120-54");
echo "<br>", $tete->falar();


?>