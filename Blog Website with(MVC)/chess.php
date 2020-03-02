<html>
<head>
	<link rel="stylesheet" href="chesscolor.css">
</head>
<body>
<?php
$max_length=8;
$max_width=8;

  for($i=1;$i<=$max_length;$i++)
  {
  	 for($j=1;$j<=$max_width;$j++)
  	 {
  	 	if($i%2!=0)
  	 	{
          echo "<div class='white'></div>";
          echo "<div class='black'></div>";

  	 	}

  	 	if($i%2==0)
  	 	{
          echo "<div class='black'></div>";
          echo "<div class='white'></div>";
  	 	}

  	 }echo "<br>";
  }
?>
</body>
</html>
