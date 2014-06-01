<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-09 12:29:11 --- CRITICAL: ErrorException [ 1 ]: Method View::__toString() must not throw an exception ~ APPPATH\classes\Controller\Review.php [ 0 ] in file:line
2013-10-09 12:29:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 12:29:28 --- CRITICAL: ErrorException [ 1 ]: Method View::__toString() must not throw an exception ~ APPPATH\classes\Controller\Review.php [ 0 ] in file:line
2013-10-09 12:29:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 13:07:57 --- CRITICAL: ErrorException [ 1 ]: Method View::__toString() must not throw an exception ~ APPPATH\classes\Controller\Review.php [ 0 ] in file:line
2013-10-09 13:07:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 13:22:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: header ~ APPPATH\views\templates\default\main.php [ 30 ] in N:\home\app-loud.test\www\application\views\templates\default\main.php:30
2013-10-09 13:22:28 --- DEBUG: #0 N:\home\app-loud.test\www\application\views\templates\default\main.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'N:\home\app-lou...', 30, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#2 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#3 N:\home\app-loud.test\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 N:\home\app-loud.test\www\application\classes\Controller\Template.php(63): Kohana_Controller_Template->after()
#5 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#8 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#11 {main} in N:\home\app-loud.test\www\application\views\templates\default\main.php:30
2013-10-09 13:45:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: right_block ~ APPPATH\views\templates\default\main.php [ 32 ] in N:\home\app-loud.test\www\application\views\templates\default\main.php:32
2013-10-09 13:45:55 --- DEBUG: #0 N:\home\app-loud.test\www\application\views\templates\default\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'N:\home\app-lou...', 32, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#2 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#3 N:\home\app-loud.test\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 N:\home\app-loud.test\www\application\classes\Controller\Template.php(63): Kohana_Controller_Template->after()
#5 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#8 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#11 {main} in N:\home\app-loud.test\www\application\views\templates\default\main.php:32
2013-10-09 14:31:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: rightBlock ~ APPPATH\views\templates\default\main.php [ 32 ] in N:\home\app-loud.test\www\application\views\templates\default\main.php:32
2013-10-09 14:31:43 --- DEBUG: #0 N:\home\app-loud.test\www\application\views\templates\default\main.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'N:\home\app-lou...', 32, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#2 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#3 N:\home\app-loud.test\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 N:\home\app-loud.test\www\application\classes\Controller\Template.php(62): Kohana_Controller_Template->after()
#5 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#8 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#11 {main} in N:\home\app-loud.test\www\application\views\templates\default\main.php:32