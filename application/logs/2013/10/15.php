<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-15 13:44:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: platform ~ APPPATH\classes\Controller\Review.php [ 27 ] in N:\home\app-loud.test\www\application\classes\Controller\Review.php:27
2013-10-15 13:44:18 --- DEBUG: #0 N:\home\app-loud.test\www\application\classes\Controller\Review.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'N:\home\app-lou...', 27, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#4 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#7 {main} in N:\home\app-loud.test\www\application\classes\Controller\Review.php:27
2013-10-15 13:47:56 --- CRITICAL: ErrorException [ 1 ]: Call to a member function and_where() on a non-object ~ APPPATH\classes\Controller\Review.php [ 33 ] in file:line
2013-10-15 13:47:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-15 13:49:36 --- CRITICAL: ErrorException [ 1 ]: Call to a member function and_where() on a non-object ~ APPPATH\classes\Controller\Review.php [ 33 ] in file:line
2013-10-15 13:49:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line