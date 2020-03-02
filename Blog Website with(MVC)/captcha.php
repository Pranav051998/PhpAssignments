<?php

session_start();

$random_alpha = md5(rand());
$captcha_code = substr($random_alpha,0,6);

$_SESSION['captcha_code'] = $captcha_code;
header('Content-Type:image/png');

$image = imagecreatetruecolor(200,38);

//print_r($image);*/

$background_color = imagecolorallocate($image,231,100,18);//for orange color

$text_color = imagecolorallocate($image, 255, 255, 255);//for white color

imagefilledrectangle($image, 0, 0, 200, 40,$background_color);

//$font = 12345;

$font = dirname(__FILE__).'/arial.ttf';//path

imagettftext($image, 20, 0, 60, 38, $text_color,$font, $captcha_code);//to add text on image

imagepng($image);//createimage

imagedestroy($image);


