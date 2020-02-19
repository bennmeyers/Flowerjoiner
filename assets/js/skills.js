function setOn(passedTheme){ // activate theme
	if(passedTheme){
		var passedEls = document.querySelectorAll("." + passedTheme);
		[].forEach.call(passedEls, function(el) { // activate on class
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
		[].forEach.call(passedEls, function(el) { // deactivate on class
			el.classList.remove("on");
		});
		var inputEls = document.querySelectorAll('#skills input[type="checkbox"].' + passedTheme);
		[].forEach.call(inputEls, function(el) { // deactivate checkbox
			el.checked = false;
		});
	};
};

var docEls = document.querySelectorAll("#skills a");
[].forEach.call(docEls, function(docEl) { // cycle the anchor names
	var els = document.querySelectorAll("#skills td");
	[].forEach.call(els, function(el) { // deactivate the on classes
		el.classList.remove("on");
	});
	var inputEls = document.querySelectorAll('#skills input[type="checkbox"]');
	[].forEach.call(inputEls, function(el) { // deactivate the checkboxes
		el.checked = false;
	});
})

/* reset
document.getElementById("skills_checkboxes").onclick = setOff(all);
*/

$(document).ready(function(){
  /*
	var clickHandler = function(){
		alert('clicked!');
	}

	var elements = document.getElementsByTagName('div'); // All divs

	for(var i = 0; i<elements.length; i++){
		elements[i].onclick = clickHandler;
	}

	for(var i = 0; i < docInputs.length; i++) {
		docInputs[i].click(
			console.log(docInputs[i].value)
      if(docInputs[i].checked="true"){
	      console.log(docInputs[i].value)
	      setOn(docInputs[i].value);
	    } else {
	      setOff(docInputs[i].value);
    	}
    );
	};

	document.querySelectorAll("#skills td").addEventListener('mouseout', function() {
		setOff() // remove the on class and uncheck the box
	});

	document.querySelectorAll("#skills td").addEventListener('mouseover', function() {
		themes = $(this).attr("class"); // get the classes
		if(themes){
			theme = themes.split(" "); // split the classes
		}
		for(var i = 0; i < theme.length; i++) {
			if(theme[i]){
				setOn(theme[i]); // add the on class and check the box
			}
		}
	});
	*/
	$("#skills td").mouseout(function(){
		setOff() // remove the on class and uncheck the box
	});
	$("#skills td").mouseover(function(){
		themes = $(this).attr("class"); // get the classes
		if(themes){
			theme = themes.split(" "); // split the classes
		}
		for(var i = 0; i < theme.length; i++) {
			if(theme[i]){
				setOn(theme[i]); // add the on class and check the box
			}
		}
	});
});