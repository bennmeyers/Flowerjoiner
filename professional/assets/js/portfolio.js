$(document).ready(function(){
	jQuery.get("/assets/xml/projects.xml",{},function(xml) { // insert projects
		$('professional project',xml).each(function() { // insert professional projects
			var lsWebsite = $(this).find("website").text(); // put the site name in a variable
			var lsSection = $(this).find("section").text(); // put the site section in a variable
			var lsLink = $(this).find("link").text(); // put the link in a variable
			var lsDemoLink = $(this).find("demolink").text(); // put the demolink in a variable
			var lsDescription = $(this).find("description").text(); // put the description in a variable
			var lsThumb = $(this).find("thumbnail").text(); // put the thumbnail in a variable
			var lsID = lsSection.toLowerCase(); // reformat the string to be lower case
			var lsProject = '<figure class="col-sm-4" id="' + lsThumb + '"><a href="/assets/img/samples/full/' + lsThumb + '.jpg" title="' + lsWebsite + '" class="lightbox" target="_blank"><img src="/assets/img/samples/preview/' + lsThumb + '.png" alt="' + lsWebsite + '"></a><figcaption class="description"><strong><a href="' + lsLink + '" title="' + lsWebsite + '" rel="external">' + lsWebsite + '</a> ' + lsSection + '</strong> '; // define the Local String for the Project

			lsProject += (lsDemoLink) ? '' : ''; // if there is a demo link add it to the Local String for the Project
			lsProject += lsDescription + '</figcaption></figure><!-- #' + lsThumb + ' -->'; // define the Local String for the Project

			$('#professional').append(lsProject); // append the projects together
		}); // each

		$('.lightbox').fancybox(); // call the lightbox function : needs to be within the "get" tag so it fires at the correct time

		$('#professional figure:nth-child(3n)').addClass('last'); // put the 'last' class on every third design_example : needs to be within the "get" tag so it fires at the correct time
		$('#professional figure:nth-child(3n+1)').addClass('first'); // put the 'first' class on every fourth design_example : needs to be within the "get" tag so it fires at the correct time
		$('#professional figure:first-child').addClass('first'); // put the 'first' class on the first design_example : needs to be within the "get" tag so it fires at the correct time
	}); // jQuery Get
});