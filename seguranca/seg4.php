<?php

$pasta = "Tiul";
$permission = "0775";
// obs: em 99% das vezes, a permissão do diretorio vai ser essa.
// ler : ver o q tem la dentro
// executar : posso executar alguma coisa la dentro que é executavel
// gravação : escrever ou criar novos arquivos.

if (!is_dir($pasta)) {
	mkdir($pasta, $permission);
	// qnd crio o diretorio posso passar um segundo parametro contendo a permissão daquele diretorio.
}

// aula 91
// se quiser dps dê uma olhada na documentação pra ações especificas, as permissões 1...2...3...4... tem diversas outras funções.
// as permissões seguem um padrão, elas podem ir de 0 a 7, 7 é tudo, 0 é nada, perceba o padrão depois do 0, "775" o primeiro numero é referente a permissão do dono (quem criou o diretorio), ele tem permissão total, o segundo é referente aos grupos de usuarios do sistema operacional, ele tbm esta com um 7 de permissão total, ja o ultimo numero  é referente aos visitantes (os clientes e tal) esses estão com permissão 5, ATENÇÃO, NÃO COLOQUE 7 NESSE ULTIMO SE N O USUARIO PODE FAZER O QUE ELE QUISER NA PASTA NO SEU SERVIDOR, com a permission 5 ele apenas consegue ler o que tem no diretorio e executar arquivos la dentro.

?>