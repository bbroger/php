<?php

$diadasemana = 8; //date ("w");

echo $diadasemana, "<br>";

switch($diadasemana){

		case 1:
			echo "Segunda-feira";
	break;
		case 2:
			echo "Terça-feira";
	break;
		case 3:
			echo "Quarta-feira";
	break;
		case 4:
			echo "Quinta-feira";
	break;
		case 5:
			echo "Sexta-feira";
	break;
		case 6:
			echo "Sabado";
	break;
		case 0:
			echo "Domingo";
	break;
	default:
        echo "data invalida";
	break;
}

?>