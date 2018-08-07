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

 class Programador extends Pessoa {

 	// extends significa extender, ou seja, quando vc coloca "Programador extends Pessoa" significa que progamador é filho de pessoa, é só ler "extends" como "filho de", ou seja, herda a porra toda da classe pessoa, dai vem o conceito de "herança". obs: a n ser o que for colocado como "Private", ai só pertence a pessoa.

 	public function verDados(){

        echo get_class($this);
        // vc ja sabe que o get_class diz a quem pertence o determinado objeto, porém, caso esse comando seja executado dentro de uma classe e vc queira evidenciar de quem ele é, coloque o "$this", como ta nesse exempolo ai.

		echo $this->nome;
		echo $this->telefone;
		echo $this->cpf;
	}

	// perceba que em determinado momento "depois de ter testado esta classe vazia e chamando a função "verDados" que ela herda de "pessoa"", ela funcionou normalmente" mas... agora eu copiei o metodo verDados pra cá, então quando eu chamar ele atraves do objeto "como ta na linha 42", o programa vai ver que ele existe aqui e vai dar preferencia pra ele, ou seja, quando eu chamar la agr, como ele ja existe aqui dentro, ele vai chamar esse "verDados" ao invés do que está na classe mãe dessa.

	// Vai ocorrer um erro, mas pq vai ocorrer? pq agr q ele ta aqui dentro, ele ta sendo chamado normalmente, porém, o ultimo atributo printado "$this->cpf", na classe mãe é privado, ou seja, ele não pode ser acessado nem pelas classes filhas, então é como se ela não tivesse acesso, por isso o erro.
}

$obg = new Pessoa();
$obj = new Programador();

$obj->verDados();

echo get_class($obg), "<br>";
echo get_class($obj);
// o get_class(nome do objeto) me mostra a quem esse objeto pertence, ou seja, a classe que ele foi instanciado.

//echo $obj->nome;
//echo $obj->telefone;
//echo $obj->cpf;

//$obj->verDados();
// /\ eu só consigo acessar tudo se eu utilizar a minha função q é publica

?>

