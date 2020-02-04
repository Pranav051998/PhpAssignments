<?php
function difference($array1,$array2)
{  
	$counter=count($array1[0]);
	for($i=0;$i<$counter;$i++)
	{
		$differ=$array1[0][$i]-$array2[0][$i];
		$differ=abs($differ);
		echo "The difference is:".$differ."<br>";
		
	}
}
$array1=array(
  array(7,8,9,10)
);
$array2=array(
  array(11,18,20,25)
);

difference($array1,$array2);

?>