<?php

$teste = "Arq";

if (!is_dir($teste)){

	mkdir($teste);
}
else {

	echo "O diretorio já existe.";
}

?>