<?php

$tt = "Tuta";

if (!is_dir($tt)){

	mkdir($tt);
}
else{

	echo "O diretorio já existe.";
}

?>