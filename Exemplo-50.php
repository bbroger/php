<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo strftime("O seculo atual é %C"), "<br>";

$dado = new datetime();

$test = new datetime("03/05/2009 23:13");

echo $test -> format("d/m/Y H:i:s"), "<br>";

$intervalo2 = new dateinterval("P5M");

$test -> add($intervalo2);

echo $test -> format("d/m/Y H:i:s"), "<br>", "<br>";

echo $dado-> format("d/m/Y H:i:s"), "<br>";

$intervalo = new dateinterval("P5Y");

$dado -> sub($intervalo);

echo $dado-> format("d/m/Y H:i:s"), "<br>";

?>