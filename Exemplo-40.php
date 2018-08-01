<?php

function soma(int ...$valores){

	return array_sum($valores);

}

echo soma(2, 2);
echo "<br>";
echo soma(25, 34);
echo "<br>";
echo soma(2.2, 2.1);
echo "<br>";

// dessa forma a função pega todos os valores passados por parametro e atribui a $valores pra vc poder manusear, e diz q só vai trabalhar com valores inteiros, ou seja, se vc passar outro tipo de valor ele vai ignorar, como pro exemplo no ultimo echo, um valor quebrado, ele só vai considerar o que antes do ponto, (valor inteiro)

//array_sum soma todos os valores de uma array

?>