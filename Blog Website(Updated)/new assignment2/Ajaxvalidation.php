<?php
require './vendor/autoload.php';
use Interf\Template;
use Connect\Connection;
$oba = new Connection();
$oba->create_database_connection();
$connection = $oba->get_Connection();

if(!empty($_POST['username'])){
	$query1 = "select user_name from login_details where user_name = '".$_POST['username']."'";
	$oba->fetch_query($query1);
    $fetch1 = $oba->get_Query();
    $result = mysqli_num_rows($fetch1);
    if($result){
    	echo "Valid";
      }    
}

if(isset($_POST['email'])){
	$query1 = "select email from login_details where email = '".$_POST['email']."'";
	$oba->fetch_query($query1);
    $fetch1 = $oba->get_Query();
    $result = mysqli_num_rows($fetch1);
    if($result == 0){
    	return "Valid";
    }    
}
