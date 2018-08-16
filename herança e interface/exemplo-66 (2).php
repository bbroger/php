<?php

interface Nery {

	public function teste1($lol);
	public function teste2($lol);
	public function teste3($lol);

}

// interface é tipo um "roteiro" que a classe onde ela é implementada tem que seguir, isso quer dizer que, quando eu implemento uma interface em uma classe, ela tem que ter TUDO que tem listado na interface dentro dela , exatamente da forma que esta aqui, ou seja, se uma das funções listadas acima, não existir na classe abaixo, ela vai dar erro. Isso é pra obrigar o programador a fazer tudo q é pedido.

class Kilua implements Nery{

// pra vc vincular a interface a classe, vc usa a palavra "implements", da forma que ta ai acima.
	// nessa dai vai dar erro justamente por n ter as funções listadas na interface.
	// o Nome da variavel passada por parametro não precisa ser igual, mas o resto, tem que ser obrigatoriamente.
	// vc pode implementar varias interfaces em uma classe, é só por virgula, dessa forma "lass Kilua implements Nery, interface2, interface3{"

}

$lolzao = new Kilua();

?>