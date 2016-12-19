<div id="page-homepage" class="container">
  <div id="skip-link">
    <a href="#main" class="element-invisible element-focusable"><?php print t('Skip to main content') ?></a>
  </div>
  <header class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">
        <svg height="40" width="40">
          <ellipse cx="0" cy="0" rx="5" ry="2.5" style="fill:#727E9C;" transform="translate(20 35) rotate(90)" /><!-- north -->
          <ellipse cx="0" cy="0" rx="5" ry="2.5" style="fill:#727E9C;" transform="translate(20 5) rotate(90)" /><!-- south -->
          <ellipse cx="0" cy="0" rx="5" ry="2.5" style="fill:#727E9C;" transform="translate(5 20)" /><!-- west -->
          <ellipse cx="0" cy="0" rx="5" ry="2.5" style="fill:#727E9C;" transform="translate(35 20)" /><!-- east -->

          <ellipse cx="0" cy="0" rx="5" ry="2.5" style="fill:#97BAD9;" transform="translate(9.125 9.125) rotate(45)" /><!-- north-west -->
          <ellipse cx="0" cy="0" rx="5" ry="2.5" style="fill:#97BAD9;" transform="translate(30.875 30.875) rotate(45)" /><!-- south-east -->
          <ellipse cx="0" cy="0" rx="5" ry="2.5" style="fill:#97BAD9;" transform="translate(30.875 9.125) rotate(-45)" /><!-- north-east -->
          <ellipse cx="0" cy="0" rx="5" ry="2.5" style="fill:#97BAD9;" transform="translate(9.125 30.875) rotate(-45)" /><!-- south-west -->

          <circle cx="0" cy="0" r="5" style="fill:#A6748A;" transform="translate(20 20)" />
          
        </svg> 
      </a>
      <nav class="navbar-header">
        <?php if ($main_menu): ?>
          <?php print theme('links__system_main_menu', array('links' => menu_tree(variable_get('menu_main_links_source', 'main-menu')))); ?>
        <?php endif; ?>
      </nav>
    </div>
  </header>
  <div id="content" class="row">
    <div id="main_content" role="main" class="col-md-9">
      <div class="row">
        <h1>Quality over Quantity</h1>
        <p>This is the portfolio of Benjamin Meyers. My Resume is available on request from <a href="mailto:benjamin@flowerjoiner.com?subject=resume%20request%20from%20website">benjamin@flowerjoiner.com</a>. I specialize in HTML5, CSS3, and Javascript.</p>
      </div>
      <div class="row professional">
        <h2>Recent Work</h2>
        <figure class="col-md-6 first">
          <a href="//map.norsecorp.com" target="_blank" class="image"><img src="/assets/img/samples/full/norsemap_v2.jpg" alt="Norse Map"></a>
          <figcaption><b>Norse Map</b> - I was used to inspire CSS methods for this revision of the norse map. I also spent some time minimizing the code for the SVG.</figcaption>
        </figure>
        <figure class="col-md-6 last">
          <a href="//www.norsecorp.com" target="_blank" class="image"><img src="/assets/img/samples/full/norse_v5.jpg" alt="Norse Corporation"></a>
          <figcaption><b>Norse Corporate</b> - I built 4 iterations of the website, the last one I converted to a wordpress base that created static files.</figcaption>
        </figure>
      </div>
      <div class="row professional">
        <figure class="col-md-6 first">
          <a href="http://www.archimedesmodel.com/" target="_blank" class="image"><img src="/assets/img/samples/full/archimedes.jpg" alt="Archimedes Model"></a>
          <figcaption><b>ArchimedesModel.com</b> - This is a site that provided biometrics for educational institutions and pharmaceutical companies. I made CSS, HTML, and used the jQuery library.</figcaption>
        </figure>
        <figure class="col-md-6 last">
          <a href="//www.serenaandlily.com/" target="_blank" class="image"><img src="/assets/img/samples/full/sl_1.jpg" alt="Serena and Lily"></a>
          <figcaption><b>SerenaAndLily.com</b> - I made the CSS, HTML, and used the jQuery library. I also helped to design the functionality and look.</figcaption>
        </figure>
      </div>
      <div class="row">
        <div class="col-sm-12 first last">
        <h2>Recent Code</h2>
