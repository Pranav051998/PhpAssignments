<?php
 session_start();
 if(isset($_SESSION['employee_email']) && (isset($_SESSION['employee_password'])))
  {
    header("Location:choose.php");
  }
?>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href='css2.css?v=2'>
</head>
<body class="loginform">
    <form action="loginform.php" method="POST" enctype="multipart/form-data">
    	<h1>LOGIN</h1>
    	<div class="first">
        Name:<input type="text" name="name"><br><br>
        </div>
        <div class="Second">
        Password:<input type="password" name="password1"><br><br>
        </div>
        <div class="Third">
                <input type="Submit" name="submit" value="Submit">
                <input type="Submit" name="forget" value="Forget Password">
        </div>
    </form>
</body>
</html>

