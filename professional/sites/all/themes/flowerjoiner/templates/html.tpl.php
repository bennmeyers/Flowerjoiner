<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" <?php print $html_attributes ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" <?php print $html_attributes ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html<?php print $html_attributes . $rdf_namespaces ?>><!--<![endif]-->

<head><!-- fj7-4.x -->
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <link href='https://fonts.googleapis.com/css?family=Lato:300,300italic,700' rel='stylesheet' type='text/css'>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
  <link href="/assets/css/custom.css" rel="stylesheet" type="text/css" media="screen">
  <?php print $styles ?>
</head>

<body id="<?php print $body_id ?>" class="<?php print $classes ?>" <?php print $attributes ?>>
<?php print $page_top ?>
<?php print $page ?>
<?php print $page_bottom ?>

<?php print $scripts ?>
</body>
</html>