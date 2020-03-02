<?php
require './vendor/autoload.php';
use Interf\Template;
use Connect\Connection;
session_start();
require 'View/miniproject.html';

if(!isset($_SESSION['username'])){

  if(isset($_POST['login'])){

    $ob1 = new Connection();
    $ob1->create_database_connection();
    $query0 = "select count(*) from login_details";
    $query1 = "select user_name from login_details";
    $query2 = "select password from login_details";
    $ob1->fetch_query($query0);
    $fetch = $ob1->get_Query();
    $ob1->fetch_array($fetch);
    $fetchquery0 = $ob1->get_Query_Array();
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
    
    for($i = 0; $i < $fetchquery0['count(*)']; $i++){

        print_r($fetchquery1);
        echo "<br>";
        print_r($fetchquery2);
        echo "<br>";
      	
      if(($_POST['name'] == $fetchquery1['user_name']) && ($_POST['password'] == $fetchquery2['password'])){
            
         $_SESSION['username'] = $fetchquery1['user_name'];
         $_SESSION['password'] = $fetchquery2['password']; 
         header("location:./index.php");
           
        }

      else{

        echo "fail";
        }
      }
   	     
    }

   if(isset($_POST['register'])){
 
      header("location:/new assignment2/index.php/Controller/Register");
   }
}

if(isset($_SESSION['username'])){

  header('location:/new assignment2/index.php/Controller/blog');
}

?>

