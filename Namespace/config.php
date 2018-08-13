<?php

spl_autoload_register(function($nameClass){

	//var_dump($nameClass);
	echo "<br>";
	$dirClass = "class";
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

	if (file_exists($filename) === true){
	require_once($filename);
}
})


?>