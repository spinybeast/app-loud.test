<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-19 12:06:53 --- CRITICAL: Kohana_Exception [ 0 ]: The submit property does not exist in the Model_Review class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php:699
2014-05-19 12:06:53 --- DEBUG: #0 N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('submit', 'Submit')
#1 N:\home\app-loud.test\www\application\classes\Model\Base.php(9): Kohana_ORM->__set('submit', 'Submit')
#2 N:\home\app-loud.test\www\application\classes\Controller\Review.php(48): Model_Base->fill(Array)
#3 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_preview()
#4 [internal function]: Kohana_Controller->execute()
#5 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#6 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#9 {main} in N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php:699
2014-05-19 12:07:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Form::reset() ~ APPPATH\views\templates\default\add_review.php [ 75 ] in file:line
2014-05-19 12:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-19 12:18:38 --- CRITICAL: Kohana_Exception [ 0 ]: The icon property does not exist in the Model_Review class ~ MODPATH\orm\classes\Kohana\ORM.php [ 757 ] in N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php:699
2014-05-19 12:18:38 --- DEBUG: #0 N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php(699): Kohana_ORM->set('icon', 'IMG_25201.jpg')
#1 N:\home\app-loud.test\www\application\classes\Model\Base.php(9): Kohana_ORM->__set('icon', 'IMG_25201.jpg')
#2 N:\home\app-loud.test\www\application\classes\Controller\Review.php(48): Model_Base->fill(Array)
#3 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_preview()
#4 [internal function]: Kohana_Controller->execute()
#5 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#6 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#9 {main} in N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php:699
2014-05-19 12:57:14 --- CRITICAL: ErrorException [ 2 ]: dir(N:\home\app-loud.test\www\reviews\/img/,N:\home\app-loud.test\www\reviews\/img/):  ~ APPPATH\classes\Model\Review.php [ 131 ] in file:line
2014-05-19 12:57:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'dir(N:\home\app...', 'N:\home\app-lou...', 131, Array)
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
2014-05-19 13:56:46 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: image/upload ~ SYSPATH\classes\Kohana\Route.php [ 106 ] in N:\home\app-loud.test\www\system\classes\Kohana\Route.php:212
2014-05-19 13:56:46 --- DEBUG: #0 N:\home\app-loud.test\www\system\classes\Kohana\Route.php(212): Kohana_Route::get('image/upload')
#1 N:\home\app-loud.test\www\application\views\templates\default\add_review.php(123): Kohana_Route::url('image/upload')
#2 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#3 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#4 N:\home\app-loud.test\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 N:\home\app-loud.test\www\application\views\templates\default\main.php(35): Kohana_View->__toString()
#6 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#7 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#8 N:\home\app-loud.test\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 N:\home\app-loud.test\www\application\classes\Controller\Template.php(67): Kohana_Controller_Template->after()
#10 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#13 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#16 {main} in N:\home\app-loud.test\www\system\classes\Kohana\Route.php:212
2014-05-19 13:57:57 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 62 ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in file:line
2014-05-19 13:57:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', 'N:\home\app-lou...', 420, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\Route.php(420): preg_match('#^images(?:/(?P...', 'review/add', NULL)
#2 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-05-19 13:58:38 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: image/upload ~ SYSPATH\classes\Kohana\Route.php [ 106 ] in N:\home\app-loud.test\www\system\classes\Kohana\Route.php:212
2014-05-19 13:58:38 --- DEBUG: #0 N:\home\app-loud.test\www\system\classes\Kohana\Route.php(212): Kohana_Route::get('image/upload')
#1 N:\home\app-loud.test\www\application\views\templates\default\add_review.php(123): Kohana_Route::url('image/upload')
#2 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#3 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#4 N:\home\app-loud.test\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 N:\home\app-loud.test\www\application\views\templates\default\main.php(35): Kohana_View->__toString()
#6 N:\home\app-loud.test\www\system\classes\Kohana\View.php(61): include('N:\home\app-lou...')
#7 N:\home\app-loud.test\www\system\classes\Kohana\View.php(348): Kohana_View::capture('N:\home\app-lou...', Array)
#8 N:\home\app-loud.test\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 N:\home\app-loud.test\www\application\classes\Controller\Template.php(67): Kohana_Controller_Template->after()
#10 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(87): Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#13 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#16 {main} in N:\home\app-loud.test\www\system\classes\Kohana\Route.php:212
2014-05-19 13:59:58 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(uploads/музыкальное оборудование (3).jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Images.php [ 83 ] in file:line
2014-05-19 13:59:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'N:\home\app-lou...', 83, Array)
#1 N:\home\app-loud.test\www\application\classes\Controller\Images.php(83): move_uploaded_file('N:\tmp\phpD909....', 'uploads/???????...')
#2 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Images->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Images))
#5 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-05-19 14:03:38 --- CRITICAL: ErrorException [ 2 ]: move_uploaded_file(reviews/new/ава2.jpg): failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Images.php [ 83 ] in file:line
2014-05-19 14:03:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'move_uploaded_f...', 'N:\home\app-lou...', 83, Array)
#1 N:\home\app-loud.test\www\application\classes\Controller\Images.php(83): move_uploaded_file('N:\tmp\php355F....', 'reviews/new/???...')
#2 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Images->action_upload()
#3 [internal function]: Kohana_Controller->execute()
#4 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Images))
#5 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-05-19 14:15:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index: myfile ~ APPPATH\classes\Controller\Images.php [ 77 ] in N:\home\app-loud.test\www\application\classes\Controller\Images.php:77
2014-05-19 14:15:52 --- DEBUG: #0 N:\home\app-loud.test\www\application\classes\Controller\Images.php(77): Kohana_Core::error_handler(8, 'Undefined index...', 'N:\home\app-lou...', 77, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Images->action_upload()
#2 [internal function]: Kohana_Controller->execute()
#3 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Images))
#4 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#7 {main} in N:\home\app-loud.test\www\application\classes\Controller\Images.php:77
2014-05-19 14:57:23 --- CRITICAL: ErrorException [ 2 ]: dir(N:\home\app-loud.test\www\reviews\/img/,N:\home\app-loud.test\www\reviews\/img/):  ~ APPPATH\classes\Model\Review.php [ 132 ] in file:line
2014-05-19 14:57:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'dir(N:\home\app...', 'N:\home\app-lou...', 132, Array)
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