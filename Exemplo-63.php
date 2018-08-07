<?php

class um{

	public $numero = 123;
	protected $telefone = 1234;
	private $cpf = 12354;

	/*public function __construct($a, $b, $c){

		$this->numero = $a;
		$this->telefone = $b;
		$this->cpf = $c;
	}*/

	public function printando(){

		echo $this->numero, "<br>";
		echo $this->telefone, "<br>";
		echo $this->cpf;
	}

}

class dois extends um{

	//public $teste = "testezao";

	/*public function __construct($o){

		$this->teste = $o;
	}
*/
		public function printando(){

		echo $this->numero, "<br>";
		echo $this->telefone, "<br>";
		echo $this->cpf;

}
}


//$obj = new um(1022, 22012, 01241);
$obj = new um();

//echo $obj->printando();

//echo "<br>", get_class($obj);

$obg = new dois();

$obg->printando();


?>