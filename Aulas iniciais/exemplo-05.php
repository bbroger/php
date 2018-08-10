<?php

$a = 35;
$b = 55;

var_dump ($a <=> $b);

// <=> spaceship = traz 1 se a for maior, 0 se forem iguais, -1 se b for maior.

$c = NULL;
$d = NULL;
$e = 10;

echo $c ?? $d ?? $e;

// "??" Se for nulo mostre o proximo, se n for, mostre apenas o primeiro que vc achou e q n é nulo


?>