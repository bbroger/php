<?php

class um {

	public $numero;
	protected $telefone;
	private $cpf;

	public function __construct($a, $b, $c){

		$this->numero = $a;
		$this->telefone = $b;
		$this->cpf = $c;

	}

	public function printando(){

		echo $this->numero, "<br>";
		echo $this->telefone, "<br>";
		echo $this->cpf;

	}

}

class dois{

	public $teste;

	public function __construct($o){

		$this->teste = $o;

	} 

		public function teste(){

		echo $this->teste, "<br>";
	}
}



//}

//$obj = new um(1022, 22012, 01241);

//$obj->printando();

//echo "<br>", get_class($obj);

$obg = new um(122,223,435);
$obj = new dois(122);

$obg->printando();
$obj->teste();

// comprovando que duas classes que não sejam mãe e filha podem ter seus respectivos construtores sem problema nenhum, o problema é só quando vc tem esse vinculo, ai é só 1 msm.

?>