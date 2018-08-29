<?php


class Valid{


	public function info($Cep){
$link = "https://viacep.com.br/ws/$Cep/json/";

$ch = curl_init($link);
// aqui eu estou iniciando o curl com link 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// aqui eu estou usando uma das opções do curl que é a de retorno, o numero no final é "0 = false" e "1 = true", o parametro do meio é a opção que escolhi, ou seja, estou dizendo nessa linha que quero ativar "1 no final = true" a opção de retorno.

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// aqui é a mesma coisa, só que pra verificação ssl, se eu n iniciar essa opção ele vai querer fazer a verificação pq o link ta em https. obs: observe que ta "0" justamente pq n quero q ele faça essa verificação.
// todas essas opções tem na documentação do curl no site.

$results = curl_exec($ch);
// isso vai jogar o retorno do execute pra variavel $results. obs: o retorno nesse caso é um json, tem varios tipos, olha no site viacep dps, vamos usar mais o json mesmo.

// o ch ta funcionando como um manipulador, que nem no fopen.
curl_close($ch);

$res = json_decode($results, true);
// o que tava bugando era esse maldito true ai, se vc NÃO colocar ele, ele vai continuar como objeto (coisa do json la) e não vai virar um array quando vc decodificar. OBS MUITO IMPORTANTE << NÃO ESQUEÇA DESSE TRUE.
// vc pode decodificar o json caso queira.

return "Cep: ".$res["cep"]."<br>"."Logradouro: ".$res["logradouro"] . "<br>" . "Complemento: ".$res["complemento"]."<br>". "Bairro: ".$res["bairro"] ."<br>". "Localidade: ". $res["localidade"] ."<br>". "UF: ". $res["uf"] . "<br>". "Unidade: " . $res["unidade"]."<br>". "IBGE: ". $res["ibge"] . "<br>";
}

// existem varios "web services" do tipo desse link la em cima, isso nos da diversas possibilidades.
}

?>