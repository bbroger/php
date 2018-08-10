<?php


//echo strtotime("2012/12/5"), "<br>";

//echo date("l, d/m/Y", 1354662000);

//$ts = strtotime("now");

//$ts = strtotime("+1 week");

$ts = strtotime("+1 day, +5 hours");

echo date("l, d/m/Y", $ts); 

//http://php.net/manual/pt_BR/function.date.php

?>