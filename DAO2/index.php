<?php

require_once("config.php");

$print = new banco();

$teste = $print->select("SELECT * FROM tb_usuarios");

echo json_encode($teste);

?>