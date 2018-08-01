<?php

$pessoa = array(
		'nome'=> "João",
		'idade'=> 20
);

foreach ($pessoa as &$value) {
	
	if (gettype($value) === 'integer') $value = $value + 10;

	echo $value, "<br>";
}

print_r($pessoa);

//coloque o tipo de dado por extenso, n abrevie pq se n da merda.

?>
