<?php

class leo{

	public $nome;

	public function teste ($mau){

		return "Lol guy ". $mau;

				// você só usa o $this-> quando for chamar um atributo dentro de um metodo,seja ele qual for, se n tiver dentro de um metodo pode colocar $nome normal. (isso quando trabalhar com classes claro)

				// obs: CASO exista uma variavel passada por parametro, não tem $this é direto msm.
	}

}

$kau = new leo();
$kau->nome = " Kilua";
echo $kau->teste("Muritiba");

?>

