<?php

/*if ($_SERVER["REQUEST_METHOD"]=="POST") 
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



      
}*/
if (isset($_POST[upload])){
  $file_name= $_FILES['file']['name'];
  $file_type= $_FILES['file']['type'];
  $file_size= $_FILES['file']['size'];
  $file_tem_Loc= $_FILES['file']['tmp_name'];
  $file_store= "upload/".$file_name;
  move_uploaded_file($file_tem_Loc,$file_store);
  echo "<img src=".$file_store.">";
}
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