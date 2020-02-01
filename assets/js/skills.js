function setOn(passedTheme){
	if(passedTheme){
		$("." + passedTheme).addClass("on"); // add the on class
	}
};

$(document).ready(function(){
	$("#skills td").mouseout(function(){
		$("#skills td").removeClass("on"); // remove the on class
	});
	$("#skills td").mouseover(function(){
		themes = $(this).attr("class"); // get the classes
		if(themes){
			theme = themes.split(" "); // split the classes
		}
		var i = 0;
		for(i = 0; i < theme.length; i++) {
			if(theme[i]){
				setOn(theme[i]); // add the on class
			}
		}
	});
});