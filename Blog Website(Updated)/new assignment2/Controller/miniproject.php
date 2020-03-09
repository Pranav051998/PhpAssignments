<?php
require './vendor/autoload.php';
use Interf\Template;
use Connect\Connection;
ob_start();//added due to error "Cannot modify header information – headers already sent"
session_start();


if(!isset($_SESSION['username'])){

    if(isset($_POST['login'])){

      $ob1 = new Connection();
      $ob1->create_database_connection();
      $query0 = "select count(*) from login_details";
      $query1 = "select user_name from login_details where User_name = '".$_POST['name']."'";
      $query2 = "select password from login_details where password = '".$_POST['password']."'" ;
      $ob1->fetch_query($query1);
      $fetch1 = $ob1->get_Query();
      $ob1->fetch_array($fetch1);
      $fetchquery1 = $ob1->get_Query_Array();
      $ob1->fetch_query($query2);
      $fetch2 = $ob1->get_Query();
      $ob1->fetch_array($fetch2);
      $fetchquery2 = $ob1->get_Query_Array();
      

      $_SESSION['matchname'] = $_POST['name'];
      $_SESSION['matchpassword'] = $_POST['password'];
      
        if(mysqli_num_rows($fetch1)>0 && mysqli_num_rows($fetch2)>0){
            
            $_SESSION['username'] = $fetchquery1['user_name'];
            $_SESSION['password'] = $fetchquery2['password']; 
            header('location:/new assignment2/index.php/blog');  
        }  
      }
   	     
   if(isset($_POST['register'])){
        header("location:/new assignment2/index.php/Register");
   }
}

if(isset($_SESSION['username'])){
   header('location:/new assignment2/index.php/blog');
}

?>

