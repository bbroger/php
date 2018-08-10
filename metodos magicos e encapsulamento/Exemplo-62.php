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

class dois extends um{

	/*public $teste;

	public function __construct($o){

		$this->teste = $o;

*/

	} 



//}

//$obj = new um(1022, 22012, 01241);

//$obj->printando();

//echo "<br>", get_class($obj);

$obg = new dois(122, 22012, 123);

// o objeto da classe filha, tem que seguir o mesmo padrão do objeto da classe mãe, mas como assim? vc tem um construtor na classe um correto? esse construtor recebe 3 variaveis como parametro certo? então mesmo que vc crie um objeto que nem seja da classe, q seja da classe dois no caso como ta ai acima, esse objeto tem que seguir o padrão de um objeto da classe um, passando 3 valores como parametro para o construtor da classe um , a classe mãe no caso, conseguir rodar. ou seja, a mãe mande, o filho obedece as regras kk

$obg->printando();

// Uma classe mãe e uma classe filha só podem ter UM construtor, em outras situações quando não tiverem vinculos nem nd de mãe ou filha, pode ter quantos quiser dentro de cada uma claro.

?>

