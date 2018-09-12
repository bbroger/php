<?php

$email = $_POST["inputEmail"];

//var_dump($_POST);
// aula 92 ( é muito especifico, então é melhor vc olhar a aula, aqui só vão ter pequenas anotações.)
//obs: O ACTION NO FORMULARIO DO RECAPTCHA.PHP é pra ele mandar pra ca o resultado do formulario, no caso o $_POST que vem pelo formulario que ta la.
// isso aqui é um sistema que implementa o recaptcha. (junto com o aqruivo cadastrar.php)
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
	"secret"=>"6Ld35G8UAAAAADN6KjYZ5ua1XwZMCso_kWsCVowU",
	"response"=>$_POST["g-recaptcha-response"],
	"remoteip"=>$_SERVER["REMOTE_ADDR"]

	)));
// cada recaptcha gerado vai gerar tbm uma nova "secret" OU SEJA, da pra vc aproveitar esse codigo DO JEITO QUE ELE TA , mas se for criar outro recaptcha no site e tal vc precisa alterar APENAS o secret e o datasitekey no arquivo recaptcha.php pq eles são especificos de cada um.

// o link pra criar o seu recaptcha é esse : https://www.google.com/recaptcha
// quando for criar no site do google VC TEM QUE COLOCAR O NOME DO SEU DOMINIO ( SEU SITE) de forma correta, se n, qnd vc tentar usar aqui n funciona.

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);

if($recaptcha["success"] === true){

		echo "OK";
}
else{

		header("Location: recaptcha.php");
		// quando fizer tudo isso e jogar pro $recaptcha vc vai ter uma array, e uma das chaves é o "sucess" que pode vir true ou false, aqui eu só fiz uma verificação, caso seja falta ele REDIRECIONA pra pagina do recaptcha (verificação pra n deixar burlar).
}




?>