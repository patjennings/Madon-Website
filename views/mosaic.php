<?php
	include("config.php");
?>

<?php
			
	include("config.php");
	
	$xml = new SimpleXMLElement($basepath."includes/feed.xml", Null, True);
	
	//print_r($xmld);
	$arg_tags = $_GET["tag"];
	$arg_type = $_GET["type"];
	 
	
	$output = "<div class='view-mosaic'>";
	
	
	foreach($xml->item as $item) {  
		
		$mytag = $item['tags'];
		
		$mytags = explode(",", $mytag);
		
		for($i = 0 ; $i < count($mytags) ; $i++)
		{
			
			// si la valeur n'y est pas, on l'ajoute
			if($mytags[$i] == $arg_tags) 
			{
				$output .= projectItemRender($item);
			}
			else if(empty($_GET) && $i == 0) // && $i == 0 -> pour qu'on n'affiche qu'une fois l'image même si elle a deux tags ou plus
			{
				$output .= projectItemRender($item);
			}
			else if(is_null($arg_tags) && $i == 0) // && $i == 0 -> pour qu'on n'affiche qu'une fois l'image même si elle a deux tags ou plus
			{
				$output .= projectItemRender($item);
			}
		}	   
	}
		
	$output .= "</div>";
	
	echo $output;
	
	
	function projectItemRender($item)
	{
		//$url = "page.php?titleraw=".$project->titleraw;
		//$url = "page.php?id=".$project->id;
		
		// Clean URL
		$url = $item->titleraw;
		
		$output = "<div class='views-row'>";     
		$output .= "<div class='views-field views-field-field-image-cropped'>";       
		$output .= "<div class='field-content'>";
		$output .= "<a href=".$url." class=".$url.">";
		$output .= "<div class='wrapper'>";
		$output .= "<div class='title-panel'>";
		$output .= "<h3 class='node-title'>".$item->title."</h3>";
		$output .= "</div>";
		$output .= "</div>";
		//$output .= "<img src='".$item->thumb."' alt=''>";
		$output .= "<img alt='".$item->title."' data-src='".$item->thumb."' src='data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==' onload='lzld(this)' onerror='lzld(this)'/>";
		$output .= "</a>";
		$output .= "</div>";  
		$output .= "</div>"; 
	    $output .= "</div>";
	    
	    return $output;
	}

?>

