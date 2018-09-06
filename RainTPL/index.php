<?php

require_once("vendor/autoload.php");
// aula 86
// aqui eu faço o require do autoload (OBRIGATORIO TODA VEZ QUE BAIXAR UM PROJETO pelo composer)
// o rainTpl faz a junção entre um codigo php e um html.
// a pasta cache é somente pra se caso o cliente tente carregar a msm pagina ( e ela não tenha nenhuma alteração) ele não precise fazer a junção com rainTpl dnv, ele ja puxa da pasta cache e ja era.

use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
);
Tpl::configure( $config );
// create the Tpl object
// ele precisa dos dois diretorios la em cima (tpl e cache) POR ISSO VC PASSAR ELES em um array para a função que vai cria-los 
$tpl = new Tpl;
// assign a variable
$tpl->assign( "name", "Obi Wan Kenoby" );
// aqui eu estou "vinculando" uma variavel com um valor, ou seja, a variavel "name" = $name armazena o valor "Obi wan ke..." AGORA eu posso utiliza-la dessa forma no html sem problemas. é pra isso que ser o rainTPL, é uma ferramente pra vc vincular o php ao html dboa.
// assign an array
$tpl->assign( "teste2", PHP_VERSION );
//msm coisa aqui
// draw the template
$tpl->draw( "index" );
// aqui eu passo pro metodo draw eu tenho que mandar o NOME DO ARQUIVO HTML,( por padrão ele ja vai buscar um html, ou seja, n precisa colocara a extensão), ele sempre é o ultimo metodo chamado pq tem q estar tudo pronto antes dele. obs: dessa forma ele vai printar na tela

// pra vc usar a variavel que foi vinculada aqui no html basta edita-lo e colocar {$nome da viravel} "exatamente como vc faz normalmente só que com chaves" no codigo html e ele vai puxar o valor delas.


?>