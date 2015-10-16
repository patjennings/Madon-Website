<?php
	include("config.php");
?>

<?php
			
	include("config.php");
	
	$xml = new SimpleXMLElement($basepath."includes/feed.xml", Null, True);
	
	//print_r($xmld);
	$arg_tags = $_GET["tag"];
	 
	
	$output = "<div class='view-mosaic'>";
	
	
	foreach($xml->project as $project) {  
		
		$mytag = $project['tags'];
		
		$mytags = explode(",", $mytag);
		
		
		
		
		for($i = 0 ; $i < count($mytags) ; $i++)
		{
			
			// si la valeur n'y est pas, on l'ajoute
			if($mytags[$i] == $arg_tags) 
			{
				$output .= itemRender($project);
			}
			else if(empty($_GET) && $i == 0) // && $i == 0 -> pour qu'on n'affiche qu'une fois l'image même si elle a deux tags ou plus
			{
				$output .= itemRender($project);
			}
			else if(is_null($arg_tags) && $i == 0) // && $i == 0 -> pour qu'on n'affiche qu'une fois l'image même si elle a deux tags ou plus
			{
				$output .= itemRender($project);
			}
		}	   
	}
		
	$output .= "</div>";
	
	echo $output;
	
	
	function itemRender($project)
	{
		//$url = "page.php?titleraw=".$project->titleraw;
		//$url = "page.php?id=".$project->id;
		
		// Clean URL
		$url = $project->titleraw;
		
		$output = "<div class='views-row'>";     
		$output .= "<div class='views-field views-field-field-image-cropped'>";       
		$output .= "<div class='field-content'>";
		$output .= "<a href=".$url." class=".$url.">";
		$output .= "<div id='wrapper'>";
		$output .= "<div id='title-panel'>";
		$output .= "<h3 class='node-title'>".utf8_decode($project->title)."</h3>";
		$output .= "</div>";
		$output .= "</div>";
		//$output .= "<img src='".$project->thumb."' alt=''>";
		$output .= "<img data-src='".$project->thumb."' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' onload='lzld(this)' onerror='lzld(this)'/>";
		$output .= "</a>";
		$output .= "</div>";  
		$output .= "</div>"; 
	    $output .= "</div>";
	    
	    return $output;
	}

?>

