<?php

class BomHumor{

	public $nome;

	public function fala(){

		return "Meu nome é". $this->nome;


		// você só usa o $this-> quando for chamar um atributo dentro de um metodo,seja ele qual for, se n tiver dentro de um metodo pode colocar $nome normal. (isso quando trabalhar com classes claro)

		// obs: CASO exista uma variavel passada por parametro, não tem $this é direto msm.
	}

}

$Aluno = new BomHumor();
$Aluno->nome = " Pedroka";
echo $Aluno->fala();



?>