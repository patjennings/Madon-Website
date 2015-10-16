$(document).ready(function() {	
	
	
	// LazyLoad activation
	$(function() {
	    $("img.lazy").lazyload({
		    placeholder : "css/assets/whiterati.gif",
		    threshold : 100,
		    effect : "fadeIn" 
	    });
	});
	
	//Force retina
	//lzld.config.retina = true;
	//lzld.update();
	
	MosaicHandler();
	window.onresize = function() {
		MosaicHandler();
	}
	
	
	// MixPanel
	// Liens
	mixpanel.track_links("#navigation ul li.ui a", "Cat�gorie UI", {
        "referrer": document.referrer
    });
    mixpanel.track_links("#navigation ul li.graphic_design a", "Cat�gorie Graphic Design", {
        "referrer": document.referrer
    });
    mixpanel.track_links("#navigation ul li.photo a", "Cat�gorie Photo", {
        "referrer": document.referrer
    });
    mixpanel.track_links("#navigation ul li.motion a", "Cat�gorie Motion", {
        "referrer": document.referrer
    });
    mixpanel.track_links("#navigation ul li.illustration a", "Cat�gorie Illustration", {
        "referrer": document.referrer
    });
    
    // Mosa�que
    mixpanel.track_links(".view-mosaic .views-row .views-field .field-content .madon-font", "Madon project", {
        "referrer": document.referrer
    });
    mixpanel.track_links(".view-mosaic .views-row .views-field .field-content .tocoga-touch-control-guitar-amplifier", "Tocoga project", {
        "referrer": document.referrer
    });
    mixpanel.track_links(".view-mosaic .views-row .views-field .field-content .enoch-hardon", "Enoch Hardon", {
        "referrer": document.referrer
    });
        
});




function MosaicHandler() // Gestion des cells de la mosa�que
{
	
	var step = 230; // responsive step
	var docWidth = $("body").width(); // largeur totale
	var o = Math.floor(docWidth/step); // l'opérateur de division
	var s = Math.floor($("body").width()/o); // taille du carré de grille
	
	$("header").each(function(i){
				
		$("#logo").css("width", s-20);
		$("#navigation").css("width", s);
		
	});
		
	$(".views-row").each(function(i){
				
		$(".views-row").css("width", s);
		$(".views-row").css("height", s);
		
	});	

}
