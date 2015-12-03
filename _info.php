<?php require_once("config.php"); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" version="XHTML+RDFa 1.0" dir="ltr">

	<head profile="http://www.w3.org/1999/xhtml/vocab">
    
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta name="description" content="" />
	<meta name="keywords" content="Thomas Guesnon, designer, illustrator, graphic design, typography" />
	<meta name="ROBOTS" content="INDEX,FOLLOW">
	<meta property="og:image" content="<?php print $thumb; ?>"/>
	
	<title>Thomas Guesnon | Info</title>
	
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
	
		<body class="page dark type-text" >
		
		<?php include("views/header.php"); ?>
		
		<div class="node">
			<div class="node-inner">
				<div class='header project-infos'>
		    
					<h1 class='title'>Info</h1>
					<p class='infos'>Je suis designer <strike>graphique</strike>&nbsp;<strike>d&apos;interface</strike>&nbsp;<strike>motion</strike>&nbsp;<strike>d&apos;interaction</strike>. Je travaille sur des interfaces graphiques pour des supports mobiles ou embarqu&eacute;s. <br/>
Fondu de typo, je n&apos;h&eacute;site pas &agrave; ouvrir mon IDE ou mon logiciel 3D pour mod&eacute;liser une id&eacute;e. <br/>
Je vis et travaille &agrave; Nantes depuis 2014.</p>
					<p class='infos'><em>I am a <strike>graphic</strike>&nbsp;<strike>UI</strike>&nbsp;<strike>motion</strike>&nbsp;<strike>UX</strike> designer. I work on GUIs for mobiles devices  or embedded devices. <br/>
I love typography. I'm used to open my IDE or a CGI software in order to visualize an idea. <br/>
I live and work in Nantes since 2014.</em></p>
				</div>
			</div> <!-- /node-inner -->
		</div> <!-- /node-->
		<?php include("views/mosaic.php"); ?>
		<?php include("views/footer.php"); ?>
	</body>
</html>