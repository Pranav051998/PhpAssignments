<?php
namespace Connect;
require './vendor/autoload.php';
use Interf\Template;

class Connection implements Template{

public $servername,$username,$password,$dbname,$fetch_query,$connection;
public $fetch_query_arr = [];  

public function create_database_connection(){

     $this->servername = "localhost";   
     $this->username   = "root";
     $this->password   = "Pranav@1998";
     $this->dbname     = "miniproject";

     //Establishing a connection to database
     $this->connection =  mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
 
     if ($this->connection->connect_error) {

	     die("Connection failed: " . $this->connection->connect_error);

     } 
     
}

public function get_Connection(){

	return $this->connection;
}

public function  close_database_connection(){

	$mysqli -> close();
}


public function fetch_query($query){

    $this->fetch_query = mysqli_query($this->connection,$query);
    //return $this->fetch_query_arr;
}
public function fetch_array($array){

	$this->fetch_query_arr = mysqli_fetch_assoc($this->fetch_query);
}
public function get_Query(){

	return $this->fetch_query;
}
public function get_Query_Array(){

	return $this->fetch_query_arr;
}

}
?>
