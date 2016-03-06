<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-06-11 12:54:13 -07:00 --- error: #2013: Lost connection to MySQL server during query [ SELECT *
FROM `caches`
WHERE `key` IN ('d1c0502f57f16770e2635d6803491674') ]
#0 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Mysqli.php(79): Database_Mysqli_Result_Core->__construct(false, 'SELECT *?FROM `...', Object(mysqli), true)
#1 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database.php(272): Database_Mysqli_Core->query_execute('SELECT *?FROM `...')
#2 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/MY_Database.php(45): Database_Core->query('SELECT *?FROM `...')
#3 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Builder.php(973): Database->query('SELECT *?FROM `...')
#4 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/drivers/Cache/Database.php(126): Database_Builder_Core->execute()
#5 /homepages/42/d202551571/htdocs/gallery/system/libraries/Cache.php(141): Cache_Database_Driver->get(Array, true)
#6 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/Gallery_View.php(84): Cache_Core->get('d1c0502f57f1677...')
#7 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/Theme_View.php(288): Gallery_View_Core->combine_files(Array, 'javascript')
#8 /homepages/42/d202551571/htdocs/gallery/themes/wind/views/page.html.php(70): Theme_View_Core->__call('head', Array)
#9 /homepages/42/d202551571/htdocs/gallery/themes/wind/views/page.html.php(70): Theme_View->head()
#10 /homepages/42/d202551571/htdocs/gallery/system/libraries/View.php(318): include('/homepages/42/d...')
#11 /homepages/42/d202551571/htdocs/gallery/system/libraries/View.php(260): View_Core->load_view('/homepages/42/d...', Array)
#12 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/MY_View.php(69): View_Core->render(false, false, false)
#13 /homepages/42/d202551571/htdocs/gallery/system/libraries/View.php(226): View->render()
#14 /homepages/42/d202551571/htdocs/gallery/modules/tag/controllers/tag.php(47): View_Core->__toString()
#15 [internal function]: Tag_Controller->__call('2010', Array)
#16 /homepages/42/d202551571/htdocs/gallery/system/core/Kohana.php(331): ReflectionMethod->invokeArgs(Object(Tag_Controller), Array)
#17 [internal function]: Kohana_Core::instance(NULL)
#18 /homepages/42/d202551571/htdocs/gallery/system/core/Event.php(208): call_user_func_array(Array, Array)
#19 /homepages/42/d202551571/htdocs/gallery/application/Bootstrap.php(67): Event_Core::run('system.execute')
#20 /homepages/42/d202551571/htdocs/gallery/index.php(97): require('/homepages/42/d...')
#21 {main}
2014-06-11 13:04:45 -07:00 --- error: Database_Exception [ 44 ]: #2013: Lost connection to MySQL server during query [ SELECT *
FROM `caches`
WHERE `key` IN ('var_cache') ]
/homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Mysqli_Result.php [ 27 ]
#0 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Mysqli.php(79): Database_Mysqli_Result_Core->__construct(false, 'SELECT *?FROM `...', Object(mysqli), true)
#1 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database.php(272): Database_Mysqli_Core->query_execute('SELECT *?FROM `...')
#2 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/MY_Database.php(45): Database_Core->query('SELECT *?FROM `...')
#3 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Builder.php(973): Database->query('SELECT *?FROM `...')
#4 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/drivers/Cache/Database.php(126): Database_Builder_Core->execute()
#5 /homepages/42/d202551571/htdocs/gallery/system/libraries/Cache.php(141): Cache_Database_Driver->get(Array, true)
#6 /homepages/42/d202551571/htdocs/gallery/modules/gallery/helpers/module.php(430): Cache_Core->get('var_cache')
#7 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/Gallery_I18n.php(65): module_Core::get_var('gallery', 'default_locale')
#8 [internal function]: Gallery_I18n_Core::instance(Array)
#9 /homepages/42/d202551571/htdocs/gallery/system/core/Event.php(208): call_user_func_array(Array, Array)
#10 /homepages/42/d202551571/htdocs/gallery/application/Bootstrap.php(58): Event_Core::run('system.ready')
#11 /homepages/42/d202551571/htdocs/gallery/index.php(97): require('/homepages/42/d...')
#12 {main}
2014-06-11 17:18:12 -07:00 --- error: Database_Exception [ 44 ]: #2013: Lost connection to MySQL server during query [ SELECT *
FROM `caches`
WHERE `key` IN ('var_cache') ]
/homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Mysqli_Result.php [ 27 ]
#0 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Mysqli.php(79): Database_Mysqli_Result_Core->__construct(false, 'SELECT *?FROM `...', Object(mysqli), true)
#1 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database.php(272): Database_Mysqli_Core->query_execute('SELECT *?FROM `...')
#2 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/MY_Database.php(45): Database_Core->query('SELECT *?FROM `...')
#3 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Builder.php(973): Database->query('SELECT *?FROM `...')
#4 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/drivers/Cache/Database.php(126): Database_Builder_Core->execute()
#5 /homepages/42/d202551571/htdocs/gallery/system/libraries/Cache.php(141): Cache_Database_Driver->get(Array, true)
#6 /homepages/42/d202551571/htdocs/gallery/modules/gallery/helpers/module.php(430): Cache_Core->get('var_cache')
#7 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/Gallery_I18n.php(65): module_Core::get_var('gallery', 'default_locale')
#8 [internal function]: Gallery_I18n_Core::instance(Array)
#9 /homepages/42/d202551571/htdocs/gallery/system/core/Event.php(208): call_user_func_array(Array, Array)
#10 /homepages/42/d202551571/htdocs/gallery/application/Bootstrap.php(58): Event_Core::run('system.ready')
#11 /homepages/42/d202551571/htdocs/gallery/index.php(97): require('/homepages/42/d...')
#12 {main}
2014-06-11 18:17:50 -07:00 --- error: Database_Exception [ 44 ]: #2013: Lost connection to MySQL server during query [ SELECT *
FROM `caches`
WHERE `key` IN ('var_cache') ]
/homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Mysqli_Result.php [ 27 ]
#0 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Mysqli.php(79): Database_Mysqli_Result_Core->__construct(false, 'SELECT *?FROM `...', Object(mysqli), true)
#1 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database.php(272): Database_Mysqli_Core->query_execute('SELECT *?FROM `...')
#2 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/MY_Database.php(45): Database_Core->query('SELECT *?FROM `...')
#3 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Builder.php(973): Database->query('SELECT *?FROM `...')
#4 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/drivers/Cache/Database.php(126): Database_Builder_Core->execute()
#5 /homepages/42/d202551571/htdocs/gallery/system/libraries/Cache.php(141): Cache_Database_Driver->get(Array, true)
#6 /homepages/42/d202551571/htdocs/gallery/modules/gallery/helpers/module.php(430): Cache_Core->get('var_cache')
#7 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/Gallery_I18n.php(65): module_Core::get_var('gallery', 'default_locale')
#8 [internal function]: Gallery_I18n_Core::instance(Array)
#9 /homepages/42/d202551571/htdocs/gallery/system/core/Event.php(208): call_user_func_array(Array, Array)
#10 /homepages/42/d202551571/htdocs/gallery/application/Bootstrap.php(58): Event_Core::run('system.ready')
#11 /homepages/42/d202551571/htdocs/gallery/index.php(97): require('/homepages/42/d...')
#12 {main}
2014-06-11 19:58:39 -07:00 --- error: Database_Exception [ 44 ]: #2013: Lost connection to MySQL server during query [ SELECT *
FROM `caches`
WHERE `key` IN ('var_cache') ]
/homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Mysqli_Result.php [ 27 ]
#0 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Mysqli.php(79): Database_Mysqli_Result_Core->__construct(false, 'SELECT *?FROM `...', Object(mysqli), true)
#1 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database.php(272): Database_Mysqli_Core->query_execute('SELECT *?FROM `...')
#2 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/MY_Database.php(45): Database_Core->query('SELECT *?FROM `...')
#3 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Builder.php(973): Database->query('SELECT *?FROM `...')
#4 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/drivers/Cache/Database.php(126): Database_Builder_Core->execute()
#5 /homepages/42/d202551571/htdocs/gallery/system/libraries/Cache.php(141): Cache_Database_Driver->get(Array, true)
#6 /homepages/42/d202551571/htdocs/gallery/modules/gallery/helpers/module.php(430): Cache_Core->get('var_cache')
#7 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/Gallery_I18n.php(65): module_Core::get_var('gallery', 'default_locale')
#8 [internal function]: Gallery_I18n_Core::instance(Array)
#9 /homepages/42/d202551571/htdocs/gallery/system/core/Event.php(208): call_user_func_array(Array, Array)
#10 /homepages/42/d202551571/htdocs/gallery/application/Bootstrap.php(58): Event_Core::run('system.ready')
#11 /homepages/42/d202551571/htdocs/gallery/index.php(97): require('/homepages/42/d...')
#12 {main}
2014-06-11 19:59:05 -07:00 --- error: Database_Exception [ 44 ]: #2013: Lost connection to MySQL server during query [ SELECT *
FROM `caches`
WHERE `key` IN ('var_cache') ]
/homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Mysqli_Result.php [ 27 ]
#0 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Mysqli.php(79): Database_Mysqli_Result_Core->__construct(false, 'SELECT *?FROM `...', Object(mysqli), true)
#1 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database.php(272): Database_Mysqli_Core->query_execute('SELECT *?FROM `...')
#2 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/MY_Database.php(45): Database_Core->query('SELECT *?FROM `...')
#3 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Builder.php(973): Database->query('SELECT *?FROM `...')
#4 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/drivers/Cache/Database.php(126): Database_Builder_Core->execute()
#5 /homepages/42/d202551571/htdocs/gallery/system/libraries/Cache.php(141): Cache_Database_Driver->get(Array, true)
#6 /homepages/42/d202551571/htdocs/gallery/modules/gallery/helpers/module.php(430): Cache_Core->get('var_cache')
#7 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/Gallery_I18n.php(65): module_Core::get_var('gallery', 'default_locale')
#8 [internal function]: Gallery_I18n_Core::instance(Array)
#9 /homepages/42/d202551571/htdocs/gallery/system/core/Event.php(208): call_user_func_array(Array, Array)
#10 /homepages/42/d202551571/htdocs/gallery/application/Bootstrap.php(58): Event_Core::run('system.ready')
#11 /homepages/42/d202551571/htdocs/gallery/index.php(97): require('/homepages/42/d...')
#12 {main}
2014-06-11 21:12:24 -07:00 --- error: Database_Exception [ 44 ]: #2013: Lost connection to MySQL server during query [ SELECT *
FROM `caches`
WHERE `key` IN ('var_cache') ]
/homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Mysqli_Result.php [ 27 ]
#0 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Mysqli.php(79): Database_Mysqli_Result_Core->__construct(false, 'SELECT *?FROM `...', Object(mysqli), true)
#1 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database.php(272): Database_Mysqli_Core->query_execute('SELECT *?FROM `...')
#2 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/MY_Database.php(45): Database_Core->query('SELECT *?FROM `...')
#3 /homepages/42/d202551571/htdocs/gallery/system/libraries/Database_Builder.php(973): Database->query('SELECT *?FROM `...')
#4 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/drivers/Cache/Database.php(126): Database_Builder_Core->execute()
#5 /homepages/42/d202551571/htdocs/gallery/system/libraries/Cache.php(141): Cache_Database_Driver->get(Array, true)
#6 /homepages/42/d202551571/htdocs/gallery/modules/gallery/helpers/module.php(430): Cache_Core->get('var_cache')
#7 /homepages/42/d202551571/htdocs/gallery/modules/gallery/libraries/Gallery_I18n.php(65): module_Core::get_var('gallery', 'default_locale')
#8 [internal function]: Gallery_I18n_Core::instance(Array)
#9 /homepages/42/d202551571/htdocs/gallery/system/core/Event.php(208): call_user_func_array(Array, Array)
#10 /homepages/42/d202551571/htdocs/gallery/application/Bootstrap.php(58): Event_Core::run('system.ready')
#11 /homepages/42/d202551571/htdocs/gallery/index.php(97): require('/homepages/42/d...')
#12 {main}
