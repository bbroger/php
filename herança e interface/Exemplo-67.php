<?php

class primeira {

	private $nery;

	public function getNery(){

		return $this->nery;
	}

	public function setNery($n){

		$this->nery = $n;

	}

}

class segunda extends primeira{


	public function validar(){

	$o = $this->getNery();

	echo $o;

}
	


}

$teste1 = new segunda();

$teste1->setNery(123);

$teste1->validar();



?>