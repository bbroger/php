<?php

if (isset($_COOKIE["app"])){

	$dd = json_decode($_COOKIE["app"], true);

	echo $dd["Fecomercio"];
}

?>