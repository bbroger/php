<?php

interface Veiculo {

	public function acelerar ($velocidade);
	public function frenar ($velocidade);
	public function trocarMarcha ($marcha);
}

abstract class Automovel implements Veiculo {


	// quando eu coloco "abstract" na minha classe, ele não pode ser mais instanciada diretamente por um objeto, vc só pode acessar ela através de uma classe filha da mesma.
	// é uma forma de organização

	private $to;


	public function acelerar ($velocidade){

		echo "O veiculo acelerou até ". $velocidade . "km/h";
	}

	public function frenar ($velocidade){

		echo "O veiculo frenou até ". $velocidade . "km/h";
	}

	public function trocarMarcha ($marcha){

		echo "O veiculo engatou a marcha" . $marcha;
	}

	public function getTo(){

		return $this->to;
	}

	public function setTo ($y){

		$this->to = $y;
	}

}

class teste extends Automovel{
	// obs: uma classe normal, só pode herdar de UMA classe abstrata, se vc colocar mais, não vai funcionar.


	public function printar(){

		echo $this->getTo();
	}

}

$obj = new teste();
$obj->setTo("Paulo Muzy");

$obj->printar();



//$obj->frenar(200);



?>