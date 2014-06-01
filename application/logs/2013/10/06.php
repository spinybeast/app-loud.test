<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-06 14:59:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\templates\default\main.php [ 32 ] in file:line
2013-10-06 14:59:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-06 15:11:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Controller\Review.php [ 121 ] in file:line
2013-10-06 15:11:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-06 15:11:57 --- CRITICAL: ErrorException [ 1 ]: Method View::__toString() must not throw an exception ~ APPPATH\classes\Controller\Review.php [ 0 ] in file:line
2013-10-06 15:11:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-06 15:19:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cur ~ APPPATH\views\templates\default\reviews_index.php [ 28 ] in N:\home\app-loud.test\www\application\views\templates\default\reviews_index.php:28
2013-10-06 15:19:14 --- DEBUG: #0 N:\home\app-loud.test\www\application\views\templates\default\reviews_index.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'N:\home\app-lou...', 28, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#2 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#3 N:\home\app-loud.test\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 N:\home\app-loud.test\www\application\views\templates\default\main.php(32): Kohana_View->__toString()
#5 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#6 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#7 N:\home\app-loud.test\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 N:\home\app-loud.test\www\application\classes\Controller\Template.php(63): Kohana_Controller_Template->after()
#9 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#12 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#15 {main} in N:\home\app-loud.test\www\application\views\templates\default\reviews_index.php:28
2013-10-06 15:19:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cur ~ APPPATH\views\templates\default\reviews_index.php [ 28 ] in N:\home\app-loud.test\www\application\views\templates\default\reviews_index.php:28
2013-10-06 15:19:22 --- DEBUG: #0 N:\home\app-loud.test\www\application\views\templates\default\reviews_index.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'N:\home\app-lou...', 28, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#2 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#3 N:\home\app-loud.test\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 N:\home\app-loud.test\www\application\views\templates\default\main.php(32): Kohana_View->__toString()
#5 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#6 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#7 N:\home\app-loud.test\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 N:\home\app-loud.test\www\application\classes\Controller\Template.php(63): Kohana_Controller_Template->after()
#9 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#12 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#15 {main} in N:\home\app-loud.test\www\application\views\templates\default\reviews_index.php:28
2013-10-06 15:25:00 --- CRITICAL: ErrorException [ 1 ]: Method View::__toString() must not throw an exception ~ APPPATH\classes\Controller\Review.php [ 0 ] in file:line
2013-10-06 15:25:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-06 15:25:04 --- CRITICAL: ErrorException [ 1 ]: Method View::__toString() must not throw an exception ~ APPPATH\classes\Controller\Review.php [ 0 ] in file:line
2013-10-06 15:25:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-06 15:33:30 --- CRITICAL: ErrorException [ 1 ]: Method View::__toString() must not throw an exception ~ APPPATH\classes\Controller\Review.php [ 0 ] in file:line
2013-10-06 15:33:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-06 15:33:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: footer ~ APPPATH\views\templates\default\main.php [ 33 ] in N:\home\app-loud.test\www\application\views\templates\default\main.php:33
2013-10-06 15:33:34 --- DEBUG: #0 N:\home\app-loud.test\www\application\views\templates\default\main.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'N:\home\app-lou...', 33, Array)
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
#11 {main} in N:\home\app-loud.test\www\application\views\templates\default\main.php:33