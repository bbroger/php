<?php

require_once("config.php");

echo session_save_path();


var_dump(session_status());

switch (session_status()) {
	case PHP_SESSION_DISABLED:
	    echo "se fufu";
		break;
	
	case PHP_SESSION_NONE:
		echo "se fufu";
		break;

	case PHP_SESSION_ACTIVE:
		echo "se fufu";
		break;
}

?>