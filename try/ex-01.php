<?php

try{

	throw new Exception("XABU", 350);
	// aqiu nos temos uma exception com a mensagem "XABU" e o numero do meu erro é o 350. obs: eu escolhi o numero, serve pra vc organizar. tipo "error 404"
	// aqui é a minha "tentativa", isso quer dizer que, no momento em que o meu codigo detectar este erro acima ele vai fazer executar o que está abaixo.
	

} catch(Exception $e){
// quando vc usa o catch vc tem que passar como parametro a classe que vc utilzou "nesse caso exception, mas podia ser outra classe que fosse uma extensão dela, uma criada por vc por exemplo" e passo uma variavel que vai alocar meu retorno do try de cima. obs: essa variavel vai se tornar um objeto. obs2: esse objeto da classe exception tem alguns recursos, alguns deles são esses gets abaixo, tudo padrão da classe exception, caso queira ver os outros olhe a documentação no site.
	echo json_encode(array(
		"Mensagem"=>$e->getMessage(),
		"Code"=>$e->getCode(),
		"File"=>$e->getFile(),
		"Line"=>$e->getLine()));
}

?>