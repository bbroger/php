<form>

<input type ="text" name = "Empresa">
<input type ="text" name = "CNPJ">
<input type ="text" name = "Dono">
<input type ="submit" value = "CONFIRMAR">

</form>

<?php

foreach ($_GET as $key => $value) {
	
	echo "Informação: " . $value, "<br>";

	echo "<hr>";
}

?>