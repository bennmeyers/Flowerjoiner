function pTL(a){ //print to log Function
	console.log(a);
}

/*

var user = {};

function setUsers(data) {
    for (var k in data) {
        if (data.hasOwnProperty(k)) {
           user[k] = data[k];
			pTL( data[k])
        }
    }
}
setUsers('Benn')
pTL(user)

*/
var totObjects=1;
var totPoints=4;

$(document).ready(function(){
	$('#gameArea').clearCanvas({x:0,y:0,width:500,height:500});//reset the canvas on load
	function makeShape(pointCount){
		var lsfillColor="#000000".replace(/0/g,function(){
			return(~~(Math.random()*16)).toString(16)
		});
		var obj={
			strokeStyle:"#000",
			fillStyle:lsfillColor,
			strokeWidth:1,
			rounded:false,
			closed:true
		};
		function makePoints(count){
			for(x=0;x<count;x++){
				obj['x'+(x+1)]=Math.floor((Math.random()*498)+1); // 498 is the max value, 1 is the min value
				obj['y'+(x+1)]=Math.floor((Math.random()*498)+1)
			}
		}
		makePoints(pointCount);
		$("#gameArea").drawLine(obj)
	}
	for(var i=0;i<=Math.floor(Math.random()*totObjects);i++){
		makeShape(totPoints)
	}
	$('#clear').click(function(){$('#gameArea').clearCanvas({x:0,y:0,width:500,height:500});})//reset the canvas
	
	$('#submit-1').click(function(){makeShape($('#sides-1').val())})
});