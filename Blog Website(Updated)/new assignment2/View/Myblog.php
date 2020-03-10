<html>
<head>
    <link rel='stylesheet' type='text/css' href='/new assignment2/css/blog.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
<div class='navigation'>
    <h1>My Blogs</h1>
        <ul>
            <div class='adder'>
		    <form action='/new assignment2/index.php/Manipulate' method='POST'>
		    <input type='submit' name='add' class='add' value='ADD BLOGS'>
		    <input type='hidden' name='fetchadd' value=<?php $authorname ?> >
		    </div>
		    <li><a href='/new assignment2/index.php/Logout'>Logout</a></li>
		    <li><a href='/new assignment2/index.php/Profile'>Profile</a></li>
	    </ul>
</div>
</head>
</html>

