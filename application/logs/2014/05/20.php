<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-20 12:04:13 --- CRITICAL: ErrorException [ 2 ]: dir(N:\home\app-loud.test\www\reviews\22/img/,N:\home\app-loud.test\www\reviews\22/img/):  ~ APPPATH\classes\Model\Review.php [ 132 ] in file:line
2014-05-20 12:04:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'dir(N:\home\app...', 'N:\home\app-lou...', 132, Array)
#1 N:\home\app-loud.test\www\application\classes\Model\Review.php(132): dir('N:\home\app-lou...')
#2 N:\home\app-loud.test\www\application\views\templates\default\review.php(36): Model_Review->images()
#3 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#4 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#5 N:\home\app-loud.test\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 N:\home\app-loud.test\www\application\views\templates\default\main.php(35): Kohana_View->__toString()
#7 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#8 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#9 N:\home\app-loud.test\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 N:\home\app-loud.test\www\application\classes\Controller\Template.php(67): Kohana_Controller_Template->after()
#11 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#14 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2014-05-20 12:05:27 --- CRITICAL: ErrorException [ 2 ]: dir(N:\home\app-loud.test\www\application\reviews\22/img/,N:\home\app-loud.test\www\application\reviews\22/img/):  ~ APPPATH\classes\Model\Review.php [ 132 ] in file:line
2014-05-20 12:05:27 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'dir(N:\home\app...', 'N:\home\app-lou...', 132, Array)
#1 N:\home\app-loud.test\www\application\classes\Model\Review.php(132): dir('N:\home\app-lou...')
#2 N:\home\app-loud.test\www\application\views\templates\default\review.php(36): Model_Review->images()
#3 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#4 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#5 N:\home\app-loud.test\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 N:\home\app-loud.test\www\application\views\templates\default\main.php(35): Kohana_View->__toString()
#7 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#8 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#9 N:\home\app-loud.test\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 N:\home\app-loud.test\www\application\classes\Controller\Template.php(67): Kohana_Controller_Template->after()
#11 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#14 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2014-05-20 12:06:56 --- CRITICAL: ErrorException [ 2 ]: dir(N:\home\app-loud.test\www\reviews\22/img/,N:\home\app-loud.test\www\reviews\22/img/):  ~ APPPATH\classes\Model\Review.php [ 133 ] in file:line
2014-05-20 12:06:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'dir(N:\home\app...', 'N:\home\app-lou...', 133, Array)
#1 N:\home\app-loud.test\www\application\classes\Model\Review.php(133): dir('N:\home\app-lou...')
#2 N:\home\app-loud.test\www\application\views\templates\default\review.php(36): Model_Review->images()
#3 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#4 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#5 N:\home\app-loud.test\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 N:\home\app-loud.test\www\application\views\templates\default\main.php(35): Kohana_View->__toString()
#7 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#8 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#9 N:\home\app-loud.test\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 N:\home\app-loud.test\www\application\classes\Controller\Template.php(67): Kohana_Controller_Template->after()
#11 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#14 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#17 {main} in file:line