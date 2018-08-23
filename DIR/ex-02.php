<?php

$tt = scandir("Imagens");
// o "scandir" isso vai retornar um array com o nome dos arquivos no diretorio Imagens, ele vai tipo "ler" o diretorio.

$data = array();

foreach ($tt as $key) {
	
	if (!in_array($key, array(".", ".."))){
		// o "in_array" vai fazer uma busca no array que eu passar como alvo, nesse caso o $tt, e vai procurar aquilo que eu coloquei no segundo parametro dentro do outro array, e como ta com "!" ele só vai entrar no if quando o foreach achar linhas do array onde não existam o "." e o ".."
		//obs: a primeira posição do array vai vir com o "." e a segunda com ".." pq é pasta e tal, por isso esse if, pra n entrar ai.

		$filename = "Imagens" . DIRECTORY_SEPARATOR . $key;
		// ai eu só to recuperando a posição do arquivo pra usar qnd precisar

		$info = pathinfo($filename);
		// a função "pathinfo" vai retonar um array com varias informações de cada um do arquivos no meu diretorio, obs: veja que acima eu tenho $key, ou seja, toda vez que o foreach rodar ele vai mudar, ai vai pegar as mesmas informações de CADA arquivo dentro do meu diretorio

		$info["size"] = filesize($filename);
		//aqui ele vai adicionar uma chave no meu array chamda "size" e vai jogar nela o valor obtido atraves de outra função nativa do php, o "filesize(posição/nomedoarquivo) que obviamente vai me dar o tamanho dele"

		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		// aqui eu crio outra chave com o nome "modified" e passo pra ela o formato que eu quero ela certinho, e a função "filemtime" que vai me retonar a ultima data de modificação do arquivo.

		$info["url"] = "http://localhost:83/variaveis/DIR" . str_replace("\\", "/", $filename);
		// o "str_replace(search, replace, subject)" funciona assim, vc passa primeiro que ele tem que procurar, dps para o que ele tem que alterar se achar, e dps o alvo onde ele vai fazer isso, mas pq isso? pq quando vc manda o "$filename" algumas barras podem vir invertidas, por isso vc faz isso pra acertar elas. obs: vc tem que colocar a barra 2x da forma que ta acima ai pra funcionar.

		array_push($data, $info);

		// aqui eu so jogando minhas informações pra um array previamente criado antes do foreach, só pra poder printar ele como json dps
	}

	echo json_encode($data);
}

?>