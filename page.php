<?php 
	require_once("config.php"); 
	require_once("includes/Parsedown.php");	
?>

<?php
		
	// Cette partie donne la couleur de fond de la page, renseignée dans le XML
		
	$xml = new SimpleXMLElement($basepath.'includes/feed.xml', Null, True);
	
	$titleraws = $_GET["titleraw"];		
	//$id = $_GET["id"];
	
	$type;
	
	$backgroundColor;
	$theme; 
	$title;
	$text;
	$thumb;
	$width;
	
	$bodyClasses;
	
	if($titleraws)
	{
		
		$xmlCount = count($xml->item); // on compte le nombre de nœuds
		for($i = 0; $i < $xmlCount; $i++) // on récupère le rang de l'élément correspondant à l'argument
		{
			if($xml->item[$i]->titleraw == $titleraws){
				$rank = $i;
				break;  
			}
			
		}
		
		$backgroundColor = $xml->item[$rank]->backgroundcolor;	
		$theme = $xml->item[$rank]->theme;
		$title = $xml->item[$rank]->title;
		$text = $xml->item[$rank]->text;
		$thumb = $xml->item[$rank]->thumb;
		$width = $xml->item[$rank]->width;
		$type = $xml->item[$rank]['type'];
	}	

		
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">

    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta name="description" content="" />
	<meta name="keywords" content="Thomas Guesnon, designer, illustrator, graphic design, typography" />
	<meta name="ROBOTS" content="INDEX,FOLLOW">
	<meta property="og:image" content="<?php print $thumb; ?>"/>
	
	<title>Thomas Guesnon | <?php print $title; ?></title>
	
	<link rel="shortcut icon" href="css/assets/favicon.ico">
	<style media="all" type="text/css">
		@import url("css/reset.css");
		@import url("css/typographie.css");
		@import url("css/layout.css");
	</style>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
	<script type="text/javascript" src="js/lazy-retina.min.js"></script>
	<script type="text/javascript" src="js/init.js"></script>
    <?php require_once("includes/analyticstracking.php"); ?>
    
	</head>
	
		<body class="page <?php echo $theme; ?> type-<?php echo $type; ?>" <?php if($backgroundColor != ""){echo "style='background-color:".$backgroundColor.";'";}?>>
		
		<?php include("views/header.php"); ?>
		
		<div class="node">
			<div class="node-inner<?php echo "-".$width;?>">
		    
			  	<?php
							
					if($type == 'project'){
												
						$output = "<div class='header item-infos'>";
						$output .= "<h1 class='title'>".$title."</h1>";  
						$output .= "<p class='infos'>".$text."</p>"; 
						$output .= "</div>";
						$output .= "<div class='content'>";
						$output .= "<div class='images'>";
						
						foreach($xml->item[$rank]->images->image as $image) {  
						
							$classes = $image['align'];
							$width = $image['width'];
							$height = $image['height'];
							
						    $output .= "<img alt='".$title."' class='lazy ".$classes."' data-original='".$basepath.$image."' src='".$basepath.$image."' width='".$width."' height='".$height."'/>";
				
						}
						
						$output .= "</div>";
						$output .= "</div>";
						
						echo $output;
						
					}
					else if($type == 'text'){
						
						$Parsedown = new Parsedown();
						$mdFile = $text;
					
						$mdFileContent = file_get_contents($mdFile);
						
						$output = $Parsedown->text($mdFileContent);
						
						//$output = htmlentities($parsedFileContent, ENT_QUOTES, 'UTF-8');
						
						//output = $Parsedown->text(utf8_decode($mdFileContent));
						
						echo $output;
					}
					
					
					

				?>
		  	      
			</div> <!-- /node-inner -->
		</div> <!-- /node-->
		<?php include("views/mosaic.php"); ?>
		<?php include("views/footer.php"); ?>
	</body>
</html>


