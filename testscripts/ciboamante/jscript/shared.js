function pTL(a){
	console.log(a);
}
$('document').ready(function(){
	pTL($("#gameArea").size());
	$("#gameArea").append("<div>a</div>")
})