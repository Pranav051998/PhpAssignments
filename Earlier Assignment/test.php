<?php

//Checking through isset whether image is avialable or not
if (isset($_POST[upload])){
  $file_name= $_FILES['file']['name'];
  $file_type= $_FILES['file']['type'];
  $file_size= $_FILES['file']['size'];
  $file_tem_Loc= $_FILES['file']['tmp_name'];
  $file_store= "upload/".$file_name;
  move_uploaded_file($file_tem_Loc,$file_store);//this function is used to upload file from temporary storage to your device
  echo "<img src=".$file_store.">";
}
//Checking whether method is post or not if it is then it will enter in "if " condition
if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
  
  $firstname = $_POST["fname"];
           if (preg_match("/^[a-zA-Z ]*$/",$firstname)) 
           
      { 
            $lastname = $_POST["lname"]; 
             if(preg_match("/^[a-zA-Z]*$/",$lastname))
               {
                $Fullname=$firstname." ".$lastname;
                echo "<br>";
                echo "Hello ".$Fullname."<br>";
                
               }
               
       }
//This Function will replace '|' symbol with new line
     $string=preg_replace("/[|]/", "\n", $_POST["comments"]);
 //Explode function will break the String after every  new line and covert to array      
$case=explode("\n", $string);


echo "<table border='1px solid black'>";
 echo "<tr>";
    echo "<th>Subject</th>";
    echo "<th>Marks</th>";
  echo "</tr>";
for($i=0;$i<count($case);$i++) 
 {  echo "<tr>";
    echo "<td>".$case[$i]."</td>";
    $i++;
    echo "<td>".$case[$i]."</td>";
    echo "</tr>";
     }
     echo "</table>";
     //for checking Telephone number
      $telephone=$_POST["phone"];

      if(preg_match("/^[+91]{3}[1-9]{1}[0-9]{9}$/",$telephone))
         {
          echo "Mobile No:".$telephone;}
}

?>