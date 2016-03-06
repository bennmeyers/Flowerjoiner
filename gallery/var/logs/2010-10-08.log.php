<?php defined('SYSPATH') or die('No direct script access.'); ?>

2010-10-08 00:17:53 -07:00 --- error: Kohana_Exception [ 42 ]: The requested views, admin.html, could not be found
/homepages/42/d202551571/htdocs/gallery/system/core/Kohana.php [ 806 ]
#0 /homepages/42/d202551571/htdocs/gallery/system/libraries/View.php(83): Kohana_Core::find_file('views', 'admin.html', true)
#1 /homepages/42/d202551571/htdocs/gallery/system/libraries/View.php(49): View_Core->set_filename('admin.html', NULL)
#2 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/MY_View.php(56): View_Core->__construct('admin.html', NULL, NULL)
#3 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/Admin_View.php(30): View->__construct('admin.html')
#4 /homepages/42/d202551571/htdocs/gallery/modules/gallery/controllers/admin_advanced_settings.php(22): Admin_View_Core->__construct('admin.html')
#5 [internal function]: Admin_Advanced_Settings_Controller->index()
#6 /homepages/42/d202551571/htdocs/gallery/modules/gallery/controllers/admin.php(62): call_user_func_array(Array, Array)
#7 [internal function]: Admin_Controller->__call('advanced_settin...', Array)
#8 /homepages/42/d202551571/htdocs/gallery/system/core/Kohana.php(331): ReflectionMethod->invokeArgs(Object(Admin_Controller), Array)
#9 [internal function]: Kohana_Core::instance(NULL)
#10 /homepages/42/d202551571/htdocs/gallery/system/core/Event.php(208): call_user_func_array(Array, Array)
#11 /homepages/42/d202551571/htdocs/gallery/application/Bootstrap.php(67): Event_Core::run('system.execute')
#12 /homepages/42/d202551571/htdocs/gallery/index.php(97): require('/homepages/42/d...')
#13 {main}
2010-10-08 00:18:15 -07:00 --- error: Kohana_Exception [ 42 ]: The requested views, admin.html, could not be found
/homepages/42/d202551571/htdocs/gallery/system/core/Kohana.php [ 806 ]
#0 /homepages/42/d202551571/htdocs/gallery/system/libraries/View.php(83): Kohana_Core::find_file('views', 'admin.html', true)
#1 /homepages/42/d202551571/htdocs/gallery/system/libraries/View.php(49): View_Core->set_filename('admin.html', NULL)
#2 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/MY_View.php(56): View_Core->__construct('admin.html', NULL, NULL)
#3 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/Admin_View.php(30): View->__construct('admin.html')
#4 /homepages/42/d202551571/htdocs/gallery/modules/gallery/controllers/admin_graphics.php(22): Admin_View_Core->__construct('admin.html')
#5 [internal function]: Admin_Graphics_Controller->index()
#6 /homepages/42/d202551571/htdocs/gallery/modules/gallery/controllers/admin.php(62): call_user_func_array(Array, Array)
#7 [internal function]: Admin_Controller->__call('graphics', Array)
#8 /homepages/42/d202551571/htdocs/gallery/system/core/Kohana.php(331): ReflectionMethod->invokeArgs(Object(Admin_Controller), Array)
#9 [internal function]: Kohana_Core::instance(NULL)
#10 /homepages/42/d202551571/htdocs/gallery/system/core/Event.php(208): call_user_func_array(Array, Array)
#11 /homepages/42/d202551571/htdocs/gallery/application/Bootstrap.php(67): Event_Core::run('system.execute')
#12 /homepages/42/d202551571/htdocs/gallery/index.php(97): require('/homepages/42/d...')
#13 {main}
