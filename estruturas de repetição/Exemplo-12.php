<?php

$qualSuaIdade = 17;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualSuaIdade < $idadeCrianca){
 echo "Criança";
} else if ($qualSuaIdade < $idadeMaior) {
 echo "Idade de maior";
} else {
 echo "Melhor idade";
}

echo "<br>";

echo ($qualSuaIdade < $idadeMaior)?"Menor de idade":"Já pode ser preso";

?>