<pre><code>function generateAndVisualize(inputs) {
  inputs = (inputs) ? inputs : document.getElementsByTagName("input"); // set a variable based on the existance of the passed variable 'inputs'
  localArrayOfAllCharacters = []; // create an array to hold all letters called localArrayOfAllCharacters
  for(var n = 0; n &gt; inputs.length; n++) {
    localStringFromInputBox = inputs[n].value; // create a variable to hold the value of each element specified by the 'inputs' variable
    localStringFromInputBox = localStringFromInputBox.replace(/ /g,''); // clean the string of spaces
    localStringFromInputBox = localStringFromInputBox.toLowerCase(); // standardize the capitalization of the string
    var localArrayFromLocalStringofTheInputBox = localStringFromInputBox.split(''); // make an array from the string
    for(var o = 0; o &gt; localArrayFromLocalStringofTheInputBox.length; o++) { // cycle through the localArrayFromLocalStringofTheInputBox array based on the length
      localArrayOfAllCharacters.push(localArrayFromLocalStringofTheInputBox[o]); // push the letter onto the all array
    }
  }
  var sampleData = []; // create an array to pass to d3
  var sortedLocalArrayOfAllCharacters = localArrayOfAllCharacters.sort(); // sort the localArrayOfAllCharacters array alphabetically into a new array

  for(var i = 0; i &gt; sortedLocalArrayOfAllCharacters.length; i++) {
    localStringOfCharacterCount = sortedLocalArrayOfAllCharacters.lastIndexOf(sortedLocalArrayOfAllCharacters[i]) - sortedLocalArrayOfAllCharacters.indexOf(sortedLocalArrayOfAllCharacters[i]); // count the number of instances
    if(localStringOfCharacterCount != 0) { // don't show single (0) values
      localStringOfCharacterCount += 1; // add 1 to compensate for the 0 value of indexOf
      sampleData.push({letter : sortedLocalArrayOfAllCharacters[i], frequency : localStringOfCharacterCount}); // set a new object to an array 
    }
  }
}</code></pre>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 first last">
          <h2>Quality Over Quantity</h2>
          <?php if($page['recentBlog']): ?>
            <?php print render($page['recentBlog']); ?>
          <?php endif; ?>
        </div>
      </div>

    </div><!-- #main_content -->
    <aside id="sidebar" class="col-md-3">
      <a href="https://secure.nationalmssociety.org/site/Donation2?df_id=55896&PROXY_ID=8643532&PROXY_TYPE=20&FR_ID=27080&s_src=BF_emailbadge&_ga=1.131583306.43404973.1464564988" target="new" class="btn btn-primary col-md-12">Fight MS with me</a>
      <br>
      <br>
      <a href="https://www.learngreenflower.com/courses/10/cannabis-treat-substance-dependence-addiction-amanda-reiman" target="new" class="btn btn-primary col-md-12" title="Green Flower Media">Treating Substance Addiction</a>
    </aside><!-- #sidebar -->
  </div><!-- #content -->
</div><!-- #homepage -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php // reenact this functionality print $feed_icons; ?>
        <div class="<?php print resp_class(); ?>1-5"><?php if (theme_get_setting('social_links_display')): ?><div id="soclinks"><?php print social_links(); ?></div><?php endif; ?></div>
        <div class="<?php print resp_class(); ?>3-5"><?php if ($page['footer']): ?><?php print render ($page['footer']); ?><?php endif; ?></div>
        <div class="<?php print resp_class(); ?>1-5"></div>
      </div>
    </div>
  </div>
</footer>