var steps = 1;

$(document).ready(function(){
	function box(area) {
		var areaID = "#" + area;
		var pulseArea = "#pulse_" + area;
		var left = $(areaID).css('left');
		var top = $(areaID).css('top');
		var height = $(areaID).css('height');
		var width = $(areaID).css('width');

		left = parseInt(left.replace("px",""));
		top = parseInt(top.replace("px",""));
		height = parseInt(height.replace("px",""));
		width = parseInt(width.replace("px",""));
		pulse(pulseArea,width,height,left,top)
	};
	
	function pulse(area,width,height,left,top) {
		if(area && steps) {
			$(area).css('width',width+'px').css('height',height+'px').css({
				left:left + 'px',
				opacity:1,
				scale:1,
				top:top + 'px'
			}).transition({
				opacity:0,
				scale:1.5
			},1200,"linear",function(){
				pulse(area,width,height,left,top);
			});
		} else {
			return false;
		}
	}
	
	function process_animate() {
		$('#process_arrow').fadeIn(600);
		$('#process_arrow-2').delay(1800).fadeIn(600,function(){
			$('#sample ul').append('<li>Login Sample</li>')
		});
	};
	box('searchForm');
	$('#samples a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	$('#search_ip').focus(function(){
		if($(this).val() == "enter IP"){
			//$(this).val("136.246.246.255");
			$(this).val("")
		}
		steps = false;
	})
	$('#search_ip').focusout(function(){
		steps = 'searchForm';
	})
	
	$('#searchForm').submit(function(e) {
		/* stop form from submitting normally */
		e.preventDefault();
		var successful = function(data, textStatus, jqXHR) {
			process_animate();
			pulse();
			steps = false;
		};
		var unsuccessful = function() {
			$('#btn_submit').val('resubmit')
		};

		$.ajax({
			type: 'POST',
			url: 'http://labs.ipviking.com/api/',
			data: {
				'apikey' : "8292777557e8eb8bc169c2af29e87ac07d0f1ac4857048044402dbee06ba5cea",
				'method' : "ipq",
				'ip' : $('#search_ip').val()
			},
			success: function(res) {
				if (res == "Success!") {
					successful;
				} else {
					unsuccessful;
				}
			},
			statusCode: {
				302: successful,
				417: unsuccessful
			},
			dataType: 'xml'
		});
	});
});