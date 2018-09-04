<?php

require_once("config.php");

//$_SESSION ["Valor"] = "2030,00";
// quando vc starta uma sessão, vc pode usar o $_SESSION que é um array super global pra armazenar valores, e dps jogar esses valores pra uma variavel, por padrão uma sessão dura 20  min, vc pode alterar esse tempo (tenho q ver como faço isso), durante esse tempo vc pode abrir outra pagina dboa e starta a sessão novamente, quando vc startar se ainda tiver dentro dos 20 minutos, vc vai ganhar o mesmo id de sessão, ou seja, vc vai poder acessar o seu $_SESSION que vai ter seus valores e recupera-los dboa, jogar pra variaveis e etc, (dai vem a expressão variavel de sessão), quando passar esse tempo vc vai ganhar um novo id de sessão, ai quando vc tentar buscar o $_SESSION, suas informações não vai estar mais la, pq vc n está mais na mesma seção.

//obs: quando vc starta uma seção o servidor cria um arquivo de texto temporario na sua maquina pra guardar todas as informações... variaveis e valores q vc criar dentro dele, quando passa o tempo determinado (nesse caso 20 min), ele vai criar um NOVO arquivo, ou seja, vc n vai ter mais acesso aquele pq o ID é outro agora.

echo session_id();
var_dump($_SESSION);

?>