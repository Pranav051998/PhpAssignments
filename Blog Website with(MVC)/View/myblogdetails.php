<!DOCTYPE html>
<html>
<head>
    <!--<script src="../js/demo.js"></script> -->
    <script>
         $(document).ready(function(){
      $("#delete" ).click(function() {
        alert( "Warning! Do you want to delete this blog" );
      });
    });
    </script>
</head>
<body>


   <div class='container'>
	<div class='border'>
            <div class='card' style='width:300px;height:100px'>
               <?php $row['image'] = str_replace("..","",$row['image'])?><!--extra line -->
                <img class='card-img-top' src=<?php echo $row['image'] ?> alt='Card image' style='width:100%'>
                <div class='card-body'>
                <h4 class='card-title'>Blog_no:<?php echo $row['blog_no'] ?> </h4>
                <h4 class='card-title'>Title:<?php echo $row['title'] ?></h4>
                <h4 class='card-title'>Date:<?php echo $row['date'] ?></h4>
                <p class='card-text'><?php echo  $row['blog'] ?> </p>
                <?php $blog_no = $row['blog_no'] ?>
	         	<form action='/new assignment2/index.php/Controller/Manipulate' method='POST'>
	         	    <input type='submit' name='update' class='btn btn-primary' id='edit' value='EDIT'>  
	         	    <input type='hidden' name='fetchupdate' value=<?php echo $blog_no ?> >
	         	    <input type='submit' name='delete' id='delete' class='btn btn-primary'value='DELETE' id='delete'>
	         	    <input type='hidden' name='fetchdelete' value=<?php echo  $blog_no ?> >
	                </form>
                </div>
            </div>
        </div>
   </div>
</body>
</html>
<!--<form action='../Controller/Manipulate.php'-->