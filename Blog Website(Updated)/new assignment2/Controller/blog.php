<?php

require './View/blognavbar.html';

session_start();

  if(isset($_SESSION['username'])){
        //it basically checks if user is logged in then it will show Logout button else will show Login button
		if(($_SESSION['username'] == $_SESSION['matchname']) && ($_SESSION['password'] == $_SESSION['matchpassword'])){

        echo  "<li><a href='/new assignment2/index.php/Logout'>Logout</a></li>";
     }
	}

	else{
    if(isset($_SESSION['google'])){
      echo  "<li><a href='/new assignment2/index.php/Logout'>Logout</a></li>";
    }
    else{
		  echo "<li><a href='/new assignment2/index.php/Login'>Login</a></li>";
    }
  }
		    

    echo "</div>";
    echo "</body>";
    echo "</html>";
		   
?>

	
<?php
require './vendor/autoload.php';
use Interf\Template;
use Connect\Connection;

	
  $ob2 = new Connection();//Creation object for connection class through we will establish connection and fetch sql queries
  $ob2->create_database_connection();	
  $query = "SELECT * FROM blogs_details";  
  $ob2->fetch_query($query);
  $fetch = $ob2->get_Query();
         

  //It basically checks if there are blogs present in table it will fetch and display it line by line
  if (mysqli_num_rows($fetch) > 0){

    for($i = 0;$i <mysqli_num_rows($fetch);$i++){
         
      $ob2->fetch_array($fetch);
      $row = $ob2->get_Query_Array();//it basically uses mysqli_fetch_assoc function and get the desired array         	
      require './View/blogdetails.php';            
    }
  }
require './Controller/Footer.html';
?>
