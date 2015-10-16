<?php require_once("config.php"); ?>

<?php
		
	// Cette partie donne la couleur de fond de la page, renseignée dans le XML
		
	$xml = new SimpleXMLElement($basepath.'includes/feed.xml', Null, True);
	
	$titleraws = $_GET["titleraw"];		
	//$id = $_GET["id"];
	
	$backgroundColor;
	$theme; 
	$title;
	$text;
	$thumb;
	
	$bodyClasses;
	
	if($titleraws)
	{
		
		$xmlCount = count($xml->project); // on compte le nombre de nœuds
		for($i = 0; $i < $xmlCount; $i++) // on récupère le rang de l'élément correspondant à l'argument
		{
			if($xml->project[$i]->titleraw == $titleraws){
				$rank = $i;
				break;  
			}
			
		}
		
		$backgroundColor = $xml->project[$rank]->backgroundcolor;	
		$theme = $xml->project[$rank]->theme;
		$title = $xml->project[$rank]->title;
		$text = $xml->project[$rank]->text;
		$thumb = $xml->project[$rank]->thumb;
	}		
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" version="XHTML+RDFa 1.0" dir="ltr">

	<head profile="http://www.w3.org/1999/xhtml/vocab">
    
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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

	<!-- start Mixpanel --><script type="text/javascript">(function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f)}})(document,window.mixpanel||[]);
mixpanel.init("9da7c6882384324502a095faa02dba47");</script><!-- end Mixpanel -->

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
	<script type="text/javascript" src="js/lazy-retina.min.js"></script>
	<script type="text/javascript" src="js/init.js"></script>
    <?php require_once("includes/analyticstracking.php"); ?>
	</head>
	
		<body class="page <?php echo $theme; ?>" <?php if($backgroundColor != ""){echo "style='background-color:".$backgroundColor.";'";}?>>
		
		<?php include("views/header.php"); ?>
		
		<div class="node">
			<div class="node-inner">
		    
			  	<?php
								
					$output = "<div class='header project-infos'>";
					$output .= "<h1 class='title'>".utf8_decode($title)."</h1>";  
					$output .= "<p class='infos'>".utf8_decode($text)."</p>"; 
					$output .= "</div>";
					$output .= "<div class='content'>";
					$output .= "<div class='images'>";
					
					foreach($xml->project[$rank]->images->image as $image) {  
					
						$classes = $image['align'];
						$width = $image['width'];
						$height = $image['height'];
						
					    $output .= "<img class='lazy ".$classes."' data-original='".$basepath.$image."' width='".$width."' height='".$height."'/>";

					}
					
					$output .= "</div>";
					$output .= "</div>";
					
					echo $output;

				?>
		  	      
			</div> <!-- /node-inner -->
		</div> <!-- /node-->
		<?php include("views/mosaic.php"); ?>
		<?php include("views/footer.php"); ?>
	</body>
</html>