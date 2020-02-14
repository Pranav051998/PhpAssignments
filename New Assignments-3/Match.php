<?php
class Match{
	public $team,$run;
	function __construct($team,$run){
		$this->team = $team;
		$this->run = $run;
	}
	public function get_team(){
		return $this->team;
	}
	public function get_run(){
		return $this->run;
	}
	
}
class Player{
	public $match_id,$run_scored;
	function __construct($match_id,$run_scored){
		$this->match_id = $match_id;
		$this->run_scored=$run_scored;
	}
	
	
	public function get_match_id(){
		return $this->match_id;
	}
	public function get_run_scored(){
		return $this->run_scored;
	}

}
 
$player=[];//array of object of player

//$ob1=[];
//$ob2=[];
$i=0;

$team=[
1=>[
     'INDIA'=>
        [
		  'VIRAT KOHLI'=>70,
		  'RAVINDRA JADEJA'=>85,
		  'ROHIT SHARMA'=>105,
		  'M.S DHONI'=>150,
		],
     'PAKISTAN'=>
        [
          'M.D IMRAN'=>15,
          'YOUNIS KHAN'=>55,
          'SAHID AFRIDI'=>05,
          'SHOIB AKHTAR'=>02,
        ], 
    ],
2=> [
	 'INDIA'=>[
	 	  'VIRAT KOHLI'=>70,
		  'RAVINDRA JADEJA'=>85,
		  'ROHIT SHARMA'=>105,
		  'M.S DHONI'=>150, 
        ],
      'BANGLADESH'=>[
           'hgasha'=>55,
           'sdjgsdu'=>85,
           'adhgdd'=>105,
           'dfdf'=>75,
        ],
    ],
3=>[
	 'INDIA'=>[
          'VIRAT KOHLI'=>70,
          'RAVINDRA JADEJA'=>85,
          'ROHIT SHARMA'=>105,
          'M.S DHONI'=>150,
          ],
     'AUSTRALLIA'=>[
           'srdfgy'=>45,
           'dhdsvh'=>45,
           'hdfsfjj'=>95,
           'asdfghj'=>03,
          ],
    ],
4=>[
	 'PAKISTAN'=>[ 
           'M.D IMRAN'=>15,
           'YOUNIS KHAN'=>55,
           'SAHID AFRIDI'=>05,
           'SHOIB AKHTAR'=>45,
        ],
     'BANGLADESH'=>[
           'hgasha'=>55,
           'sdjgsdu'=>85,
           'adhgdd'=>105,
           'dfdf'=>75,
        ],
    ],
5=>[
	 'PAKISTAN'=>[
          'M.D IMRAN'=>15,
          'YOUNIS KHAN'=>55,
          'SAHID AFRIDI'=>05,
          'SHOIB AKHTAR'=>02,
        ],
     'AUSTRALLIA'=>[
          'srdfgy'=>45,
          'dhdsvh'=>85,
          'hdfsfjj'=>95,
          'asdfghj'=>03,
        ], 
    ],
6=>[
	 'BANGLADESH'=>[
          'hgasha'=>55,
          'sdjgsdu'=>85,
          'adhgdd'=>105,
          'dfdf'=>75,
        ],
     'AUSTRALLIA'=>[
          'srdfgy'=>45,
          'dhdsvh'=>85,
          'hdfsfjj'=>95,
          'asdfghj'=>03,
        ], 
    ],
];


	foreach ($team as $key2 => $value2) {

		foreach ($value2 as $key3 => $value3) {

			foreach ($value3 as $key4 => $value4) {

                 $ob2=new Player($key2,$value4);
                 $player[$key4][]=$ob2;
            }
			
		}
	}

echo "<pre>";
print_r($player);
echo "</pre>";

$match_dt=[];//array of objects for match
$total=0;//total run scored in a match by a team
foreach($team as $key5=>$value5)
{
  foreach ($value5 as $key6=>$value6)
  {
    foreach($value6 as $key7=>$value7)
    {
      $total = $total + $value7;
    }
    $ob1 = new Match($key6,$total);
    $match_dt[$key5][]=$ob1;
    $total=0;
  }
}

echo "<pre>";
print_r($match_dt);
echo "</pre>";

class index
{
  //highest scorer in a match
  function max_scorer()
  {
    global $player;//using array of objects of player class
    $total=0;//for calculating total run scored by a player
    $max=0;//for keeping maximum run scored
    foreach ($player as $key=>$value)
    {
      foreach($value as $key1=>$value1)
      {
        $total = $total + $value1->run_scored;
        if($total > $max)
        {
          $max=$total;
          $p_name=$key;
        }
      }
      $total=0;
    }
    echo "Highest Scorer: " . $p_name . "<br>" . "Score: " . $max . "<br><br>";
  }

  //maximum score in a match
  function max_run()
  {
    global $match_dt;//using array of objects of match class
    $max=0;//for storing max run scored by a team
    foreach($match_dt as $key=>$value)
    {
      foreach($value as $key1=>$value1)
      {
        if($value1->run > $max)
        {
          $max=$value1->run;
          $t_name=$value1->team;
          $match=$key;
        }
      }
    }
    echo "Max Scorer: " . $t_name . "<br>" . "Score: " . $max . "<br>" . "Match: " . $match . "<br><br>";
  }

  //tournament winner
  function tournament()
  {
    global $match_dt;//using array of objects of match class
    $win=[];//for storing winning teams in different matches
    $max=0;//for checking winning points of teams
    $winner_team;//tournament winner team
    //creating an array of winning teams
    foreach ($match_dt as $key=>$value)
    {
      if($value[0]->run > $value[1]->run)
      {
        $match_win = $value[0]->team;
      }
      else
      {
        $match_win = $value[1]->team;
      }
      $win[]=$match_win;
    }
    //creating points table
    $points=array_count_values($win);
    //calculating tournament winner team
    foreach($points as $key=>$value)
    {
      if($value > $max)
      {
        $max=$value;
        $winner_team=$key;
      }
    }
     echo "Tournament Winner: " . $winner_team . "<br><br>";
    echo "Points Table:";
    echo "<pre>";
    print_r($points);
    echo "</pre>";
  }
}

$max = new index;
$max->max_scorer();
$max->max_run();
$max->tournament();