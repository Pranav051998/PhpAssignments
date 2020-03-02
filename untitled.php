<?php
class College{
  public $doc=[];
	function __construct($College_name,$ID){
        $this->College_name=$College_name;
        $this->ID=$ID;
    }
    public get(){
    	return $this->ID;
    }
	
}
class Details{
	function_construct($doc_name,$doc_type,$doc_college,$status){
		$this->doc_name;
		$this->doc_type;
		$this->doc_college;
		$this->status;
	}
    public get_doc_name(){
    	return $this->doc_name;
    }
    public get_doc_type(){
    	return $this->doc_type;
    }
    public get_doc_college(){
    	return $this->doc_college;
    }
    public get_status(){
    	return $this->status;
    }
}
$College_list=[];
for($i=0;$i<5;$i++){
	$ob[$i]=new College;
}
  $ob[0]->College("Techno India");
  $ob[1]->College("Heritage Institute of Technology");
  $ob[2]->College("IEM");
  $ob[3]->College("UEM");
  $ob[4]->College("B.P PODDAR");
$ob1=[];


'BANGLADESH'=>[
    ['playername'=>"hgasha",
     'score'=>55,
    ],
    ['playername'=>"sdjgsdu",
     'score'=>85,
    ],
    ['playername'=>"adhgdd",
     'score'=>105,
    ],
    ['playername'=>"dfdf",
     'score'=>75,
    ],
          ],
  'AUSTRALLIA'=>[
    ['playername'=>"srdfgy",
     'score'=>45,
    ],
    ['playername'=>"dhdsvh",
     'score'=>85,
    ],
    ['playername'=>"hdfsfjj",
     'score'=>95,
    ],
    ['playername'=>"asdfghj",
     'score'=>03,
    ],
         ],
  
  
?>
