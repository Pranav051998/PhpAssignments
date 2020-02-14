<?php
class College{
	public $name,$id,$doc=[];
	function __construct($name,$id){
		$this->name=$name;
		$this->id=$id;
	}
	public function get_ID(){
		return $this->id;
	}
	public function get_doc(){
		return $this->doc;
	}
	public function get_college_name(){
		return $this->name;
	}
}
class Details{
	public $doc_name,$doc_type,$status;
	function __construct($doc_name,$doc_type,$status){
		$this->doc_name=$doc_name;
		$this->doc_type=$doc_type;
		$this->status=$status;
	}
	public function get_doc_name(){
		return $this->doc_name;
	}
	public function get_doc_type(){
		return $this->doc_type;
	}
	public function get_status(){
		return $this->status;
	}
}
$college_details=[
  1=>[
  	'Name'=>"Techno India",
  	'ID'=>"TIU",
  ],
  2=>['Name'=>"I.E.M",
       'ID'=>"IE",
  ],
  3=>['Name'=>"GNIT",
        'ID'=>"GI",
  ],
  4=>['Name'=>"B.P PODDAR",
      'ID'=>"BP",
  ],
];
$student_details=[
  1=>[
    'Name'=>"doc1",
    'Type'=>'A',
    'ID'=>"TIU",
    'status'=>0,
  ],  
  2=>[
    'Name'=>"doc2",
    'Type'=>'B',
    'ID'=>"IE",
    'status'=>1,
  ],
  3=>[
  	'Name'=>"doc3",
  	'Type'=>'C',
  	'ID'=>"GI",
  	'status'=>1,
  ],
  4=>[
  	'Name'=>"doc4",
  	'Type'=>'D',
  	'ID'=>"BP",
  	'status'=>1,
  ],
];
$ob=[];//array of objects of College name
foreach ($college_details as $key1 => $value1) {
    $ob[$key1]=new College($college_details[$key1]['Name'],$college_details[$key1]['ID']);
 }
$ob1=[];//array of objects of Student details of individual college
foreach ($student_details as $key2 => $value2) {
    $ob1[$key2]=new Details($student_details[$key2]['Name'],$student_details[$key2]['Type'],$student_details[$key2]['status']);
    data($value2['ID'],$value2['Name'],$value2['Type'],$value2['status']);
}
function data($check,$Name,$type,$status){
	global $ob;
	foreach ($ob as $key3 => $value3) {
		if(($ob[$key3]->get_ID())==$check){
            $value3->doc[$key3]['Name']=$Name;
            $value3->doc[$key3]['Type']=$type;
            $value3->doc[$key3]['status']=$status;
		}

	}
}
$temp=[];
$temp1=[];
$j=0;
$count=0;
//Creating an array to store the objects which have doc array empty
foreach ($ob as $key4 => $value4) {

	global $ob,$temp;
	if(empty($ob[$key4]->doc)){
      $temp[$j]=$ob[$key4];
      $j++;

	}
}

//for displaying
foreach ($ob as $key5 => $value5) {

    //displaying those collge id and college details who have doc array empty 
	foreach ($temp as $key6 => $value6) {

		echo $temp[$key6]->get_ID() . "<br>";
		echo $temp[$key6]->get_college_name() . "<br>";
		$count++;

	}

    $temp1=$ob[$key5]->get_doc();//storing doc array of individual objects

    foreach ($temp1 as $key7 => $value7) {
        
        //it is to check whether a particular object's  college ID and college name is printed once or not
    	if($count==0){

    		echo $ob[$key5]->get_ID() . "<br>";
    		echo $ob[$key5]->get_college_name() . "<br>";

    	}

    	echo $temp1[$key7]['Name'] . "<br>";
    	echo $temp1[$key7]['Type'] . "<br>";

    	if($temp1[$key7]['status'] == 1)
    		echo "SUCCESS" . "<br>";

    	else
    		echo "FAIL" . "<br>";

    	$count=0;
    }
}


