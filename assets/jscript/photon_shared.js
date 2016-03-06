$(document).ready(function(){
	var lsLocation = location.href.split('/').pop().replace(/.php/,""); // get the last part of the URL (the page) and shorten it
	lsLocation = lsLocation.split('_').shift(); // get the first part of the location of the URL
		/* override the programmed behavior */
		lsLocation = "production"
	
	if(psXMLFile){
		jQuery.get("/xml/" + psXMLFile,{},function(xml) {
			$('track',xml).each(function(count) {
				var lsTitle = $(this).find("title").text(); // variable holds the track title
				var lsType = $(this).find("videotype").text(); // variable holds the track video
				var lsLocation = $(this).find("location").text(); // variable holds the track location
				var lsThumb = $(this).find("thumbnail").text(); // variable holds the track thumbnail
				if(psXMLFile == "home.xml") {
					$('#main_content .slideshow').append('<a href="demo09.php?movie=/media/Photon_showreel_2009.flv" rel="prettyPopin"><img src="http://www.photoncreative.com/images/' + lsThumb + '" alt="' + lsTitle + '" /></a>'); // insert each track from the xml file stored in the xml directory
				} else {
					$('#main_content').append('<div class="track"><div class="play"><a href="demo09.php?movie=' + lsLocation + '&image=' + lsThumb + '" rel="prettyPopin"><img src="http://www.photoncreative.com/images/play.png" alt="play" /></a></div><!-- .play --><div class="details"><a href="demo09.php?movie=' + lsLocation + '&image=' + lsThumb + '" rel="prettyPopin"><img src="http://www.photoncreative.com/images/' + lsThumb + '" alt="' + lsTitle + '"></a><span class="title"><a href="demo09.php?movie=' + lsLocation + '&image=' + lsThumb + '" rel="prettyPopin">' + lsTitle + '</a></span><span class="video_type">' + lsType + '</span></div><!-- .details --></div><!-- .track -->'); // insert each track from the xml file stored in the xml directory
				}
			}); // each
			$("#main_content a[rel^='prettyPopin']").prettyPopin({'height' : 445, 'width' : 700}); // this line initializes the popin jquery.prettyPopin.js
			$("#main_content a[rel^='prettyFixed']").prettyPopin({'height' : 445, 'width' : 700}); // this line repeated fixes a "double play" bug on the homepage jquery.prettyPopin.js
			$('.slideshow').cycle({
				fx: 'fade', 
				speed:  2500
			}); // the slideshow code used by jquery.cycle.js
		}); // jQuery Get
	} // if
	$(".navigation img").hover(
	 function(){
		if(!$(this).hasClass('activated')){
	  		this.src = this.src.replace(".png","_a.png");
		}
	 },
	 function(){
		if(!$(this).hasClass('activated')){
	  		this.src = this.src.replace("_a.png",".png");
		}
	}); // rollover script
	jQuery.preloadImages = function()
	{
	  for(var i = 0; i<arguments.length; i++){
	    jQuery("<img>").attr("src", arguments[i]);
	  }
	} // preload the images
	$.preloadImages("http://www.photoncreative.com/images/navigation_production_a.png", "http://www.photoncreative.com/images/navigation_post_a.png",
	"http://www.photoncreative.com/images/navigation_motion_a.png","http://www.photoncreative.com/images/navigation_films_a.png","http://www.photoncreative.com/images/navigation_quote_a.png","http://www.photoncreative.com/images/header_contact_a.png","http://www.photoncreative.com/images/header_team_a.png,images/play.gif,http://www.photoncreative.com/images/play_a.gif"); // preload images 
	$('.navigation img').each(function(){
		var lsWebURL = $(this).attr('src').split('/').pop();
		if(lsLocation == lsWebURL.split('_').pop().replace(/.png/,"")){
			this.src = this.src.replace(".png","_a.png");
			$(this).addClass('activated');
		}
	}); // selected page script
	$('.track').live("mouseover", function(){
		$(this).children('.play').show();
	}); // show the play button
	$('.track').live("mouseout", function(){
		$(this).children('.play').hide();
	}); // hide the play button
	$('.play img').live("mouseover", function(){
        $(this).attr("src", "http://www.photoncreative.com/images/play_a.png");
	}); // show the play button
	$('.play img').live("mouseout", function(){
        $(this).attr("src", "http://www.photoncreative.com/images/play.png");
	}); // hide the play button
	$('#page_homepage #main_content').live("mouseover", function(){
		$('.video_play').show();
	}); // show the play button
	$('#page_homepage #main_content').live("mouseout", function(){
		$('.video_play').hide();
	}); // hide the play button
	$('#content_current').live("mouseover", function(){
		$(this).children('.play').show();
	}); // show the play button
	$('#content_current').live("mouseout", function(){
		$(this).children('.play').hide();
	}); // hide the play button
	$("a[rel^='prettyPopin']").prettyPopin({'height' : 445, 'width' : 700}); // this line initalizes the popin jquery.prettyPopin.js - it needs to be called both inside and outside the "each" function
	$('.slideshow').cycle({
		fx: 'fade', 
		speed:  2500
	}); // the slideshow code used by jquery.cycle.js - it needs to be called both inside and outside the "each" function
}); // document