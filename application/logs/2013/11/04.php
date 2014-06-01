<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-04 11:40:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::parameter() ~ APPPATH\classes\Controller\Review.php [ 21 ] in file:line
2013-11-04 11:40:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-04 11:57:43 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Route::compile() must be of the type array, object given, called in N:\home\app-loud.test\www\system\classes\Kohana\Route.php on line 327 and defined ~ SYSPATH\classes\Kohana\Route.php [ 237 ] in N:\home\app-loud.test\www\system\classes\Kohana\Route.php:237
2013-11-04 11:57:43 --- DEBUG: #0 N:\home\app-loud.test\www\system\classes\Kohana\Route.php(237): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'N:\home\app-lou...', 237, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile('<platform>/<fil...', Object(Closure))
#2 N:\home\app-loud.test\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct('<platform>/<fil...', Object(Closure))
#3 N:\home\app-loud.test\www\application\bootstrap.php(195): Kohana_Route::set('filter', '<platform>/<fil...', Object(Closure))
#4 N:\home\app-loud.test\www\index.php(102): require('N:\home\app-lou...')
#5 {main} in N:\home\app-loud.test\www\system\classes\Kohana\Route.php:237
2013-11-04 11:58:12 --- CRITICAL: ErrorException [ 4096 ]: Object of class Closure could not be converted to string ~ SYSPATH\classes\Kohana\Route.php [ 241 ] in file:line
2013-11-04 11:58:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'N:\home\app-lou...', 241, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\Route.php(241): preg_replace('#[.\+*?[^\]${}=...', '\\$0', 'Object')
#2 N:\home\app-loud.test\www\system\classes\Kohana\Route.php(327): Kohana_Route::compile(Object(Closure), NULL)
#3 N:\home\app-loud.test\www\system\classes\Kohana\Route.php(90): Kohana_Route->__construct(Object(Closure), NULL)
#4 N:\home\app-loud.test\www\application\bootstrap.php(195): Kohana_Route::set('filter', Object(Closure))
#5 N:\home\app-loud.test\www\index.php(102): require('N:\home\app-lou...')
#6 {main} in file:line
2013-11-04 11:59:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\Kohana\Request.php [ 960 ] in N:\home\app-loud.test\www\system\classes\Kohana\Request.php:960
2013-11-04 11:59:45 --- DEBUG: #0 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(960): Kohana_Core::error_handler(8, 'Undefined index...', 'N:\home\app-lou...', 960, Array)
#1 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#2 {main} in N:\home\app-loud.test\www\system\classes\Kohana\Request.php:960
2013-11-04 12:37:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: activePlatform ~ APPPATH\views\templates\default\header.php [ 14 ] in N:\home\app-loud.test\www\application\views\templates\default\header.php:14
2013-11-04 12:37:52 --- DEBUG: #0 N:\home\app-loud.test\www\application\views\templates\default\header.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'N:\home\app-lou...', 14, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#2 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#3 N:\home\app-loud.test\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 N:\home\app-loud.test\www\application\views\templates\default\main.php(25): Kohana_View->__toString()
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
#15 {main} in N:\home\app-loud.test\www\application\views\templates\default\header.php:14
2013-11-04 12:37:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: activePlatform ~ APPPATH\views\templates\default\right_block.php [ 13 ] in N:\home\app-loud.test\www\application\views\templates\default\right_block.php:13
2013-11-04 12:37:53 --- DEBUG: #0 N:\home\app-loud.test\www\application\views\templates\default\right_block.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'N:\home\app-lou...', 13, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#2 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#3 N:\home\app-loud.test\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 N:\home\app-loud.test\www\application\views\templates\default\main.php(27): Kohana_View->__toString()
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
#15 {main} in N:\home\app-loud.test\www\application\views\templates\default\right_block.php:13