<?php

abstract class Animal {

	public function falar (){

		return "Som";
		}

	public function mover (){

		return "Anda muito";

	}
}

class Cachorro extends Animal {

	public function falar (){

		return "Late";

	}
}

class Gato extends Animal {

	public function falar (){

		return "Mia";
	}
}

class Passaro extends Animal{

	public function falar (){

		return "Mia" . parent::falar();
		// vc ja sabe que quando vc chama um metodo, ele checa se ele existe na classe que o objeto foi instaciado, se n existir, e a classe herdar de alguma outra, ele vai buscar na classe mãe pra ver se tem, mas se tiver dois metodos com o mesmo nome tanto na mãe, quanto na filha, ele vai dar preferencia pra o metodo que tiver na classe que for a instacia dele, ou seja, a classe que ele foi ligado quando foi criado, como ta na linha 53. Mas... se vc quiser que ele print o metodo da classe mãe também... vc pode usar o "parent::nome do metodo", DESSA FORMA, vc ta dizendo pro codigo buscar o metodo na classe mãe também.

		// vc só pode usar "parent" dentro de uma classe, se quiser usar fora... vai ter que colocar dentro de uma função e chamar ela. obs: diferent de "static", que vc pode chamar la fora com o "nome da classe::nome da função(parametro)"

		}

	public function mover (){

		return "voa";

	}
}


$obj = new Cachorro();
echo $obj->falar();
echo "<br>";
echo $obj->mover();

$garfild = new Gato();
$garfild->falar();


?>