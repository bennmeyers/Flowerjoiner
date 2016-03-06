<?php include("assets/includes/global/header.php"); ?>
<div id="homepage" class="container">
    <?php include("assets/includes/content/header.php"); ?>

    <div id="content">
    
        <div id="main_content">
            <div id="carousel-front" class="carousel slide" data-interval="6000" data-pause="hover">
              <!-- Indicators -->
              <ol class="carousel-indicators hidden-xs">
                <li data-target="#carousel-front" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-front" data-slide-to="1"></li>
                <li data-target="#carousel-front" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                    <a href="http://www.pacificcrush.org" alt="PacificCrush" title="Pacific Crush" target="_blank"><img src="assets/images/carousel-front/ice.jpg" alt="sample1" height="400" width="1040" /></a>
                    <div class="carousel-caption text-yellow">
                        <div>We helped PacificCrush by navigating them through the financial process to success!</div>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/carousel-front/ciboamante.jpg" alt="sample2 - CiboAmante" height="400" width="1040" />
                    <div class="carousel-caption text-orange">
                        <div>Ciboamante, selling quick and healthy recipes, needed our help to construct a path to success. Now they have a profitable business.</div>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/carousel-front/affforism.jpg" alt="sample3" height="400" width="1040" />
                    <div class="carousel-caption text-red">
                         <div>Affforism, a business selling sound creation and manipulation software, wanted to get feedback about the products it should highlight.</div>
                    </div>
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-front" data-slide="prev">
                <span class="icon-prev"></span>
              </a>
              <a class="right carousel-control" href="#carousel-front" data-slide="next">
                <span class="icon-next"></span>
              </a>
            </div>
        </div><!-- #main_content -->
        <?php include("assets/includes/content/subNav.php"); ?>

    </div><!-- #content -->
    <?php include("assets/includes/content/footer.php"); ?>
</div><!-- #homepage -->
<?php include("assets/includes/global/footer.php"); ?>