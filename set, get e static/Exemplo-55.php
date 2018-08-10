<?php

class Carro{

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){
	
		return $this->modelo;

	}

	public function setModelo($modelo){

		$this->modelo = $modelo;

		// aqui ele recebe o parametro fora da classe e altera. Get é para pegar o valor, set é para altera-lo. 
		// ai surge uma pergunta, pq n fazer direto ao inves de fazer essa porra toda? pq aqui vc pode colocar validações
	}

	public function getMotor():float{

		return $this->motor;

	}

	public function setMotor($motor){

		$this->motor = $motor;

		// como foi aprendido anteriormente, quando vc coloca ":float" vc está dizendo que quer forçar o retorno a ser considerado como um valor float, se fosse ":int" seria forçar a ser um inteiro... e assim vai... e se quisesse aceitar apenas inteiros como parametro, seria dentro do parametro (int ...$motor)... outro ext (float ...$motor) e etc.

	}

	public function getAno():int{

		return $this->ano;
	}

	public function setAno($ano){

		 $this->ano = $ano;
	}

	public function exibir(){

		return array(
			'modelo'=>$this->getModelo(),
			'motor'=>$this->getMotor(),
			'ano'=>$this->getAno()

	/*public function exibir(){

		return array(
			'modelo'=>$this->modelo,
			'motor'=>$this->motor,
			'ano'=>$this->ano  */

			// vc poderia colocar $this->modelo... e etc ao inves do metodo.
			// quando vai atribuir o valor no array se lembre que é "=>" ao invés de "->"

		);
	}

}

$carp = new Carro();
$carp->setModelo("Ford");
$carp->setMotor(1.2);
$carp->setAno(2018);

//print_r($carp->exibir());

echo "<br>";

var_dump($carp->exibir());


//como o atributo é privado, vc tem que usar o metodo "set" dele, q é publico, para atribuir valor.
// pra printar array é "print_r" como foi ensinado anteriormente.

?>