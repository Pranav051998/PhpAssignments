<?php

class Student_details {
	 public function __construct($name,$gender) {
	       $this->name = $name;
	       $this->gender = $gender;
	 }
	 
	 public function get_name(){
	 	   return $this->name;
	 }
	 public function get_gender(){
           return $this->gender;
     }
	 
}   
    $details=[
    	'Pranav'=>'M',
    	'Kaustab'=>'M',
    	'Shubhosree'=>'F',
    	'Sakshi'=>'F',
    	'Mouli'=>'F',
    	'Asit'=>'M',
    	'Jaswin'=>'M',
    	'Shubham'=>'M',
    	'Rishav'=>'M',
    	'Abhinav'=>'M',
    ];
$ob1=[];
$count=count($details);//to count total no. of elements in details

 	foreach ($details as $key => $value) {
 		$ob1[]= new Student_details($key,$details[$key]);//for creation of array of of objects of student details
 	}

//for sorting
for($i=0;$i<$count;$i++){

 	for($j=$i+1;$j<10;$j++){

 		if($ob1[$j]->get_gender()=='F'){

 			if(($ob1[$j-1]->get_gender() == 'F') && ($ob1[$j+1]->get_gender() == 'F')){ 

 					$temp=$ob1[$j+3]->get_name();
 					$temp1=$ob1[$j+3]->get_gemder();
                    $ob1[$j+3]->name=$ob1[$j]->name;
                    $ob1[$j+3]->gender=$ob1[$j]->gender;
                    $ob1[$j]->name=$temp;
                    $ob1[$j]->gender=$temp1;

 				}

 			else if(($ob1[$j-1]->get_gender()) == 'F' && ($ob1[$j+1]->get_gender()) != 'F'){ 

 				   	$temp = $ob1[$j+1]->get_name();
 				   	$temp1 = $ob1[$j+1]->get_gender();
 				   	$ob1[$j+1]->name = $ob1[$j]->name;
 				   	$ob1[$j+1]->gender = $ob1[$j]->gender;
 				   	$ob1[$j]->name = $temp;
 				   	$ob1[$j]->gender = $temp1;

 				}

 			else if(($ob1[$j+1]->get_gender() == 'F') && ($ob1[$j-1]->get_gender()!= 'F')){

 				 	$temp = $ob1[$j-1]->get_name();
 				   	$temp1 = $ob1[$j-1]->get_gender();
 				   	$ob1[$j-1]->name = $ob1[$j]->name;
 				   	$ob1[$j-1]->gender = $ob1[$j]->gender;
 				   	$ob1[$j]->name = $temp;
 				   	$ob1[$j]->gender = $temp1;

 				}
 			}
 		}
 	}

//for displaying
for($i=0;$i<10;$i++){
 		echo $ob1[$i]->get_name() . " " . $ob1[$i]->get_gender();
 		echo "<br>";
 	}					
      