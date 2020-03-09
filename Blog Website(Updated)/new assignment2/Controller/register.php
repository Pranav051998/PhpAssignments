
<?php
session_start();
require 'View/registerdet.html';
require './vendor/autoload.php';
use Interf\Template;
use Connect\Connection;
   
$obr = new Connection();
$obr->create_database_connection();
$connection = $obr->get_Connection();

if(isset($_POST['submit'])){
     
  if((preg_match("/[A-Za-z0-9]+@[A-za-z]+\.[A-Za-z]+/",$_POST['email'])) && (preg_match("/[A_Za-z]{4}[0-9]{4}/",$_POST['username']))){
      
    $query1 = "select count(User_name) from login_details where User_name ='".$_POST['username']."'";
    $fetchquery1 = mysqli_query($connection, $query1);
    $check = mysqli_fetch_array($fetchquery1);
    echo "<br>";
      if($check[0] <1){ 

       $sql = "INSERT INTO login_details(Email,User_name,password,Full_name,telephone) values('".$_POST['email']."','".$_POST['username']."' ,'".$_POST['Password']."' , '".$_POST['firstname'].$_POST['lastname']."' , '".$_POST['telephone']."')";
   
        if($connection->query($sql) === TRUE){

          echo "Account Created Successfully";
          header("location:/new assignment2/index.php/Login");
        }
        else {

          echo "Error: " . $sql . "<br>" . $connection->error;
        }     
      }
  }

}


