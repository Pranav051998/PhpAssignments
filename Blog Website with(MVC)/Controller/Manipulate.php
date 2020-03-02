<?php
session_start();
require './vendor/autoload.php';
use Interf\Template;
use Connect\Connection;
//require 'Model/connection.php';
//require '../Model/connection.php';
echo "<html>";
echo "<head>";
    echo "<link rel='stylesheet' type='text/css' href='/new assignment2/css/blog.css'>";
echo "</head>";
echo "</html>";


$obm = new connection();
$obm->create_database_connection();//creating database connection
$connection = $obm->get_Connection();

class Add{
   
   public $author_name,$title,$blog,$image;
  function __construct($author_name,$title,$blog,$image){

     $this->author_name = $author_name;
     $this->title = $title;
     $this->blog = $blog;
     $this->image = $image;

}
 
 public function get_author_name(){

    return $this->author_name;
 }

 public function get_title(){

    return $this->title;
 }

 public function get_blog(){

    return $this->blog;
 }

 public function get_image(){

    return $this->image;
 }

 public function add_to_database(){
    
    
    require 'Model/Test.php';
    //require '../Model/Test.php';
    /*$oba = new Connection();
    $oba->create_database_connection();
    $connection = $obm->get_Connection();*/

    $file_name= $_FILES['file']['name'];
    $file_type= $_FILES['file']['type'];
    $file_size= $_FILES['file']['size'];
    $file_tem_Loc= $_FILES['file']['tmp_name'];
    $file_store = "/upload/".$file_name;
    //$file_store= "../upload/".$file_name;
    move_uploaded_file($file_tem_Loc,$file_store);//this function is used to upload file from temporary storage to your local

    //for blog,author,title insertion
    $blog = $this->blog;
    echo $blog;
    $author = $this->author_name;
    $title = $this->title;
    $sql = "insert into blogs_details(author_name,title,blog,image) values ('".$author."','".$title."','".$blog."','".$file_store."')";

    if(($connection->query($sql) == TRUE)){
   
        echo "Added Successfully";
      }
    else {
            echo "Error: " . $sql . "<br>" . $connection->error;
      }

 }

}


$ob = [];//Array of Objects

if(isset($_SESSION['username']) && isset($_SESSION['password'])){

    require 'View/manipulatenav.php';
    //require '../View/manipulatenav.php';

  if(isset($_POST['update'])){

    $index = $_POST['fetchupdate'];
    $_SESSION['update'] = $index;
    echo $_SESSION['update'];
    
    
  	$fetchupdate = mysqli_query($connection,"SELECT blog FROM blogs_details where blog_no=".$index." ");

  	while($row = mysqli_fetch_assoc($fetchupdate)){
       
         require 'View/manipulateupdate.php';       
       //require '../View/manipulateupdate.php'; 
       

      }
    }

    if(isset($_POST['quote'])){

        $update = $_POST['quote'];
        $sql = "update blogs_details set blog='".$update."' where blog_no='".$_SESSION['update']."'";


        if(($connection->query($sql) === TRUE)){

   	 	      echo "Updated Successfully";
   	 	}

   	}
  
    if(isset($_POST['delete'])){
   
       $index = $_POST['fetchdelete'];
  	   $sql = "delete from blogs_details where blog_no='".$index."'";

  	   if(($connection->query($sql) == TRUE)){
   
  	   	echo "Deleted Successfully";
  	   }

    }

  if(isset($_POST['add'])){

  	$index = $_POST['fetchadd'];
  	$_SESSION = $index;
    require 'View/manipulateadd.php';
    //require '../View/manipulateadd.php';
   /* echo "<div class='addblog'>";
  	    echo "<form action='' method='POST' enctype='multipart/form-data'>";
  	        //echo "Author's Name :" . "<input type='text' name='author'>" . "<br>";
  	        echo "Title :" . "<input type='text' name='title'>"  . "<br>";
            echo "Blog :" . "<textarea rows='5' cols='20' name='quote1' wrap='physical'>"."</textarea>" . "<br>";
            echo "Image :" . "<input type='file' name='file' id='pic' required>";
            echo "<input type='submit' name='Submit1' value='Submit'>";
        echo "</form>";
    echo "</div>";*/
    

  }

if(isset($_POST['Submit1'])){
      echo "hii";
      $ob = new Add($_SESSION['authorname'],$_POST['title'],$_POST['quote1'],$_POST['file']);
      $ob->add_to_database();
    }
}
  

else{
  header('location:../Controller/miniproject.php');
}

 ?>
 <!--href='../css/blog.css'-->