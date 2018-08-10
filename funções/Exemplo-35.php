<?php

function Old($tap, $teste = "Antonio"){

  return "Ola $teste e $tap<br>";

}

echo Old(1102);
echo Old(1102, "Pedro");
echo Old(1102, "João");
echo Old(1102, "Juraci");

// se não tiver nada sendo passado por parametro ele pega  o valor padrão declarado na função
// os parametros que forem obrigatorios coloque sempre do lado esquerdo <<



?>