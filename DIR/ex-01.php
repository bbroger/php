<?php

$name = "Imagens";

if (!is_dir($name)){
	// o "!" significa NÃO, e o "is_dir" é pra ver se o diretorio existe, ous eja, o if acima significa "Se (não existe o diretorio $name)"

	mkdir($name);

	//mkdir é pra criar um diretorio.

	echo "Diretorio criado com sucesso.";

}

else {

	rmdir($name);
	// rmdir é pra deletar um diretorio.
	echo "O diretorio $name já existe. Foi removido";
}

?>