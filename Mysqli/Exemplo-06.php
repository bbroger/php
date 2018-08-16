<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");
// a função "mysqli" ja existe no php, ou seja, é só chama-la e passar como parametro primeiro o ip onde ta o servidor, dps o usuario, a senha (se n tiver senha deixa sem nd, e dps o nome do banco de dados)

if ($conn->connect_error) {
// "connect_error" é pra ver se deu erro na conexão, ou seja, isso testa se deu errado, se sim, ele entra no if.
	//obs: ele só vai entrar no if se a condição ali for verdade, ou seja, se deu erro msm.

$teste = $conn->connect_error;
echo "Error: " . $teste;

}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

// o "prepare" é o metodo usado pra passar linha de comando pra inserir algo no banco, ja pra printar, vc usa o query ai como ta acima.
// no meu banco eu tenho uma tabela com varias linhas e dados... imagina que toda essa tabela foi jogada pra uma variavel, no caso a $result, e como todo tabela ela ta dividida em linhas...

$data = array();

while ($row = $result->fetch_array()){
// o metodo "fetch_array" funciona como um cursor... tipo aquilo na consiste que faz o agente pular de linha em linha sabe?, ele vai fazer isso, ou seja, cada linha de uma em uma, vão ser jogadas na variavel $row, portanto, o q esse laço faz é, "Enquanto $result tiver linha ainda a serem percorridas e vc conseguir jogar cada uma delas pra variavel $row, continue", ou seja, enquanto isso for verdadeiro ele vai rodar, qnd acabarem as linhas ele n vai conseguir fazer mais, então vai sair do laço.
	// dessa forma ai ele mostra tudo do banco e tal... até os indices de cada coisa, caso n queira mostrar o indice, basta substituir fetch_array por fetch_assoc ( TEM VARIOS OUTROS, É SÓ OLHAR NA DOCUMENTAÇÃO E ESCOLHER)

	array_push($data, $row);
	// dessa forma ai eu acima eu to jogando cada linha encontrada no meu laço pra um array que eu criei la em cima chamado data, dps eu posso passar ele pra json e mandar pra onde eu quiser, qualquer linguagem.

	var_dump($row);

}

echo json_encode($data);



?>