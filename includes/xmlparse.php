<?php
	
	include("../config.php");
	
	$xml = new SimpleXMLElement($basepath.'includes/feed.xml', Null, True);  
	$id = 2;
  
	// yeah! xpath!  
	//$proj = $xml->xpath('//projects/project');
	
	$title = $xml->project[$id]->title;
	$text = $xml->project[$id]->text;
	
	$output = "<h1>".$title."</h1>";  
	$output .= "<p class='infos'>".$text."</p>"; 
	
	foreach($xml->project[$id]->images->image as $image) {  
	
	  //$image = $images->image; 
	  $output .= "<img class='lazy' data-original='".$image."' width='800' height='600' />";
	   
	}
	
	echo $output;

?>