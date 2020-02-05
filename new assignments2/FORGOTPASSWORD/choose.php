
  <html>
    <head>
    	<link rel="stylesheet" type="text/css" href="css2.css?v=2">
    	<link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet'>
</head>
	
	<body class="choosebody">
		<h2 class="choosehead" >Welcome To The Page</h2>
		<div class="boder">
		<a class="links" href="first.php">Assignment 1</a>
		<a class="links" href="Second.php">Assignment 2</a>
		<a class="links" href="Third.php">Assignment 3</a>
		<a class="links" href="Fourth.php">Assignment 4</a>
		<a class="links" href="Five.php">Assignment 5</a>
		<a class="links" href="Six.php">Assignment 6</a>
	    <a href="logout.php">logout</a>
	    </div>
	</body>
</html>

<?php
  session_start();
  if(!isset($_SESSION['employee_email']) && !isset($_SESSION['employee_password']))
  {
     header("location:login.php");}
else if(isset($_GET["q"]))
 {$variable=$_GET["q"];
    if($variable=="1")
      header("Location:first.php");
    else if($variable=="2")
      header("Location:Second.php");
    else if($variable=="3")
      header("Location:Third.php");
    else if($variable=="4")
      header("Location:Fourth.php");
    else if($variable=="5")
      header("Location:Five.php"); 
  }

  
  ?>
