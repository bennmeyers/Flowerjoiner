$(document).ready(function(){
	jQuery.get("/xml/dvds.xml",{},function(xml) {
		$('dvd',xml).each(function(count) {
			var lsTitle = $(this).find("title").text(); // variable holds the track title
			$('#main_content').append('<div class="dvd">' + lsTitle + '</div><!-- .dvd -->'); // insert each dvd from the xml file stored in the xml directory
		}); // each
	}); // jQuery Get
}); // document