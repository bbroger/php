<?php

class Documento {

	private $numero;

	public function getNumero(){
		return $this->numero;

	}

	public function setNumero($numero){
		$validação = Documento::testeCPF($numero);

		if ($validação == False){
		throw new Exception("CPF INVALIDO", 1);
        // caso seja falsa ele vai printar uma msg de erro com esse texto no meio.

		}

		$this->numero = $numero;
		
	}

	public static function testeCPF($cpf):bool{

        // o "static" faz com que eu não precise de um objeto para chamar a função, posso chamar ela em qualquer local apenas com o nome da classe "::" o nome da função (parametro) , dessa forma, Documento::testeCPF($cpf); 

		// :bool estou forçando a função a me retornar um valor booleano (true ou false)

		 //verifica se um numero foi informado
 if(empty($cpf)) {
        return false;
    }
 	// Elimina possivel mascara
    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
	$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    //Verifica se o numero de digitos informados é igual a 11
    if (strlen($cpf) != 11) {
        echo "length";
        return false;
    }
    
    // VERIIFICA SE NENHUMA DAS SEQUENCIAS INVALIDAS ABAIXO
    else if ($cpf == '00000000000' || 
        $cpf == '11111111111' || 
        $cpf == '22222222222' || 
        $cpf == '33333333333' || 
        $cpf == '44444444444' || 
        $cpf == '55555555555' || 
        $cpf == '66666666666' || 
        $cpf == '77777777777' || 
        $cpf == '88888888888' || 
        $cpf == '99999999999') {
        return false;
        //Calcula os digitos verificadores para verificar se o CPF é valido
     } else {   
         
        for ($t = 9; $t < 11; $t++) {
             
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
 
        return true;
    }
	}


}

$cpf = new Documento();
$cpf->setNumero("06000830556");

//nesse metodo q foi copiado de la ele sóa ceita o numero se for passado como string, entre aspas.
// no comando acima, estou usando um objeto para chamar uma função set e passar um parametro... ja no var_dump la em baixo q ta comentado, eu ja passo o parametro pro metodo estatico daquela forma que aprendi "classe::função(parametro)", assim, // var_dump (Documento::testeCPF("06000830556"));
//echo $cpf->getNumero();

echo "<br>";

var_dump($cpf->getNumero());

//var_dump (Documento::testeCPF("06000830556"));




?>