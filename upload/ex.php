<form method="POST" enctype="multipart/form-data">
 
	<input type="file" name="fileUpload">
 
	<button type="submit">Send</button>
	
</form>
 
<?php 
 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	// o metodo "POST" é especifico pra fazer upload de arquivos, e o enctype é pq um formulario por padrão só envia valores como "string", por isso o enctype é necessario, isso faz com que ele envie QUALQUER TIPO de arquivo.
 
	$file = $_FILES["fileUpload"];
	// $_FILES vai me retonar as informações do arquivo, no lugar de "fileUpload" é nome do input onde este arquivo foi alocado, ou seja, quando ele retonar as informações, estas informações serão sobre o ARQUIVO que vc fez o upload através do botão la em cima.

	//print_r($file);    << da uma olhada que vc vai ver todas as informações que ele retorna, ai vai dar pra entender tudo isso abaixo \/
 
	if ($file["error"]) {
 	// aqui ele só testa se tem erro. obs: essa informação vem no $file, use o print_r acima e vc vai entender.
		throw new Exception("Error: ".$file["error"]);
		
	}
 
	$dirUploads = "uploads";
 
	if (!is_dir($dirUploads)) {
 
		mkdir($dirUploads);
 
	}
 
	if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {
 		// Quando vc faz o upload de um arquivo, antes dele ser jogado pro destino final ele é jogado pra um diretorio temporario. o metodo move_uploadded_file faz a transição entre o diretorio temporario e o final, ou seja, "move_uploaded_file($file[tmp_name], diretorio final)". o "tmp_name" é padrão, a unica coisa que pode mudar ai é o nome do manipulador "$file" que vc escolheu la em cima. obs: isso tbm tem nas informações obtidas atráves do $_FILES.
		echo "Upload realizado com sucesso!";
 
	} else {
 
		throw new Exception("Não foi possível realizar o upload.");
		
	}
 
}
 
 ?>