<?php

session_id('jcjr195eomgp82n54g77smgbe3');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>