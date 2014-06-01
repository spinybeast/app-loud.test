<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-25 06:31:24 --- CRITICAL: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Review class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php:600
2014-01-25 06:31:24 --- DEBUG: #0 N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('title')
#1 N:\home\app-loud.test\www\application\classes\Model\Review.php(152): Kohana_ORM->__get('title')
#2 N:\home\app-loud.test\www\application\views\templates\default\review_list.php(34): Model_Review->cutDescription()
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
#17 {main} in N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php:600