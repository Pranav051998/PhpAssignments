<?php
echo "<script> alert('Indexcode');</script>";
//echo 'success';
session_start();

$code = $_POST['code'];

if($code == $_SESSION['captcha_code'])
{
	echo "success";
	//header('location:/new assignment2/index.php/Controller/miniproject');
}