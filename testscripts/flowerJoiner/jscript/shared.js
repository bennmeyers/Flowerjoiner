function fnDescription(psType)
{
	$("#codeDescription").slideUp();
	lsType = psType.substring(psType.lastIndexOf('/')+1);
	$("#codeDescription").load("includes/content/" + lsType);
	$("#codeDescription").ready(function(){
		$("#codeDescription a").click(function(event){
			event.preventDefault();
			alert(event.target.href);
		});
		$("#codeDescription").slideDown();
	});
}

