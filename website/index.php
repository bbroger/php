<?php

require_once"vendor/autoload.php";

$app = new \Slim\Slim();

$app->get('/', function () {
    echo "HOME";
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->get('/upload', function () {
    require_once("ex-01.php");
});
$app->get('/teste', function () {
    require_once("exemplo-09.php");
});
$app->get('/lista', function () {
    require_once("testelista.php");
});
$app->get('/testeseg', function () {
    require_once("seg.php");
});

$app->run();


// o slim framework é um administrador de rotas, ou seja, vc basicamente diz aqui oq quer que apareça quando o usuario utilizar data rota. No primeiro exemplo eu tenho uma rota com "/" ou seja, quando ele acessar o meu link normal "nery.com.br:83" ele vai mostrar o conteudo dentro daquele escopo. no segundo exemplo caso ele acesse "nery.com.br/hello/$valor da variavel", essa variavel vai ser jogada na rota do segundo exemplo como $name, ai vai printar "hello $name".

// SIMPLIFICANDO, o que o slim faz? ele faz o seguinte, digamos que vc queira otimizar seu site, tipo "nery.com.br:83/teste" com o slim eu posso fazer com que essa url va PARA TAL lugar, ja "nery.com.br/dd" va para OUTRO lugar, ou seja, eu administro as rotas do meu site para cada url.

// O slim é um micro framework para rotas.

// https://docs.slimframework.com/

?>