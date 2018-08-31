<?php

function manipulandoError($code, $mensagem, $file, $linha){
// isso aqui é semelhante ao try catch, utilizam este modo pq o try catch não funciona algumas vezes em determinadas situações, mas oq isso aqui faz? é o seguinte: vc cria uma função que pra manipular o seu erro, uma função normal, essa função vai receber como parametra TODAS as informações que o Exception retorna, NESSA ORDEM AI, se vc der um print_r no retorno do exception que agente joga na variavel $e no ex-01 de try catch vc vai ver que ele retorna code, mensagem, file e line. obs: a ordem tem que ser da forma que está ai nos parametros, mas aqui dentro vc pode colocar na ordem que quiser.
	echo json_encode(array(
		"Codigo"=>$code,
		"Mensagem"=>$mensagem,
		"Linha"=>$linha,
		"Arquivo"=>$file
		));
}

set_error_handler("manipulandoError");
// dps disso vc tem que dizer pro php que se ocorrer QUALQUER erro vc n quer q ele mostre o erro, mas sim execute a função que vc criou para manipular esse erro, ai vc usa o "set_error_handler("Nome da função")", e pronto, ja ta tudo certo.

//forçando erro \/
echo 100 / 0;





?>