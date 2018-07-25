<?php

include_once "Exemplo-10.php";
include_once "Exemplo-10.php";

$resultado = somar(20, 35);

echo $resultado;

// require verifica se o arquivo existe... se funciona... faz a mesma coisa q o include, mas [e mais minuncioso]
//include pega um arquivo e inclui tudo dele neste, então msm sem ter a função aqui, pq ela foi incluida, ele reconhece e faz a operação.

// include_once ou require_once s[o inclui uma vez, n deixa incluir dnv.]



?>