<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo ucfirst(strftime("estamos no mês de %b,no seculo %C."));

// https://secure.php.net/manual/pt_BR/function.strftime.php
// o strftime apresenta diversas opções... ela recuperar o dia do mês por extenso por exemplo... o seculo... e faz tudo de acordo com o padrão dado em setlocale.
// no strftime cuidado com o %, pra n confundir e pensar que é tipo variavel $

?>
