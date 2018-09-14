<?php

session_start();

// autenticação login e senha
// procedimento para proteger id de sessão, (dps de todo login ele vai ser trocado)

session_destroy();

session_start();
// msm destruindo a sessão e iniciando dnv, ela continua com o mesmo id, vc precisa do comando abaixo \/ para gerar um novo.

session_regenerate_id(true);

echo session_id();

?>