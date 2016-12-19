<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" <?php print $html_attributes ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" <?php print $html_attributes ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html<?php print $html_attributes . $rdf_namespaces ?>><!--<![endif]-->

<head><!-- fj7-4.x -->
  <title><?php print $head_title ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robot" content="index,follow">
  <meta name="keywords" content=".NET, AJAX, Analytics, AngularJS, ASP, CSS, Drupal, Eclipse, Git, HTML, JavaScript, jQuery, KnockoutJS, MySQL, OS X, Perl, Photoshop, PHP, Python, SEO, XML, WordPress">
  <?php print $head ?>
  <?php print $styles ?>
</head>

<body id="<?php print $body_id ?>" class="<?php print $classes ?>" <?php print $attributes ?>>
<?php print $page_top ?>
<?php print $page ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.min.js" integrity="sha256-gvQgAFzTH6trSrAWoH1iPo9Xc96QxSZ3feW6kem+O00=" crossorigin="anonymous"></script>
<?php print $page_bottom ?>

<?php print $scripts ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.min.js" integrity="sha256-gvQgAFzTH6trSrAWoH1iPo9Xc96QxSZ3feW6kem+O00=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/assets/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="/assets/js/custom-shared.js"></script>
<script type="text/javascript" src="/assets/js/portfolio.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-11744746-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>