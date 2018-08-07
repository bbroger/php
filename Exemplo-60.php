<?php

class Pessoa {

	public $nome = "Julio";
	// public = todo mundo pode acessar.
	protected $telefone = 91294351;
	// protected = apenas quem ta dentro da classe e classes filhas podem acessar
	private $cpf = 123494303212;
	// private = somente quem ta dentro da classe pode acessar, nem classe filha pode


	public function verDados(){

		echo $this->nome;
		echo $this->telefone;
		echo $this->cpf;
	}

}

$obj = new Pessoa();

//echo $obj->nome;
//echo $obj->telefone;
//echo $obj->cpf;

echo $obj->verDados();
// /\ eu só consigo acessar tudo se eu utilizar a minha função q é publica

?>