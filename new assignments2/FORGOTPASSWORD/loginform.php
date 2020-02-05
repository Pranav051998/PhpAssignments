<?php 
$servername = "localhost";
$username = "root";
$password = "Pranav@1998";
$dbname = "login";
$connection = new mysqli($servername, $username, $password, $dbname);
  if ($connection->connect_error) {
          die("Connection failed: " . $connection->connect_error);
      } 
      //to create table
      $table="CREATE TABLE login_details(employee_email varchar(30) NOT NULL,employee_password varchar(30) NOT NULL,security_question varchar(30),answer varchar(30),PRIMARY KEY (employee_email))";
      if (($connection->query($table)==TRUE)) 
      {
        echo "Tables created successfully";
      }
      
  session_start();
  $email="Select employee_email from login_details";
  $password="Select employee_password from login_details";
  $security="Select security_question from login_details";
  $answer="Select answer from login_details";
  $getemail=mysqli_query($connection, $email);
  $getpassword=mysqli_query($connection,$password);
  $getsecurity=mysqli_query($connection,$security);
  $getanswer=mysqli_query($connection,$answer);
  $row1 = mysqli_fetch_assoc($getemail);
  $row2 = mysqli_fetch_assoc($getpassword);
  $row3 = mysqli_fetch_assoc($getsecurity);
  $row4 = mysqli_fetch_assoc($getanswer);
  $_SESSION['employee_email']=$row1['employee_email'];
  $_SESSION['employee_password']=$row2['employee_password'];
  $_SESSION['security_question']=$row3['security_question'];
  $_SESSION['answer']=$row4['answer'];
  echo $_SESSION['answer'];
  if(($_POST["name"]==$_SESSION['employee_email'])&&($_POST["password1"]==$_SESSION['employee_password']))
    {  header("Location:choose.php"); }
  else
  {
    header("Location:forget.php");
   }
   ?>
