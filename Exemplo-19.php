<?php
$condicao = true;
//Será executado enquanto a condição for verdadeira
while ($condicao == true){
 //Foi gerado uma variavel para gerar numero randomico entre 1 e 25
 $numero = rand(1, 25);
 //Se o numero gerado for igual a 5 ele vai exibir texto numero 5 e mudar a condição inicial de 'true' para 'false'
 if ($numero === 5){
 echo "Numero 5!!!";
 $condicao = false;
 }
 //porque o echo $numero tem que ser fora da funçao???????
 echo $numero; 
 
}
?>