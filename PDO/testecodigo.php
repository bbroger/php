
<form>
<input type = "text" name = "Login">
<input type = "number" name = "Senha">
<input type = "submit" value = "Confirmar">

</form>

<?php

if (isset($_GET)){

foreach($_GET as $key => $value) {

if (gettype($value)==='string'){

$j = $value;
return $j;
}

else  {

$i = $value;
return $i;

}
}
}

$conn = new PDO ("mysql:dbname=dbphp7;host=localhost", "root", "");

$teste = $conn->prepare("INSERT INTO tb_usuarios (deslogin, desenha) VALUES (?, ?)");

$login = $j;
$senha = $i;

$teste->execute(array($login, $senha));

echo "Dados Cadastrados com sucesso!";


?>


