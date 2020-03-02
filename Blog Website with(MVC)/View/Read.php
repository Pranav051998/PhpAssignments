<?php
require '../Controller/connection.php';

  if(isset($_POST['read'])) {
    
  	$index = $_POST['fetch'];
  	$ob4 = new connection();
  	$ob4->create_database_connection();
  	$query = "SELECT * FROM blogs_details where blog_no = ".$index." ";
  	$ob4->fetch_query($query);
  	$result = $ob4->get_Query();
  	$ob4->fetch_array($result);
  	$fetchquery = $ob4->get_Query_Array();
    require '../View/Readdetail.php';
  	//echo $fetchquery['blog'];
  	
  }