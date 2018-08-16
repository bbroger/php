<?php
function hello2($t, $p) {
 return "Olá $t! Boa $p";
}
 
$t = array('Alan', 'Luisa', 'Glaucio', 'João');
$p = array('tarde', 'noite', "dia");
 
echo hello2($t[2], $p[1]);
?>