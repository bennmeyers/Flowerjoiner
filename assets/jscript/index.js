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
			var lsProject = '<div class="design_example"><p><a href="/assets/images/samples/full/' + lsThumb + '.jpg" title="' + lsSection + '" class="lightbox" target="_blank"><img src="/assets/images/samples/preview/' + lsThumb + '.png" alt="' + lsSection + '" /></a></p><p class="description"><strong><a href="' + lsLink + '" title="' + lsWebsite + '" rel="external">' + lsWebsite + '</a> ' + lsSection + '</strong> '; // define the Local String for the Project

			lsProject += (lsDemoLink) ? '(<a href="' + lsDemoLink + '" target="_blank">demo</a>) ' : ''; // if there is a demo link add it to the Local String for the Project
			lsProject += lsDescription + '</p></div><!-- #' + lsID + ' -->'; // define the Local String for the Project
			
			lsID = lsID.replace(".",""); // reformat the string to remove periods
			lsID = lsID.replace(/\//g,"_"); // reformat the string to remove slashes
			lsID = lsID.replace(/ /g,"_"); // reformat the string to remove spaces

			$('#professional').append(lsProject); // append the projects together
		}); // each

		$('.lightbox').fancybox(); // call the lightbox function : needs to be within the "get" tag so it fires at the correct time

		$('.design_example:nth-child(3n)').addClass('last'); // put the 'last' class on every third design_example : needs to be within the "get" tag so it fires at the correct time
		$('.design_example:nth-child(3n+1)').addClass('first'); // put the 'first' class on every fourth design_example : needs to be within the "get" tag so it fires at the correct time
		$('.design_example:first-child').addClass('first'); // put the 'first' class on the first design_example : needs to be within the "get" tag so it fires at the correct time
		$('.design_example p:first-child').addClass('first'); // put the 'first' class on the first p tag in a design_example : needs to be within the "get" tag so it fires at the correct time
		$('.design_example p:last-child').addClass('last'); // put the 'last' class on the last p tag in a design_example : needs to be within the "get" tag so it fires at the correct time
	}); // jQuery Get
});