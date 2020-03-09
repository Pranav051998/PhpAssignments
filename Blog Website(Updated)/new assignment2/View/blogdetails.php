<html>
<head>
   <link rel="stylesheet" type="text/css" href="/new assignment2/css/blog.css">
    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<body>
<div class='container'>
    <div class="border">
    <div class="card" style='width:300px;height:100px'>
                <?php $row['image'] = str_replace("..","",$row['image'])?><!--extra line -->
     <img class="card-img-top" src= <?php echo $row['image']?> alt='Card image'style='width:100%'>
    <div class="card-body">
     <h5 class="card-title">Blog_No: <?php echo $row['blog_no'] ?></h5>
    <h5 class="card-title">Title:<?php echo $row['title'] ?></h4>
    <h5 class="card-title">Date:<?php echo  $row['date'] ?></h4>
    <?php $blog_no = $row['blog_no']?>
    <form action='/new assignment2/index.php/Read' method='POST'>
        <input type='submit' name='read' value='Read more'>
        <input type='hidden' name='fetch' value=<?php echo $blog_no ?> >
    </form>
  </div>
</div>
</div>
</div>
</body>
</html>
<!--href="../css/blog.css?v=1"-->
<!--form action'../Controller/Read.php-->