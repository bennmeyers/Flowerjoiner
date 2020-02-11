function setOn(passedTheme){
	if(passedTheme){
		var els = document.querySelectorAll("." + passedTheme);
		[].forEach.call(els, function(el) {
			el.classList.add("on");
		});
		var inputEls = document.querySelectorAll('#skills input[type="checkbox"].' + passedTheme);
		[].forEach.call(inputEls, function(el) {
			el.checked="true";
		});
	}
};
function setOff(passedTheme){
	if(passedTheme){
		var els = document.querySelectorAll("." + passedTheme);
		[].forEach.call(els, function(el) {
			el.classList.remove("on");
		});
		var inputEls = document.querySelectorAll('#skills input[type="checkbox"].' + passedTheme);
		[].forEach.call(inputEls, function(el) {
			el.checked="false";
		});
	};
};

$(document).ready(function(){
	$('#skills a').click(function(){
		$("#skills td").removeClass("on"); // remove the on class
		$('#skills input[type="checkbox"]').prop("checked", false);
	})
	$('#skills input[type="checkbox"]').click(function(){
		if($(this).is(":checked")){
			setOn($(this).val());
		} else if($(this).is(":not(:checked)")){
			setOff($(this).val());
		}
	});
	$("#skills td").mouseout(function(){
		$("#skills td").removeClass("on"); // remove the on class
		$('#skills input[type="checkbox"]').prop("checked", false);
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