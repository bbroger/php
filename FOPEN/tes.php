<?php

$tt = fopen("log1.txt", "w+");

fwrite($tt, $_SERVER["REMOTE_ADDR"] . " " . date("d/m/Y H:i:s") . "\r\n" );
// meu erro era o seguinte, estava colocando REQUEST_ADDR, PORÉM, O CORRETO É REMOTE_ADDR, esse request não existe.

fclose($tt);
?>