<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-13 05:33:55 --- CRITICAL: ErrorException [ 2 ]: dir(N:\home\app-loud.test\www\reviews\/img/,N:\home\app-loud.test\www\reviews\/img/):  ~ APPPATH\classes\Model\Review.php [ 131 ] in file:line
2014-04-13 05:33:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'dir(N:\home\app...', 'N:\home\app-lou...', 131, Array)
#1 N:\home\app-loud.test\www\application\classes\Model\Review.php(131): dir('N:\home\app-lou...')
#2 N:\home\app-loud.test\www\application\views\templates\default\review.php(35): Model_Review->images()
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
2014-04-13 05:34:31 --- CRITICAL: Kohana_Exception [ 0 ]: The free property does not exist in the Model_Review class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php:699
2014-04-13 05:34:31 --- DEBUG: #0 N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('free', '0')
#1 N:\home\app-loud.test\www\application\classes\Model\Base.php(8): Kohana_ORM->__set('free', '0')
#2 N:\home\app-loud.test\www\application\classes\Controller\Review.php(48): Model_Base->fill(Array)
#3 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_preview()
#4 [internal function]: Kohana_Controller->execute()
#5 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#6 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#9 {main} in N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php:699
2014-04-13 05:39:28 --- CRITICAL: ErrorException [ 2 ]: dir(N:\home\app-loud.test\www\reviews\/img/,N:\home\app-loud.test\www\reviews\/img/):  ~ APPPATH\classes\Model\Review.php [ 131 ] in file:line
2014-04-13 05:39:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'dir(N:\home\app...', 'N:\home\app-lou...', 131, Array)
#1 N:\home\app-loud.test\www\application\classes\Model\Review.php(131): dir('N:\home\app-lou...')
#2 N:\home\app-loud.test\www\application\views\templates\default\review.php(35): Model_Review->images()
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
2014-04-13 05:46:06 --- CRITICAL: Kohana_Exception [ 0 ]: The free property does not exist in the Model_Review class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php:699
2014-04-13 05:46:06 --- DEBUG: #0 N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('free', '0')
#1 N:\home\app-loud.test\www\application\classes\Model\Base.php(8): Kohana_ORM->__set('free', '0')
#2 N:\home\app-loud.test\www\application\classes\Controller\Review.php(48): Model_Base->fill(Array)
#3 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_preview()
#4 [internal function]: Kohana_Controller->execute()
#5 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#6 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#9 {main} in N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php:699
2014-04-13 07:01:40 --- CRITICAL: Kohana_Exception [ 0 ]: The Free property does not exist in the Model_Review class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php:699
2014-04-13 07:01:40 --- DEBUG: #0 N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('Free', 'Free')
#1 N:\home\app-loud.test\www\application\classes\Model\Base.php(8): Kohana_ORM->__set('Free', 'Free')
#2 N:\home\app-loud.test\www\application\classes\Controller\Review.php(48): Model_Base->fill(Array)
#3 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_preview()
#4 [internal function]: Kohana_Controller->execute()
#5 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#6 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#9 {main} in N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php:699
2014-04-13 09:52:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Form::reset() ~ APPPATH\views\templates\default\add_review.php [ 76 ] in file:line
2014-04-13 09:52:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line