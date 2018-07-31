<?php

function ola(){

    $argumentos = func_get_args();
    return $argumentos;
}

var_dump(ola("Bom dia", 10, "viviane"));

// func_get_args recuperar os valores passados por parametro e joga em um array

?>