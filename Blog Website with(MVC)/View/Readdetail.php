<html>
<head>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"><!-- bootstrap css-->
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       
   <link rel="stylesheet" type="text/css" href="/new assignment2/css/blog.css"><!--my css-->
</head>
<body>
<div class="addblog">
<div class="container register-form">
   
   <div class="form">
      <div class="note">
         <p>Blog </p>
      </div>

      <div class="form-content">
         
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <?php echo $fetchquery['blog'] ?>
               </div>
               
            </div>
         </div>
         
      </div>
   </div>  
</div>
</div>
</body>
</html>
<!--href="../css/blog.css"-->