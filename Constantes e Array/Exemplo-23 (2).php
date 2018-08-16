<?php

$pessoas = array();

array_push($pessoas, array(
	'nome'=> 'Pedro',
	'idade'=> 19

));
array_push($pessoas, array(
	'nome'=> 'Gluacio',
	'idade'=> 31

));

print_r ($pessoas[0]['nome']);
print_r ($pessoas[1]['idade']);

?>