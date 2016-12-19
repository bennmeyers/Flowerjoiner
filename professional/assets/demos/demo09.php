<?php
	$movie = $_GET['movie'];
	$image = $_GET['image'];
?>
<object id="player" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" name="player" width="640" height="379">
	<param name="movie" value="flash/player.swf" />
	<param name="allowfullscreen" value="true" />
	<param name="allowscriptaccess" value="always" />
	<param name="flashvars" value="file=http://www.photoncreative.com/<?php echo $movie ?>&image=<?php echo $image ?>&autostart=true" />
	<embed
		type="application/x-shockwave-flash"
		id="player0"
		name="player0"
		src="flash/player.swf" 
		width="640" 
		height="379"
		allowscriptaccess="always" 
		allowfullscreen="true"
		flashvars="file=http://www.photoncreative.com/<?php echo $movie ?>&image=<?php echo $image ?>&autostart=true&bufferlength=5" 
	/>
</object>
<p>Video not displayed: property of Photon Creative</p>