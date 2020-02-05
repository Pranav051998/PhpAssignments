<html>
<head>
</head>
<body>
	<h1> What is your pet name?</h1>
	<form action="" method=POST>
		<input type="text" name="value">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
<?php
 session_start();
 echo $_POST['value']."<br>";
 echo $_SESSION['answer']."<br>";
 if($_POST['value']==$_SESSION['answer'])
 {
 	header("Location:reset.php");

 }
 else
 {
 	echo "Wrong Answer!";
 }

?>