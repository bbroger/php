<?php

require_once("config.php");
session_regenerate_id();
var_dump($_SESSION);
$dinheiro = $_SESSION["Valor"];
echo session_id();
echo "<br>";
echo $dinheiro;



?>