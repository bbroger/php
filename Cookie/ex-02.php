<?php

//$ee = json_decode($_COOKIE["Teste"], true);
//aqui eu decodifiquei e coloquei true pra ele me retornar como array, ai dps printei o array na chave "teste", isso me retornou o valor alocado nele.
//echo $ee['teste'];

$ee = json_decode($_COOKIE["Teste"]);
//aqui eu mantive ele como objeto pq não coloquei true no final do json decode e dps usei o metodo "teste" ou seja, eu chamei a chave "teste" dentro do meu array que agora virou um objeto e essa me retornou o valor alocado nela, no caso "Kiasl" como ta no array do ex-01.
echo $ee->teste;

?>