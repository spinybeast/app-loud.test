<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-11 13:55:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: rev_id ~ APPPATH\views\templates\admin\rev_edit.php [ 53 ] in Z:\home\app-loud.test\www\application\views\templates\admin\rev_edit.php:53
2013-06-11 13:55:17 --- DEBUG: #0 Z:\home\app-loud.test\www\application\views\templates\admin\rev_edit.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\app-lou...', 53, Array)
#1 Z:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('Z:\home\app-lou...')
#2 Z:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\app-lou...', Array)
#3 Z:\home\app-loud.test\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\app-loud.test\www\application\classes\Controller\admin\Review.php(71): Kohana_View->__toString()
#5 Z:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Admin_Review->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 Z:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Review))
#8 Z:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 Z:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#11 {main} in Z:\home\app-loud.test\www\application\views\templates\admin\rev_edit.php:53