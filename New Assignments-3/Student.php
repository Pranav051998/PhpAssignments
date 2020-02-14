<?php 
class Student{
	public $id,$name,$dob,$grade;
	function __construct($id,$name,$dob,$grade){
		$this->id=$id;
		$this->name=$name;
		$this->dob=$dob;
		$this->grade=$grade;
	}
	public function get_ID(){
		return $this->id;
	}
	public function get_Name(){
		return $this->name;
	}
	public function get_DOB(){
		return $this->dob;
	}
	public function get_Grade(){
		return $this->grade;
	}
}
class Subject{
	public $subject_code,$subject_name,$minim,$grade;
	function __construct($grade,$subject_code,$subject_name,$minim){
		$this->grade=$grade;
		$this->subject_code=$subject_code;
		$this->subject_name=$subject_name;
		$this->minim=$minim;
	}
	public function get_Grade(){
		return $this->grade;
	}
	public function get_Subcode(){
		return $this->subject_code;
	}
	public function get_Subjectname(){
		return $this->subject_name;
	}
	public function get_Minm(){
		return $this->minim;
	}
}
class Marks{
	public $subject_code,$obtained_marks,$id;
	function __construct($id,$subject_code,$obtained_marks){
		$this->id=$id;
		$this->subject_code=$subject_code;
		$this->obtained_marks=$obtained_marks;
	}
	public function get_Subject_code(){
		return $this->subject_code;
	}
	public function get_Obtained_marks(){
		return $this->obtained_marks;
	}
	public function get_ID(){
		return $this->id;
	}
}
//basic data of students
$student_data = [
	1276=>[
     'Name'=>"Pranav",
     'DOB'=>"05/01/1999",
     'Grade'=>12,
	],
    1277=>[
     'Name'=>"Abhinav",
     'DOB'=>"17/12/1998",
     'Grade'=>10,
    ],
    1278=>[
     'Name'=>"Rahul",
     'DOB'=>"15/10/2000",
     'Grade'=>9,
    ],
    1279=>[
      'Name'=>"Rishav",
      'DOB'=>"13/05/2000",
      'Grade'=>8,
    ],
];
//data of list of subjects according to their grades
$subject_detail = [
	10=>[
     'EN'=>[
      'NAME'=>"ENGLISH",
      'MIN'=>33,
     ],
     'HI'=>[
      'NAME'=>"HINDI",
      'MIN'=>33,
     ],
     'MH'=>[
      'NAME'=>"MATHEMATICS",
      'MIN'=>33,
     ],
     'SC'=>[
       'NAME'=>"SCIENCE",
       'MIN'=>33,
     ],
	],
	12=>[
     'EN'=>[
      'NAME'=>"ENGLISH",
      'MIN'=>33,
     ],
     'MH'=>[
      'NAME'=>"MATHEMATICS",
      'MIN'=>33,
     ],
     'PH'=>[
      'NAME'=>"PHYSICS",
      'MIN'=>23,
     ],
     'CH'=>[
       'NAME'=>"CHEMISTRY",
       'MIN'=>23,
     ],
     'IT'=>[
       'NAME'=>"INFORMATICS PRACTISES",
       'MIN'=>23,
     ],
	],
	9=>[
     'EN'=>[
      'NAME'=>"ENGLISH",
      'MIN'=>33,
     ],
     'HI'=>[
      'NAME'=>"HINDI",
      'MIN'=>33,
     ],
     'MS'=>[
      'NAME'=>"MORAL SCIENCE",
      'MIN'=>33,
     ],
     'MH'=>[
       'NAME'=>"MATHEMATICS",
       'MIN'=>33,
     ],
	],
	8=>[
     'EN'=>[
      'NAME'=>"ENGLISH",
      'MIN'=>33,
     ],
     'HI'=>[
      'NAME'=>"HINDI",
      'MIN'=>33,
     ],
     'SC'=>[
       'NAME'=>"SCIENCE",
       'MIN'=>33,
     ],
	],
];
//data of marks obtained in each subject according to their id
$number = [
   1276=>[
	'EN'=>55,
	'MH'=>65,
	'PH'=>75,
	'CH'=>85,
	'IT'=>95,
 ],
   1277=>[
    'EN'=>45,
    'HI'=>75,
    'MH'=>85,
    'SC'=>15,
 ],
   1278=>[
    'EN'=>85,
    'HI'=>55,
    'MS'=>75,
    'MH'=>95,
 ],
   1279=>[
    'EN'=>45,
    'HI'=>97,
    'SC'=>"",
 ],
];
$j=0;//temporary variables
$k=0;
$i=0;
$ob = [];//array of objects of Student details
$ob1 = [];//array of objects of Student data
$ob2 = [];//array of objects of Marks details
$total_subjects = [];//array to store total no. of subjects in each class

