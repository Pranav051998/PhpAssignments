

<?php
 session_start();
 if(isset($_SESSION['employee_email'])&&isset($_SESSION['employee_password'])&&isset( $_SESSION['security_question'])&&isset($_SESSION['answer']))
	{   ?>
	 <html>
     <head>
     </head>
     <body>
	    <h1> What is your pet name?</h1>
	    <form action="" method=POST>
		<input type='text' name='value'>
		<input type='submit' name='submit' value='submit'>
		<a href='logout.php'></a>
	    </form>
        </body>
        </html>
        <?php
        if (isset($_POST['value'])) 
        { echo "you are here";
		 if($_POST['value']==$_SESSION['answer'])
		 {  
		 	header("Location:reset.php");

		 }
		 else
		 {
		 	echo "Wrong Answer!";
		 }
		}
    }
 else
 {
 	header("Location:login.php");
 }
?>
 