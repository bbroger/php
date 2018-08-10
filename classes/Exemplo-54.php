<?php

class fecomercio{

	public $nome;
	public $endereco;
	public $telefone;

	public function informa($cpf, $cep){

		return "Olá, ". $this->nome. ", estou verificando que você mora no endereço: ". "<br>" . $this->endereco. "<br>" . "e que o seu telefone é o: ". $this->telefone . "<br>" . "seu cpf: ". $cpf . "<br>" ."e o seu CEP é: " . $cep;

	}
}

$obj = new fecomercio();
$obj->nome = "Pedro Alvares Cabral";
$obj->endereco = "Rua Doutor Augusto Lopes Pontes";
$obj->telefone = "(75) 93249-4776";

echo $obj->informa("020.201.231-54", "44200-000");

?>