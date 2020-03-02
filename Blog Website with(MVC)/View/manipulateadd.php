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
         <p>ADD BLOG DETAILS </p>
      </div>
      <div class="form-content">
         <form action='/new assignment2/index.php/Controller/Manipulate' method="POST" enctype='multipart/form-data'>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  Title :<input type='text' name='title' required>
               </div>
               <div class="form-group">
                 Blog  :<textarea rows='5' cols='20' name='quote1' wrap='physical'></textarea> 
               </div>
               <div class="form-group">
                  Image :<input type='file' name='file' id='pic' required>
               </div>
               <div class="form-group">
               	  <input type='submit' name='Submit1' id="registrationsubmit" value='Submit'>
               </div>
            </div>  
          </div>
        </form>
      </div>
    </div>
</div>
</div>

</body>
</html>
 <!--href="../css/blog.css-->