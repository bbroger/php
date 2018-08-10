<?php

$meses = array (
"Janeiro", "Fevereiro", "Março", "Abril",
"Maio", "Junho", "Julho", "Agosto",
"Setembro", "Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $index => $mes) {

	$index++;
	
	echo "Indice: " . $index, "<br>";
	echo "Mês:" . $mes, "<br>","<br>";
}

?>