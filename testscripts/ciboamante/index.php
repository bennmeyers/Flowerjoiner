<?php include("includes/global/header.php"); ?>
<div id="homepage">
<?php include("includes/content/header.php"); ?>

    <div id="content">
    
        <div id="mainContent">
            <canvas id="gameArea" style="height:500px;width:100%;"></canvas>
        </div>
		<script>

		var c=document.getElementById("gameArea");
		var ctx=c.getContext("2d");
		ctx.beginPath();
		ctx.arc(100,75,50,0,2*Math.PI);
		ctx.stroke();

		</script>
    </div><!-- #content -->
<?php include("includes/content/footer.php"); ?>

</div>
<?php include("includes/global/footer.php"); ?>