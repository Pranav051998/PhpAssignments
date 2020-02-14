<?php
 class Products{
 	public $product_id,$selling_date,$price,$category;
 	function __construct($product_id,$selling_date,$price,$category){
 		$this->product_id = $product_id;
 		$this->selling_date = $selling_date;
 		$this->price = $price;
 		$this->category = $category;
 	}

 	public function get_product_id(){
 		return $this->product_id;
 	}

 	public function get_selling_date(){
 		return $this->selling_date;
 	}

 	public function get_price(){
 		return $this->price;
 	}

 	public function get_category(){
 		return $this->category;
 	}
}

 $product_details=[
   1=>[
   	    'pd'=>"pd1",
   	    'sp'=>5,
   	    'sd'=>"4thFeb",
   	    'ct'=>"c1",
      ],
   2=>[
   	    'pd'=>"pd1",
   	    'sp'=>15,
   	    'sd'=>"5thFeb",
   	    'ct'=>"c1",
      ],
   3=>[
   	    'pd'=>"pd2",
   	    'sp'=>50,
   	    'sd'=>"4thFeb",
   	    'ct'=>"c1",
      ],
   4=>[
   	    'pd'=>"pd3",
   	    'sp'=>40,
   	    'sd'=>"6thFeb",
   	    'ct'=>"c2",
      ],
   5=>[
   	    'pd'=>"pd2",
   	    'sp'=>75,
   	    'sd'=>"3rdFeb",
   	    'ct'=>"c1",
      ],
   6=>[
   	    'pd'=>"pd2",
   	    'sp'=>65,
   	    'sd'=>"7thFeb",
   	    'ct'=>"c1",
      ],
   7=>[
   	    'pd'=>"pd4",
   	    'sp'=>190,
   	    'sd'=>"8thFeb",
   	    'ct'=>"c2",
      ],
 ];

$temp=$product_details;//storing in a temporary array
$total=0;

//used bubble sort for sorting acc to product id
foreach ($temp as $key => $value) {
	convert_date($key);

	foreach ($temp as $key1 => $value1) {

      if(($temp[$key1]['pd'])  > ($temp[$key]['pd'])){

      	$temp1 = $temp[$key1]['pd'];
      	$temp2 = $temp[$key1]['sp'];
      	$temp3 = $temp[$key1]['sd'];
      	$temp4 = $temp[$key1]['ct'];
      	$temp[$key1]['pd'] = $temp[$key]['pd'];
      	$temp[$key1]['sp'] = $temp[$key]['sp'];
      	$temp[$key1]['sd'] = $temp[$key]['sd'];
      	$temp[$key1]['ct'] = $temp[$key]['ct'];
      	$temp[$key]['pd']  = $temp1;
      	$temp[$key]['sp']  = $temp2;
      	$temp[$key]['sd']  = $temp3;
      	$temp[$key]['ct']  = $temp4;

      }
	}	# code...
}
$count = count($temp);
compare_date();
salary_count();
ct_set();

 function convert_date($key){

 	global $temp;
 	$time = strtotime($temp[$key]['sd']);
    $newformat = date('d-m-Y',$time);
    $temp[$key]['sd']=$newformat;
 		# code...
 }

 function compare_date(){
 	global $temp;
 	foreach ($temp as $key => $value) {
 		foreach ($temp as $key1 => $value1) {

 			if(($temp[$key1]['pd']) == ($temp[$key]['pd'])){

 				if(($temp[$key1]['sd']) > ($temp[$key]['sd'])){

 					$temp1 = $temp[$key1]['pd'];
      	            $temp2 = $temp[$key1]['sp'];
      	            $temp3 = $temp[$key1]['sd'];
      	            $temp4 = $temp[$key1]['ct'];
      	            $temp[$key1]['pd'] = $temp[$key]['pd'];
      	            $temp[$key1]['sp'] = $temp[$key]['sp'];
      	            $temp[$key1]['sd'] = $temp[$key]['sd'];
      	            $temp[$key1]['ct'] = $temp[$key]['ct'];
      	            $temp[$key]['pd']  = $temp1;
      	            $temp[$key]['sp']  = $temp2;
      	            $temp[$key]['sd']  = $temp3;
      	            $temp[$key]['ct']  = $temp4;
 				}
 			}
 		}
 	}
 }

 function salary_count(){
 	$total=0;
 	global $temp,$count;
 	for($i = 1 ; $i <= $count ; $i++) {

      for($j = $i; $j <= $count ; $j++) {

         if(($temp[$i]['pd']) == ($temp[$j]['pd'])){
              
              $total = $total + $temp[$j]['sp'];
              $temp[$j]['sp'] = $total;
         }
      }
      $total = 0;
 	}
}

 function ct_set(){
 	global $temp,$count;

 	for($i = 1; $i < $count ;$i++){

 		for($j = $i; $j < $count; $j++){

 			if((($temp[$i]['ct']) == ($temp[$j]['ct'])) && (($temp[$i]['pd']) == ($temp[$j]['pd']))){
              
              $temp[$j]['ct'] = $temp[$j]['ct'] . "-" .cid($temp[$j]['pd']);
       
 			}
 		}
 	}
}

 function cid($j){

    $store = $j;
    $store1=$store[0].$store[-1];
    return $store1 ;
 		
}

$ob=[];
//creation of object
foreach ($temp as $key => $value) {

     	 $ob[] = new Products($value['pd'],$value['sp'],$value['sd'],$value['ct']);
}
 

 echo "<pre>";
 print_r($ob);
 echo "</pre>";