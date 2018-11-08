<form>
	<input type="number" name="CEP">
		<input type="number" name="Tuta">
			<input type="number" name="Tete">
	<input type="submit" value="GO">

</form>

<?php

require_once("config.php");
print_r($_GET['Tuta']);
/*$Cep;
if (isset($_GET)){
foreach ($_GET as $key => $value) {
	$Cep = $value;
}
}
if(isset($Cep) && $Cep!=''){
$teste = new Valid();
//print_r($teste->info($Cep));
echo $teste->info($Cep);

}
*/


?>