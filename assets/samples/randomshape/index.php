<?php include("includes/global/header.php"); ?>
<div id="homepage">
<?php include("includes/content/header.php"); ?>
    <div id="content">
        <div id="mainContent">
            <h1>Makes a Random Shape in a Random Color</h1>
            <canvas id="gameArea" height="500" width="500" style="height:500px;width:500px;"></canvas>
            <p>I was starting to make this far more complex, but was having difficulties determining if a line was overlapping an area, crossing over another line, or a new point was within an area. I had no problem making fades or text.</p>
            points on shape:
            <input class="sides" type="text" id="sides-1" />
            <button class="submit" id="submit-1" value="Submit">Create Shape</button>
            <br /><br />
            <button id="clear" value="Clear">Clear</button>
        </div>
    </div><!-- #content -->
<?php include("includes/content/footer.php"); ?>
</div>
<?php include("includes/global/footer.php"); ?>