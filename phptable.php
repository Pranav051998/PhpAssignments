<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method=POST>
		<input type="number" name="value" >
		<input type="submit" name="submit" value="submit">
	</form>
 <?php
    $size=$_POST['value'];
    if($size!="")
    {
	    echo "<table style='border:2px solid black'>";
	    for($i=1;$i<=$size;$i++)
	    {   echo "<tr style='border:2px solid black'>";
	    	for($j=1;$j<=$size;$j++)
	    	{
	    		$temp=$i*$j;
	    		echo "<td style='border:2px solid black'>".$i."*".$j."=".$temp."</td>";
	    	}
	    	echo "</tr>";
	    }
	    echo "</table>";
    }
    else
    {
        echo "Please enter a value";
    }
  ?>
</body>
</html>