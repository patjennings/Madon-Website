<?php include("config.php"); ?>

<header>
	<div id="header-inner">
		<div id="logo">
				<a href=<?php print $basepath ?>>
					<object class="logo" data="images/apispark_logo.svg" width="124" height="34" type="image/svg+xml"> 
					</object>
				</a>
			</div>
		<div id="navigation">
			<?php
			
				$xml = new SimpleXMLElement("includes/feed.xml", Null, True);
				
				$arg_tags = $_GET["tag"];
				
				$tags = array();
				
				foreach($xml->item as $item) {  
					
					$mytag = $item['tags'];
					
					$mytags = explode(",", $mytag);
									
					for($i = 0 ; $i < count($mytags) ; $i++)
					{
						// si la valeur n'y est pas, on l'ajoute
						
						if (!in_array($mytags[$i], $tags)) {
							array_push($tags, $mytags[$i]);
						}
					}				
					
					
				}
				
				$output = "<ul>";
				
				//all items
				if(empty($_GET))
				{
					$output .= "<li><a href='".$basepath."index.php' class='active'>All</a></li>";
				}
				else{
					$output .= "<li><a href='".$basepath."index.php'>All</a></li>";
				}
				
				
				for($k = 0 ; $k < count($tags) ; $k++)
				{
					$tags_output = $tags[$k];
					
					if($arg_tags == $tags[$k])
					{
						$a_classes = "class='active'";
					}
					else{
						$a_classes = "";
					}
					
					$class_name = strtolower(str_replace(' ', '_', $tags_output));
					$output .= "<li class='".$class_name."'><a href='".$basepath."index.php?tag=".$tags_output."'".$a_classes.">".ucfirst($tags_output)."</a></li>";
				}
	
				$output .= "</ul>";
				
				echo $output;
				
			?>
		</div>
	</div>
</header>