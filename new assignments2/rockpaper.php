<html>
<head>
</head>
<body>
<?php
$input = array("Rock","Paper","Scissors");
$computer = array_rand($input);
echo "<form action='#' method='post'>";
echo  "<select name='Game'>";
echo  "<option value='None'>None</option>";
echo  "<option value='Rock'>Rock</option>";
echo  "<option value='Paper'>Paper</option>";
echo  "<option value='Scissors'>Scissors</option>";
echo  "</select>";
echo  "<input type='submit' name='submit' value='Get Selected Values' />";
echo  "</form>";
echo  "Computer has choosen:".$input[$computer]."<br>";
   if(isset($_POST['submit']))
   {
      $selected_val = $_POST['Game'];  // Storing Selected Value In Variable
      echo "User has choosen:".$selected_val."<br>";
        if($input[$computer]=="Rock")
        {
           if($selected_val=="Rock")
           	  echo "TIE";
           	else if($selected_val=="Paper")
           	  echo "User Wins";
           	else if($selected_val=="Scissors")
           	  echo "Computer Wins";
           	else
           		echo "Select a value";
        }
        if($input[$computer]=="Paper")
        {   
        	if($selected_val=="Paper")
           	  echo "TIE";
           	else if($selected_val=="Scissors")
           	  echo "User Wins";
           	else if($selected_val=="Rock")
           	  echo "Computer Wins";
           	else
           		echo "Select a value";

        }
        if($input[$computer]=="Scissors")
        {   
        	if($selected_val=="Scissors")
           	  echo "TIE";
           	else if($selected_val=="Paper")
           	  echo "Computer Wins";
           	else if($selected_val=="Rock")
           	  echo "User Wins";
           	else
           		echo "Select a value";

        }
        
    }
?>
</body>
</html>