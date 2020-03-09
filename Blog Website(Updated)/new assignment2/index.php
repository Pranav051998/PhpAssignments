<?php
$url = basename($_SERVER['REQUEST_URI']);
if($url == "index.php") {
  include(__DIR__."/Controller/miniproject.php");
}
if($url == "blog"){
	include( __DIR__."/Controller/blog.php");
}
if($url == "Read"){

	include(__DIR__."/Controller/Read.php");
}
if($url == "Myblogs"){

	include(__DIR__."/Controller/Myblogs.php");
}
if($url == "Logout"){

	include(__DIR__."/Controller/userlogout.php");
}
if($url == "Login"){
 
	include(__DIR__."/Controller/miniproject.php");
}
if($url == "Manipulate"){

	include(__DIR__."/Controller/Manipulate.php");
}
if($url == "Profile"){

	include(__DIR__."/Controller/Profile.php");
}
if ($url == "Register") {
	include(__DIR__."/Controller/register.php");
}
if($url != "index.php" && $url != "blog" && $url != "Read" && $url != "Myblogs" && $url != "Logout" && $url != "Login" && $url != "Manipulate" && $url != "Profile" && $url != "Register"){
	include(__DIR__."/404.html");
}


