<?php
session_start();
$str=rand();
$text=$_SESSION['code']=substr(md5($str), 0,6);
$create_image = imagecreate(100,30);
imagecolorallocate($create_image, 51, 112, 183);
$text_color=imagecolorallocate($create_image, 255, 255, 255);
imagestring($create_image, 5, 15, 7, $text, $text_color);
header("Content-type:image/jpeg");
imagejpeg($create_image);
imagedestroy($create_image);
 ?>