<?php

header("Content-type: image/jpeg");

$new_w = 256;
$new_h = 256;

$img = "wallpaper.jpg";
list($old_w, $old_h) = getimagesize($img);

$new_image = imagecreatetruecolor($new_w, $new_h);

$old_image = imagecreatefromjpeg($img);


imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_w, $new_h, $old_w, $old_h);

imagejpeg($new_image);

imagedestroy($new_image);
imagedestroy($old_image);

?>