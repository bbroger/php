<?php

$aa = array(
	"teste"=>"Kiasl");

setcookie("Teste", json_encode($aa), time() + 360);
// um cookie serve pra vc guardar informações em um arquivo de texto temporario na maquina do usuario, isso serve pra tipo, se o usuario sair e tal, ele n precisar logar novamente no site por exemplo... ou pra guardar informações por um periodo determinado... aqui nos temos o comando setcookie(Nome do cookie, conteudo do cookie(não pose ser um array direto, tem que encodar pra json antes)), tempo que ele vai ficar na maquina ja q é temporario (obs: ali nos tems o time() que corresponde a hora atual + o adicional dele pra o codigo saber até que momento ele deve existir na maquina (tempo em segundos))

// depois de ter feito isso, o cookie ja foi criado com o nome certinho... conteudo e tempo de expiração dboa, agora ele foi movido pra um array super global chamado $_COOKIE, que armazena TODOS os cookies feitos, portanto, pra chamar um determinado cookie é só vc usar o array super global $_COOKIE["nome do seu cookie"]; como ta no ex-02

// obs: ele é parecido com seção... mas não é igual, ele tem um tempo determinado pra expirar tbm, mas esse tempo nós escolhemos, la em session é 20 min... aqui vc coloca o tempo que quiser e tbm tem outras...

?>