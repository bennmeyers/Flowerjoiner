$(document).ready(function(){
	$(".popover").click(function(event){ /* open the popover */
		event.preventDefault();
		$('.popover_container').show();
	});
	$(".popover_close").click(function(event){ /* close the popover */
		event.preventDefault();
		$('.popover_container').hide();
	});
});