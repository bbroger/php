<?php

$uti = "Tela";

if (!is_dir($uti)){

	mkdir($uti);
}

else {

	echo "O diretorio já existe.";
}
?>