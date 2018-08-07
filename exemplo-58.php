<?php

class Endereco {

	private $Logradouro;
	private $Telefone;	
	private $Numero;

	// sempre que tiver "__" é um metodo magico ou como chamamm geralmente (construtor)

	public function __construct($a, $b, $c){

		//logo quando vc instancia um objeto, vc tem parenteses ao lado do nome da classe dele "()", isso faz referencia ao metodo construtor ou "magico" como dizem.
		// Ele é um metodo que roda automaticamente assim que vc cria o objeto e é criado dessa forma acima ai, com o nome "__construct". obs: tem que ser da forma que ta ai. com ele vc pode colocar algo pra rodar logo no inicio quando instancia o objeto e passar parametros da forma que ta na linha 22.

		$this->Logradouro = $a;
		$this->Telefone = $b;
		$this->Numero = $c; 

	}

	public function __destruct(){
		// o construct é a primeira coisa a ser executava quando vc cria um objeto... logo... o destruct é a ultima, sinceramente só vejo o destruct como um metodo pra ficar "bonitinho" o codigo, pq o que vai destruir de fato é o "unset" la em baixo e eu poderia colocar dps dele esse echo da linha 23 simplesmente. 

		// ha n ser que vc coloque o unset aqui dentro... ai sim faz sentido, pq como ele é a ultima coisa a ser executada no codigo, só vai realizar estes comandos quando acabar tudo, no caso, a destruição.

		/*unset($teste);
		echo "DESTRUIU"*/ //dessa forma ai << 

		unset($teste);
		echo "DESTRUIU";
	}

	public function __toString(){
		// lembre-se de colocar da forma que está ai o "__toString" pq aqui ele faz diferenciação de letra maiuscula e minuscula, se n, n pega
		// o toString faz com que o objeto seja retornado como STRING automaticamente, antes disso vc n conseguiria dar um echo no objeto $teste, mas agr, vc pode.
		// obs: vc não vai conseguir mostrar o objeto inteiro, tipo as informações que vem var_dump, mas da pra configurar a forma que vai aparecer, como ta abaixo ai.

		return $this->Logradouro . ",". $this->Telefone . "," . $this->Numero;
	}

}

$teste = new Endereco("teste1", "teste2", "teste3");

var_dump($teste);

echo "<br>", $teste;





?>