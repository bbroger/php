<?php

function Nomak ($name) {

if (!isset($name) || $name == ""){
	// nesse if vc poderia colocar a condição (!$name), isso quer dizer "se not name" ou seja, se essa variavel estiver vazia... se ela retornar falso (não tem nada nela, é nula) ai ele entra no if e tal...

	throw new Exception("Nenhum nome foi passado", 35);
	
}

echo $name . "<br>";

}

try{

	Nomak("Pedro");
	Nomak("");

}catch(Exception $e){
	//O que vai acontecer aqui? bom, se em determinado momento da minha função ele chamar o throw com o meu erro, esse throw vai me retornar uma serie de informações como objeto, como "message" do erro "Nnenhum nome foi passado"... "code" do meu erro "35 como eu escolhi la em cima"... "file" em que esse erro ocorreu... "line" linha em que esse erro ocorreu... ai pego isso tudo que foi retorno do meu erro da minha classe "Exception" e joga pra minha variavel $e, por isso eu posso usa-la como objeto e chamar cada metodo desse... getmessage... getcode... pra ficar mais claro dê um print_r $e e veja o que retorna.

	print_r($e);
	echo json_encode(array(
		"Mensagem"=>$e->getMessage()));
	echo "<br>";
	// vc pode colocar ele para mandar um email caso dÊ erro por exemplo... ou pra fazer outra ação, vc escolhe.
}
finally{
	// o finally é o terceiro bloco do try catch que NÃO É obrigatorio... 
	// independente de o codigo executar o try ou o catch, ele sempre vai executar o finally.

	echo "Reveja seu codigo.";
}

?>