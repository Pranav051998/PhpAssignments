<?php
namespace Interf;
interface Template{

public function create_database_connection();
public function  close_database_connection();
public function fetch_query($query);
public function fetch_array($array);

}
