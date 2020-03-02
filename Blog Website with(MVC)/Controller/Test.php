 <?php
     $servername = "localhost";   
     $username   = "root";
     $password   = "Pranav@1998";
     $dbname     = "miniproject";

     //Establishing a connection to database
     $connection = new mysqli($servername, $username, $password, $dbname);
 
     if ($connection->connect_error) {

	     die("Connection failed: " . $connection->connect_error);

     } 
     else{

     	echo "established";
     }