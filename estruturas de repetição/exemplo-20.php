<?php

$total = 150;
$desconto = 0.9;

do {
	
	$total = $total * $desconto;
}while($total > 100);

echo $total;

?>