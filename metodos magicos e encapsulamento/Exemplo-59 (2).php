<?php

class Fecomercio{

	private $nome;
	private $telefone;
	private $cep;

	public function __construct($a, $b, $c){

		$this->nome = $a;
		$this->telefone = $b;
		$this->cep = $c;
	}

	public function __destruct(){

		unset($teste);
		echo "FUDEU DE VEZ";
	}	

	public function __toString(){

		return $this->nome . ", " . $this->telefone . ", " . $this->cep;
	}


	}



$teste = new Fecomercio("lol", "lol2", 1234);

echo ($teste);
//var_dump($teste);

?>