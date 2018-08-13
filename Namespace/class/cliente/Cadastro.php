<?php

namespace Cliente;
//quando vc cria um "namespace" da forma que ta acima, vc está criando um nome para o local onde este arquivo está alocado, ou seja, pra vc chamar ele, vc tem que colocar "namespace/nomedoarquivo" agora, isso serve pra diferencia quando dois arquivos tem o mesmo nome, mas estão em locais diferentes

class Cadastro extends \Cadastro {
// "\"significa que ele buscar o arquivo la no inicio, é como se ele resetasse o caminho e procurasse o arquivo la na raiz, ou seja, no inicio  

	public function registrarVenda(){

 	echo "Foi registrada uma venda para o cliente " . $this->getnome();
}
}

?>