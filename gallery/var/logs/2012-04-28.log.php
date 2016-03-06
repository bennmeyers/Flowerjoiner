<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-28 13:03:23 -07:00 --- error: Kohana_Exception [ 403 ]: @todo FORBIDDEN
/homepages/42/d202551571/htdocs/gallery/modules/gallery/helpers/access.php [ 194 ]
#0 /homepages/42/d202551571/htdocs/gallery/modules/gallery/helpers/access.php(417): access_Core::forbidden()
#1 /homepages/42/d202551571/htdocs/gallery/modules/gallery/controllers/login.php(29): access_Core::verify_csrf()
#2 [internal function]: Login_Controller->auth_ajax()
#3 /homepages/42/d202551571/htdocs/gallery/system/core/Kohana.php(331): ReflectionMethod->invokeArgs(Object(Login_Controller), Array)
#4 [internal function]: Kohana_Core::instance(NULL)
#5 /homepages/42/d202551571/htdocs/gallery/system/core/Event.php(208): call_user_func_array(Array, Array)
#6 /homepages/42/d202551571/htdocs/gallery/application/Bootstrap.php(67): Event_Core::run('system.execute')
#7 /homepages/42/d202551571/htdocs/gallery/index.php(97): require('/homepages/42/d...')
#8 {main}
2012-04-28 13:03:23 -07:00 --- error: Missing messages entry kohana/core.errors.403 for message kohana/core
