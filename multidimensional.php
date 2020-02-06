<?php
function difference($array1,$array2)
{   $difference=0;
	$counter=count($array1[0]);
	/*for($i=0;$i<$counter;$i++)
	{
		$differ=$array1[0][$i]-$array2[0][$i];
		$differ=abs($differ);
		echo "The difference is:".$differ."<br>";
		
	}*/
	for($i=0;$i<$counter;$i++)
	{
		for($j=0;$j<$counter;$j++)
		{
			if(($array1[0][$i])!=($array2[0][$j]))
				$difference++;
		}
		if($difference==$counter)
			echo $array1[0][$i]."<br>";
		    $difference=0;
	}
}
$array1=array(
  array(11,18,9,10)
);
$array2=array(
  array(11,18,20,25)
);

difference($array1,$array2);

?>