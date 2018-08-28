<?php

$url = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$teste = file_get_contents($url);

$parse = parse_url($url);

var_dump($parse);

$basename = basename($parse["path"]);

$filename = "Tirulipa";
$filename2 = "Ximpa";

if (!is_dir($filename)) {
	mkdir($filename);
}
if (!is_dir($filename2)) {
	mkdir($filename2);
}

if (!file_exists($filename . DIRECTORY_SEPARATOR .$basename)){
$file = fopen($filename . DIRECTORY_SEPARATOR .$basename, "w+");

fwrite($file, $teste);

fclose($file);
}

rename($filename . DIRECTORY_SEPARATOR .$basename, $filename2 . DIRECTORY_SEPARATOR .$basename);

?>