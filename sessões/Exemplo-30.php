<?php

require_once("config.php");

session_unset($_SESSION["nome"]);
//session_unset($_SESSION["variavel"]) vai apagar a variavel de sessão especifica, ja o "session_unset();" vai apagar todas as variaveis de sessão

echo $_SESSION["nome"];

session_destroy();
// destroi a sessão por completo.

?>