<form method="POST" enctype="multipart/form-data">
<input type = "file" name = "FileUpload">
<button type = "Submit">SEND</button>	

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){

	$file = $_FILES["FileUpload"];
	//print_r($file);
	if ($file["error"]){
		throw new Exception("Não foi possivel fazer o upload do arquivo");
	}

$filename = "Consiste";
if (!is_dir($filename)){
	mkdir($filename);
}

if (move_uploaded_file($file["tmp_name"], $filename . DIRECTORY_SEPARATOR . $file["name"])){

echo "Upload realizado com sucesso!";

}
else {
 
		throw new Exception("Não foi possível realizar o upload.");
		
	}
	}
?>