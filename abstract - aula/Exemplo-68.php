<?php

interface Valida {

	public function getNome();
	
}


class Diretor implements Valida {

	private $nome;

	public function getNome(){

		return $this->nome;
	} 

	public function setNome($k){

		$this->nome = $k;
	}

}

class Subordinado extends Diretor{

	public function ponto (){
		
		return $this->getNome();

}
}

$obj = new Subordinado();

$obj->setNome("Luis Eduardo");

echo $obj->ponto();



?>