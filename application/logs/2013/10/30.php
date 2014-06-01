<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-30 02:00:29 --- CRITICAL: ErrorException [ 1 ]: Class 'MobileDetect' not found ~ APPPATH\classes\Platforms.php [ 32 ] in file:line
2013-10-30 02:00:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-30 03:47:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\Kohana\Request.php [ 960 ] in N:\home\app-loud.test\www\system\classes\Kohana\Request.php:960
2013-10-30 03:47:52 --- DEBUG: #0 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(960): Kohana_Core::error_handler(8, 'Undefined index...', 'N:\home\app-lou...', 960, Array)
#1 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#2 {main} in N:\home\app-loud.test\www\system\classes\Kohana\Request.php:960
2013-10-30 04:25:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\Kohana\Request.php [ 960 ] in N:\home\app-loud.test\www\system\classes\Kohana\Request.php:960
2013-10-30 04:25:43 --- DEBUG: #0 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(960): Kohana_Core::error_handler(8, 'Undefined index...', 'N:\home\app-lou...', 960, Array)
#1 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#2 {main} in N:\home\app-loud.test\www\system\classes\Kohana\Request.php:960
2013-10-30 04:27:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\Kohana\Request.php [ 960 ] in N:\home\app-loud.test\www\system\classes\Kohana\Request.php:960
2013-10-30 04:27:13 --- DEBUG: #0 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(960): Kohana_Core::error_handler(8, 'Undefined index...', 'N:\home\app-lou...', 960, Array)
#1 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#2 {main} in N:\home\app-loud.test\www\system\classes\Kohana\Request.php:960
2013-10-30 04:27:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\Kohana\Request.php [ 960 ] in N:\home\app-loud.test\www\system\classes\Kohana\Request.php:960
2013-10-30 04:27:15 --- DEBUG: #0 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(960): Kohana_Core::error_handler(8, 'Undefined index...', 'N:\home\app-lou...', 960, Array)
#1 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#2 {main} in N:\home\app-loud.test\www\system\classes\Kohana\Request.php:960
2013-10-30 13:37:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''category_cloud'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Controller\Review.php [ 121 ] in file:line
2013-10-30 13:37:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-30 13:37:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\templates\default\right_block.php [ 11 ] in N:\home\app-loud.test\www\application\views\templates\default\right_block.php:11
2013-10-30 13:37:44 --- DEBUG: #0 N:\home\app-loud.test\www\application\views\templates\default\right_block.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'N:\home\app-lou...', 11, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#2 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#3 N:\home\app-loud.test\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 N:\home\app-loud.test\www\application\views\templates\default\main.php(32): Kohana_View->__toString()
#5 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#6 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#7 N:\home\app-loud.test\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 N:\home\app-loud.test\www\application\classes\Controller\Template.php(62): Kohana_Controller_Template->after()
#9 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#12 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#15 {main} in N:\home\app-loud.test\www\application\views\templates\default\right_block.php:11
2013-10-30 13:39:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\templates\default\right_block.php [ 11 ] in N:\home\app-loud.test\www\application\views\templates\default\right_block.php:11
2013-10-30 13:39:14 --- DEBUG: #0 N:\home\app-loud.test\www\application\views\templates\default\right_block.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'N:\home\app-lou...', 11, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#2 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#3 N:\home\app-loud.test\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 N:\home\app-loud.test\www\application\views\templates\default\main.php(32): Kohana_View->__toString()
#5 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#6 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#7 N:\home\app-loud.test\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 N:\home\app-loud.test\www\application\classes\Controller\Template.php(62): Kohana_Controller_Template->after()
#9 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#12 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#15 {main} in N:\home\app-loud.test\www\application\views\templates\default\right_block.php:11
2013-10-30 13:39:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\templates\default\right_block.php [ 11 ] in N:\home\app-loud.test\www\application\views\templates\default\right_block.php:11
2013-10-30 13:39:27 --- DEBUG: #0 N:\home\app-loud.test\www\application\views\templates\default\right_block.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'N:\home\app-lou...', 11, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#2 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#3 N:\home\app-loud.test\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 N:\home\app-loud.test\www\application\views\templates\default\main.php(32): Kohana_View->__toString()
#5 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#6 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#7 N:\home\app-loud.test\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 N:\home\app-loud.test\www\application\classes\Controller\Template.php(62): Kohana_Controller_Template->after()
#9 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#12 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#15 {main} in N:\home\app-loud.test\www\application\views\templates\default\right_block.php:11
2013-10-30 13:39:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\templates\default\right_block.php [ 11 ] in N:\home\app-loud.test\www\application\views\templates\default\right_block.php:11
2013-10-30 13:39:53 --- DEBUG: #0 N:\home\app-loud.test\www\application\views\templates\default\right_block.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'N:\home\app-lou...', 11, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#2 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#3 N:\home\app-loud.test\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 N:\home\app-loud.test\www\application\views\templates\default\main.php(32): Kohana_View->__toString()
#5 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#6 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#7 N:\home\app-loud.test\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 N:\home\app-loud.test\www\application\classes\Controller\Template.php(62): Kohana_Controller_Template->after()
#9 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#12 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#15 {main} in N:\home\app-loud.test\www\application\views\templates\default\right_block.php:11
2013-10-30 14:03:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\templates\default\right_block.php [ 10 ] in N:\home\app-loud.test\www\application\views\templates\default\right_block.php:10
2013-10-30 14:03:54 --- DEBUG: #0 N:\home\app-loud.test\www\application\views\templates\default\right_block.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'N:\home\app-lou...', 10, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#2 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#3 N:\home\app-loud.test\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 N:\home\app-loud.test\www\application\views\templates\default\main.php(32): Kohana_View->__toString()
#5 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#6 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#7 N:\home\app-loud.test\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 N:\home\app-loud.test\www\application\classes\Controller\Template.php(62): Kohana_Controller_Template->after()
#9 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#12 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#15 {main} in N:\home\app-loud.test\www\application\views\templates\default\right_block.php:10
2013-10-30 14:20:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'elseif' (T_ELSEIF) ~ APPPATH\classes\Controller\Review.php [ 28 ] in file:line
2013-10-30 14:20:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-30 14:43:11 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Controller\Review.php [ 166 ] in file:line
2013-10-30 14:43:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-30 14:56:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Review.php [ 50 ] in file:line
2013-10-30 14:56:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line