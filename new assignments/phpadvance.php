"<html>"
"<head>"
  "<link rel="stylesheet" href="phpadvanced.css?v=1">"
"</head>"
<?php
	require '/home/pranav/vendor/autoload.php'; 
$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'https://ir-revamp-dev.innoraft-sites.com/jsonapi/node/services', [
    'headers' => ['User-Agent', 'myreader']]);
$j=json_decode($res->getBody());

class Fetching
{

   function Fetch_data(&$j,&$res,&$client)
	{
		
		$counter=count($j->data);
		for($i=0;$i<$counter;$i++) 
		{
			if(($j->data[$i]->attributes->field_services)!="")
		    {
			    $path=$j->data[$i]->relationships->field_image->links->related->href;
			    $image_response=$client->request('GET', $path, [
			    'headers' => ['User-Agent', 'myreader']]);
			    $image_decode=json_decode($image_response->getBody());
			    $image_print=$image_decode->data->attributes->uri->url;
			    $concatinate="https://ir-revamp-dev.innoraft-sites.com".$image_print;
				$attri_bute=$j->data[$i]->attributes->title;
				$sum_arry=$j->data[$i]->attributes->body->summary;
				$value1=$j->data[$i]->attributes->field_services->value;
				echo "<body>";
				    echo  "<div class='container'>";
					    echo "<div class='container1'>";
							echo   "<div class='image".$i."'>";
						        echo "<img src =".$concatinate.">";
							echo "</div>";
						    echo "<div class='text".$i."'>";
							    $index=$i+1;
							    echo "<div class='heading".$i."''>";
							      echo "<span>".$index." "."</span>".$attri_bute."<br>";
							    echo "</div>";
							    echo $sum_arry."<br>";
							    echo $value1."<br>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
			}

			else
		    { 
			    $path=$j->data[$i]->relationships->field_image->links->related->href;
			    $image_response=$client->request('GET', $path, [
			    'headers' => ['User-Agent', 'myreader']]);
			    $image_decode=json_decode($image_response->getBody());
			    $image_print=$image_decode->data->attributes->uri->url;
			    $concatinate="https://ir-revamp-dev.innoraft-sites.com".$image_print; 
			 	echo "<img src=".$concatinate.">";
				echo $attri_bute."<br>";
				echo $sum_arry."<br>";
			    echo "<br>";
            }
			    
				 
		}
	}
}
$ob=new Fetching();
$ob->Fetch_data($j,$res,$client);
?>
"</body>"
"</html>"

