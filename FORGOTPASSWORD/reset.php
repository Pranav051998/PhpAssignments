<?php
session_start();
if(isset($_SESSION['employee_email'])&&isset($_SESSION['employee_password'])&&isset( $_SESSION['security_question'])&&isset($_SESSION['answer']))
{   ?>
	<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
    <form action="" method=POST>
  	  <h3>New Password</h3>
  	  <input type="password" name="reset">
  	  <input type="submit" name="submit1" value="Submit">
  	  <a href="logout.php"></a>
    </form>
    </body>
    </html>

    <?php    
	if(isset($_POST['submit1']))
	{ $count=0;
	  $servername = "localhost";
	  $username = "root";
	  $password = "Pranav@1998";
	  $dbname = "login";
	  $connection = new mysqli($servername, $username, $password, $dbname);
	  $newpass=$_POST['reset'];
	  $email=$_SESSION['employee_email'];
	  echo $email;
	  $update="update login_details set  employee_password='$newpass' where employee_email='$email'";
	  $getupdate=mysqli_query($connection, $update);
	  $rowupdate = mysqli_fetch_assoc($getupdate);
	  $_SESSION['employee_password']=$rowupdate['employee_password'];
	  echo $_SESSION['employee_password'];
	  $count++;
	}
	if($count==1)
		header("Location:login.php");
}
else
{
	header("Location:login.php");
}	
 ?>
   
