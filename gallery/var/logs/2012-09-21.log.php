<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-09-21 18:59:20 -07:00 --- error: Database_Exception [ 44 ]: #1040: Too many connections
/homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Mysqli.php [ 33 ]
#0 /homepages/42/d202551571/htdocs/gallery/modules/gallery/hooks/init_gallery.php(30): Database_Mysqli_Core->connect()
#1 /homepages/42/d202551571/htdocs/gallery/system/core/Kohana.php(214): include('/homepages/42/d...')
#2 /homepages/42/d202551571/htdocs/gallery/application/Bootstrap.php(49): Kohana_Core::setup()
#3 /homepages/42/d202551571/htdocs/gallery/index.php(97): require('/homepages/42/d...')
#4 {main}
2012-09-21 19:26:54 -07:00 --- error: Database_Exception [ 44 ]: #1040: Too many connections
/homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Mysqli.php [ 33 ]
#0 /homepages/42/d202551571/htdocs/gallery/modules/gallery/hooks/init_gallery.php(30): Database_Mysqli_Core->connect()
#1 /homepages/42/d202551571/htdocs/gallery/system/core/Kohana.php(214): include('/homepages/42/d...')
#2 /homepages/42/d202551571/htdocs/gallery/application/Bootstrap.php(49): Kohana_Core::setup()
#3 /homepages/42/d202551571/htdocs/gallery/index.php(97): require('/homepages/42/d...')
#4 {main}
