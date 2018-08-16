<?php

function soma(int ...$valores):string {

	return array_sum($valores);

}

var_dump(soma(2, 2));
echo "<br>";
echo soma(25, 34);
echo "<br>";
echo soma(2.2, 2.1);
echo "<br>";

// dessa forma a função pega todos os valores passados por parametro e atribui a $valores pra vc poder manusear, e diz q só vai trabalhar com valores inteiros, ou seja, se vc passar outro tipo de valor ele vai ignorar, como pro exemplo no ultimo echo, um valor quebrado, ele só vai considerar o que antes do ponto, (valor inteiro)

// o ":string" dps dos parametros da função é pra se caso vc queira determinar o tipo do retorno, ou seja, "tipo de dado" DENTRO dos paranteses de parametros significa o tipo de dado que ele vai aceitar e o tipo de dado FORA dos paranteses dos parametros antecedido de ":" significa atribuição ao tipo do retorno que ele vai devolver

//array_sum soma todos os valores de uma array

?>