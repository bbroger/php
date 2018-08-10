<?php

class Documento{

	private $numero;

	public function getnumero(){

		return $this->numero;
	}

	public function setnumero($n){

		$this->numero = $n;
	}

}

class CPF extends Documento{

	public function validar(){

		$numeroCPF = $this->getnumero();

		// pra vc utlizar uma função de uma classe mãe dentro de uma classe filha, vc tem que colocar o $this, se n, n funciona.

		echo $numeroCPF;


	}

}

$doc = new CPF();

$doc->setnumero(1241241);

$doc->validar();

echo "<br>";

echo $doc->getnumero();

?>