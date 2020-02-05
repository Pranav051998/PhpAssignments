<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <form action="" method="POST">
  	<h3>New Password</h3>
  	<input type="text" name="reset">

  	<input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{session_start();
$servername = "localhost";
$username = "root";
$password = "Pranav@1998";
$dbname = "login";
 $connection = new mysqli($servername, $username, $password, $dbname);
 $newpass=$_POST['reset'];
 echo $newpass;
 $email=$_SESSION['employee_email'];
 echo $email;
 $update="update login_details set  employee_password='$newpass' where employee_email='$email'";
 $getupdate=mysqli_query($connection, $update);
 $rowupdate = mysqli_fetch_assoc($getupdate);
 $_SESSION['employee_password']=$rowupdate['employee_password'];
 echo $_SESSION['employee_password'];
 //header("location:login.php");
}
 ?>
