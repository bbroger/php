<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");
// a função "mysqli" ja existe no php, ou seja, é só chama-la e passar como parametro primeiro o ip onde ta o servidor, dps o usuario, a senha (se n tiver senha deixa sem nd, e dps o nome do banco de dados)

if ($conn->connect_error) {
// "connect_error" é pra ver se deu erro na conexão, ou seja, isso testa se deu errado, se sim, ele entra no if. ( é um atributo)
	//obs: ele só vai entrar no if se a condição ali for verdade, ou seja, se deu erro msm.

$teste = $conn->connect_error;
echo "Error: " . $teste;

}

$bd = $conn->prepare("INSERT INTO tb_usuarios (deslogin, desenha) VALUES (?, ?)");
// obs: vc tem que passar o objeto pra uma variavel e dps trabalhar com ela ( chamar os metodos com ela e etc) SE N , n roda.
// o "prepare" é onde vc vai colocar a linha de comando que vai ser executada no banco de dados, porém, a unica coisa q muda é a parte dos valores que vc vai passar caso queira adicionar algo, vc n poder colocar direito ali, tem que colocar uma ou mais "?" e dps fazer isso \/

$bd->bind_param("ss", $tt, $dd);

// com o metodo "bind_param" vc passa os parametros para serem substituidos pelas "?" la em cima, porém, antes de passar os parametros, vc tem que dizer que tipo de dado é, por isso o "ss", pq são duas variaveis do tipo string ou VAR_CHAR como ta no banco de dados, se fosse uma só e do tipo inteiro, seria "i", se fossem duas do tipo inteiro seria "ii" entendeu né

//obs: detalhe IMPORTANTE, até no bind_param vc n pode passar o valor direito, tipo assim "$bd->bind_param("ss", "teste", "54321");", vc só pode passar a variavel que contem o valor, ou seja, pega o valor, joga em uma variavel qualquer, e passa ela como parametro, assim como ta abaixo.

$tt = "tunnel";
$dd = "5422";

//obs: aqui n importa se vc passa o valor da variavel antes ou dps de chama-la, pq só vai ser executada a linha de comando quando vc usar o metodo "execute" abaixo.

$bd->execute();



?>