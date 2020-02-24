function setOn(passedTheme){ // activate theme
	if(passedTheme){
		var passedEls = document.querySelectorAll("." + passedTheme);
		[].forEach.call(passedEls, function(el) { // activate the "on" class
			el.classList.add("on");
		});
		var inputEls = document.querySelectorAll('#skills input[type="checkbox"].' + passedTheme);
		[].forEach.call(inputEls, function(passededIn) { // activate checkbox
			passededIn.checked = true;
		});
	};
};

function setOff(passedTheme){ // deactivate theme
	if(passedTheme){
		var passedEls = document.querySelectorAll("." + passedTheme);
		[].forEach.call(passedEls, function(el) { // deactivate the "on" class
			el.classList.remove("on");
		});
		var inputEls = document.querySelectorAll('#skills input[type="checkbox"].' + passedTheme);
		[].forEach.call(inputEls, function(passededIn) { // deactivate checkbox
			passededIn.checked = false;
		});
	};
};

function mouseoverHandler(docEl) {
	themes = docEl.target.classList.value; // get the classes
	if (!themes) {
		themes = docEl.target.parentElement.classList.value; // get the classes of the parent element
	}
	theme = themes.split(" "); // split the classes
	for(var i = 0; i < theme.length; i++) {
		if(theme[i]) {
			setOn(theme[i]); // add the "on" class and check the box
		}
	}
}

function mouseoutHandler(docEl) {
	themes = docEl.target.classList.value; // get the classes
	if (!themes) {
		themes = docEl.target.parentElement.classList.value; // get the classes of the parent element
	}
	theme = themes.split(" "); // split the classes
	for(var i = 0; i < theme.length; i++) {
		if(theme[i]){
			setOff(theme[i]); // remove the "on" class and uncheck the box
		}
	}
}

function clickHandler(docEl) {
	if(docEl.target.checked == "") {
		setOff(docEl.target.value);
	} else {
		setOn(docEl.target.value);
	}
}

document.querySelectorAll("#skills td").forEach(function (docEl) {
	docEl.onmouseover = mouseoverHandler;
	docEl.onmouseout = mouseoutHandler;
});

document.querySelectorAll('#skills_checkboxes input[type="checkbox"]').forEach(function (docEl) {
	docEl.onclick = clickHandler;
});