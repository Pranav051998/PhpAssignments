
<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
  
  $firstname = $_POST["fname"];
           if (preg_match("/^[a-zA-Z ]*$/",$firstname)) 
           
      { 
            $lastname = $_POST["lname"]; 
             if(preg_match("/^[a-zA-Z]*$/",$lastname))
               {
                $Fullname=$firstname.$lastname;
                echo"Hello ".$Fullname;
                
               }
               
       }

      
}
?>
 



