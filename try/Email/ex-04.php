<form method="POST" enctype="multipart/form-data">

<input type="file" name="fileUpload">

<button type="submit">Send</button>

</form>

<?php

require_once("class/teste.php");



if ($_SERVER["REQUEST_METHOD"] === "POST") {

$file = $_FILES["fileUpload"];

if ($file["error"]) {

throw new Exception("Error: ".$file["error"]);

}



function Nk($file, $dirUploads){

if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){

echo "Ok";

}else {

throw new teste("Error Processing Request", 200);

}

}

error_reporting(E_ALL & ~E_WARNING);
// eu estava com esse problema, msm tratando o erro com try catch ainda aparecia 2 warnings na tela quando eu forçava o erro, então eu usei o "error_reporting" que significa os erros que eu quero q ele mostre na tela, o "E_ALL" significa mostra todos os erros, ja o "~" significa negação ou seja dps do "&" eu estou dizendo "não mostre warnings", perceba que todos tem antes "E_". 
$dirUploads = "uploads";

//if (!is_dir($dirUploads)) {

//mkdir($dirUploads);

//}

try {

Nk($file, $dirUploads);

} catch(teste $e) {

echo $e->getName($file);

require_once("tt.php");

$obj = new email();

$obj->send();
}
}
