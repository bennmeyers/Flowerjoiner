function setOn(passedTheme){ // activate theme
	if(passedTheme){
		var passedEls = document.querySelectorAll("." + passedTheme);
		[].forEach.call(passedEls, function(el) { // activate the "on" class
			el.classList.add("on");
		});
		var inputEls = document.querySelectorAll('#skills input[type="checkbox"].' + passedTheme);
		[].forEach.call(inputEls, function(el) { // activate checkbox
			el.checked = true;
		});
	}
};

function setOff(passedTheme){ // deactivate theme
	if(passedTheme){
		var passedEls = document.querySelectorAll("." + passedTheme);
		[].forEach.call(passedEls, function(el) { // deactivate the "on" class
			el.classList.remove("on");
		});
		var inputEls = document.querySelectorAll('#skills input[type="checkbox"].' + passedTheme);
		[].forEach.call(inputEls, function(el) { // deactivate checkbox
			el.checked = false;
		});
	};
};
function mouseoverHandler(docEl) {
	themes = docEl.target.classList.value; // get the classes
	if(themes){
		theme = themes.split(" "); // split the classes
	}
	for(var i = 0; i < theme.length; i++) {
		if(theme[i]){
			setOn(theme[i]); // add the on class and check the box
		}
	}
}

function mouseoutHandler(docEl) {
	themes = docEl.target.classList.value; // get the classes
	if(themes){
		theme = themes.split(" "); // split the classes
	}
	for(var i = 0; i < theme.length; i++) {
		if(theme[i]){
			setOff(theme[i]); // remove the on class and uncheck the box
		}
	}
}

document.querySelectorAll("#skills td").forEach(function (docEl) {
  docEl.onmouseover = mouseoverHandler;
  docEl.onmouseout = mouseoutHandler;
});