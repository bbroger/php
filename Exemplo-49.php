<?php

$dt = new Datetime();

$periodo = new dateinterval("P15D");

// caso queira adicionar um periodo na minha data tenho que criar um objeto da classe dateinterval e adicionar o valor que quero adicionar a minha data, "P" significa periodo, 15 é a quantidade e D significa dias, ou seja, juntando tudo da, "Periodo de 15 dias".
// http://php.net/manual/pt_BR/class.dateinterval.php

echo $dt-> format("d/m/Y H:i:s"), "<br>";

$dt -> add($periodo);

// depois de criar o objeto da classe dateinterval vc joga ela no objeto da datetime, nesse caso o $dt usando o metodo add, se fosse pra subtrair usaria o metodo "sub", e pra outras coisas é só olhar a documentação de dateinterval e ver.

echo $dt-> format("d/m/Y H:i:s"), "<br>";

// dps de instaciar a variavel tornando assim ela em um objeto da classe datetime, vc n pode printala de forma normal, tem q definir o metodo que ela vai usar com "->", NESSE CASO, o metodo usado foi o format q é igual ao date praticamente, vc só configura o formato da data e etc... tipo no exemplo 46

?>

<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo strftime("Olá, hoje é %A e estamos no seculo %C"), "<br>", "<br>";

$ka = new datetime();

echo $ka-> format("d/m/Y H:i:s"), "<br>";

$inter = new dateinterval("P30M");

$ka -> add($inter);

echo $ka-> format("d/m/Y H:i:s");

?>
