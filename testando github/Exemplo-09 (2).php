<?php

$frase = "A repetição é a mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra);

// diz em q posição ta a lavra mãe

var_dump($q);

$texto = substr ($frase, 0 , $q);

// busca o texto da posição 0 até a posição da palvra mãe

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);

//strlen mostra quantos caracteres tem a variavel

?>