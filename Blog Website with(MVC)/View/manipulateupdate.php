<!DOCTYPE html>
<html>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"><!-- bootstrap css-->
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link rel="stylesheet" type="text/css" href="/new assignment2/css/blog.css">
</head>
<body>

<div class="addblog">
<div class="container register-form">
   
   <div class="form">
      <div class="note">
         <p>Registeration Form </p>
      </div>
      <div class="form-content">
         <form action='/new assignment2/index.php/Controller/Manipulate.php' method='POST'>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  Blog:<textarea rows='5' cols='20' name='quote' wrap='physical'><?php echo $row['blog'] ?></textarea>
               </div>
               
            </div>
         </div>
            <input type='submit' id='editupdate'  value='Submit'>
         </form>
      </div>
    </div>
</div>
</div>


<!--	<div class='update'>
  	    <form action='' method='POST'>
            <textarea rows='5' cols='20' name='quote' wrap='physical'><?php echo $row['blog'] ?></textarea>
            <br>
            <input type='submit' id='editupdate' value='Submit'>
        </form>
    </div>
-->
</body>
</html>

<!--href="../css/blog.css"-->