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

echo json_encode($pessoas)
?>