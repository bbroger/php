<?php

$a = 10;

function Lula ($a){

	$a = $a + 50;
	return $a;

}

echo $a, "<br>";
echo Lula($a),"<br>";
echo $a, "<br>";

// o que acontece na função fica na função, "o que acontece em vegas fica em vegas", ou seja, msm chamando a função e passando o valor, fora dela, ele continua igual
// OBS: a não ser que exista um "&" na função, isso signica que o parametro foi passado por referencia, caso aconteça isso, o valor é mudado de fato, tanto dentro quanto fora, ex:

/*$a = 10;

function Lula (&$a){

	$a = 50;
	return $a;

}

echo $a, "<br>";
echo Lula($a),"<br>";
echo $a, "<br>";
*/

// mesmo que vc "troque" o nome da variavel na função, "onde ele aparece passado por parametro", ela ainda será a msm q vc passou pelo chamamento da função, ex: 

/*$a = 10;

function Lula ($b){

	$b = 50;
	return $b;

}

echo $a, "<br>";
echo Lula($a),"<br>";
echo $a, "<br>";
*/

?>