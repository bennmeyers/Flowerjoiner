<?php $pagename=basename($_SERVER['PHP_SELF']);$pagename=trim($pagename, "\.['php'|'html']");if (!$pagename){$pagename='index';};$css=date ("F d Y H:i:s.", filemtime($filename));if ($pagename != "404"){$version=date("ymdHis", filemtime('assets/styles/main.css'));}else{$version=0;} ?><!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <title>Portfolio</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/jscript/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="/assets/jscript/jquery.fancybox.js"></script>
    <script type="text/javascript" src="/assets/jscript/shared.js?v=0"></script>
<?php if($pagename) { ?>
    <script type="text/javascript" src="/assets/jscript/<?php echo $pagename; ?>.js?v=0"></script>
<?php } ?>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:100,400' rel='stylesheet' type='text/css'>
    <link href="/assets/styles/jquery.fancybox.css?v=0" rel="stylesheet" type="text/css" media="all" />
    <link href="/assets/styles/main.css?v=<?php echo $version ?>" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>