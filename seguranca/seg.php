<?php

if ($_SERVER["REQUEST_METHOD"] === 'POST'){

	//$cmd = $_POST["cmd"];

	// sem o escapeshell... ele vai conseguir passar

	$cmd = escapeshellcmd($_POST["cmd"]);

	// o escapeshellcmd funciona da seguinte forma, ele é como um filtro pra evitar o command inject, se vc coloca-lo, ele n vai deixar que o comando via post seja passado SE esse comando for diferente dos comandos que eu ja tenho no meu sistema (comandos pra ler diretorio... criar pastas... e etc, tudo isso os sites... programas e etc ja fazem, CASO ele tente fazer algo fora desses padrões ele vai recusar.)

	var_dump($cmd);
echo "<pre>";
// a tag pre é do html e serve pra formatar o retorno de uma forma melhor.
	$comand = system($cmd, $retorno);
	// o system executa o comando no seu promt de comando e da o retorno (o que aconteceu)

echo "</pre>";

// AQUI VC ESTÁ VENDO COMO "NÃO" FAZER, OU SEJA, NUNCA NA SUA VIDA RECEBA dados dinamicos para serem executados no seu servidor, se n, (mesmo que utilize o escape... pode dar merda sim.) #vaidarmerda.


}


?>

<form method="post">
	
<input type="text" name="cmd">
<button type="submit">Enviar</button>

</form>