foreach ($student_data as $key => $value) {

   global $student_data,$ob;
   $ob[$key] = new Student($key,$student_data[$key]['Name'],$student_data[$key]['DOB'],$student_data[$key]['Grade']);//creation of array of objects for Student class
   $valid=$ob[$key]->get_ID();
   marks($valid);//to fetch marks obtained according to their ID's
   $grade_valid = $ob[$key]->get_Grade();
   grade($grade_valid);//to fetch list of subjects acc to their grade

}

function marks($valid){

    global $number,$ob1,$k;
    foreach ($number as $key1 => $value1) {

        if($key1==$valid){
			foreach ($value1 as $key2=> $value2) {
				$ob1[$k]=new Marks($key1,$key2,$value2); 
				$k++; 

			}
		}
	}
}
function grade($grade_valid){

    global $subject_detail,$ob2,$j;
    foreach($subject_detail as $key3 => $value3) {

    	if($key3 == $grade_valid){
    		subject_count(count($value3),$grade_valid);
    			//echo count($value3)."<br>";
    		foreach ($value3 as $key4 => $value4) {
                $ob2[$j]=new Subject($key3,$key4,$value4['NAME'],$value4['MIN']);
                    $j++;
    		}
    			//echo count($Subject_detail[$value3])."<br>";
    	}
    }
}
   echo "<table>";
   foreach ($ob as $key5 => $value5) {
   	    $count=0;
   	    $temp_count=0;
   	    echo "<tr>";
   	    echo "<td>" . $ob[$key5]->get_Name() . "</td>";
   	    echo "<td>" . $ob[$key5]->get_DOB() . "</td>";
   	   $grade=$ob[$key5]->get_Grade();
   	   $id=$ob[$key5]->get_ID();
   	   foreach ($ob2 as $key6 => $value6) {
   	   	  if($ob2[$key6]->get_Grade()==$grade){
   	   	  	$sub_code=$ob2[$key6]->get_Subcode();
   	   	  	$marks_obtained=fetch($id,$sub_code);
   	   	  	//$pass_fail=result($ID);
   	   	  	$passing_marks=$ob2[$key6]->get_Minm();

            if($marks_obtained>=$passing_marks){
            	$temp_count++;
            }
   	   	    echo "<td>" . $ob2[$key6]->get_Subcode() . "(".$ob2[$key6]->get_Minm() . "," . $marks_obtained . ")" . "</td>";
   	   	  }
   	   }echo "</tr>";

  }
    echo "</table>";
   	function fetch($id,$sub_code){
   	   	global $grade,$ID,$sub_code,$ob1;
   	   	foreach ($ob1 as $key7 => $value7) {
   	   		if($ob1[$key7]->get_ID()==$id){
   	   			if($ob1[$key7]->get_Subject_code() == $sub_code){
   	   				return $ob1[$key7]->get_Obtained_marks();
   	   			}
   	   		}
   	   	}
   	}
    function subject_count($count,$grade_valid){
    	global $total_subjects,$i;
    	$total_subjects[$i] = $grade_valid;
    	$total_subjects[$grade_valid] = $count;
    	$i++;
    	//echo $Grade_valid."->".$count."<br>";
    }
   