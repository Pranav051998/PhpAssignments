<?php
session_start();
require './vendor/autoload.php';
use Interf\Template;
use Connect\Connection;

if((isset($_SESSION['username']) && isset($_SESSION['password'])) || (isset($_SESSION['google']))){

  $ob = new Connection();
  $ob->create_database_connection();//it establishes a connection to the databases with the created object 
  $query = "SELECT * FROM blogs_details where author_name='Chetan Bhagat'";
  $ob->fetch_query($query);
  $fetch = $ob->get_Query();
  $ob->fetch_array($fetch);
  $author = $ob->get_Query_Array();//after Fetching the sql query it returns
  $authorname = $author['author_name'];
  $_SESSION['authorname'] = $authorname;

  require 'View/Myblog.php';

  $ob->fetch_query($query);
  $result = $ob->get_Query();
      
  if (mysqli_num_rows($result) > 0){

   	//To display the list of blogs that a user have
   	for($i = 0;$i <mysqli_num_rows($result);$i++){

         $ob->fetch_array($result);
         $row = $ob->get_Query_Array();
         require 'View/myblogdetails.php'; 	         	
   	}

  }
require 'Footer.html';
}  

?>
