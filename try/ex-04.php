<form method="POST" enctype="multipart/form-data">

<input type="file" name="fileUpload">

<button type="submit">Send</button>

</form>

<?php

require_once("config.php");



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

$dirUploads = "uploads";

//if (!is_dir($dirUploads)) {

//mkdir($dirUploads);

//}

try {

Nk($file, $dirUploads);

} catch(teste $e) {

echo $e->getName($file);

}

}

