<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-09 08:42:02 --- CRITICAL: Kohana_Exception [ 0 ]: The count_all property does not exist in the Model_category class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php:600
2013-06-09 08:42:02 --- DEBUG: #0 Z:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('count_all')
#1 Z:\home\app-loud.test\www\application\classes\Controller\admin\Category.php(81): Kohana_ORM->__get('count_all')
#2 Z:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Category->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Category))
#5 Z:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php:600
2013-06-09 14:47:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function trim_text() ~ APPPATH\classes\Controller\Review.php [ 84 ] in :
2013-06-09 14:47:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-09 14:47:29 --- CRITICAL: Kohana_Exception [ 0 ]: The resume property does not exist in the Model_review class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php:600
2013-06-09 14:47:29 --- DEBUG: #0 Z:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('resume')
#1 Z:\home\app-loud.test\www\application\classes\Controller\Review.php(84): Kohana_ORM->__get('resume')
#2 Z:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#5 Z:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php:600