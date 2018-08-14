<?php

$maluco = new mysqli("localhost", "root", "", "dbphp7");

$pp = $obj = $maluco->query("SELECT idusuario FROM tb_usuarios");

$mm = array();

while ($row = $pp->fetch_array()){

	array_push($mm, $row);
	var_dump($row);
}

echo json_encode($mm);

?>