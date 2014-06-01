<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-26 12:39:52 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Swift_Mailer::send() must be an instance of Swift_Mime_Message, array given, called in Z:\home\app-loud.test\www\application\classes\Controller\Review.php on line 14 and defined ~ MODPATH\email\vendor\swift\classes\Swift\Mailer.php [ 78 ] in Z:\home\app-loud.test\www\modules\email\vendor\swift\classes\Swift\Mailer.php:78
2013-06-26 12:39:52 --- DEBUG: #0 Z:\home\app-loud.test\www\modules\email\vendor\swift\classes\Swift\Mailer.php(78): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\app-lou...', 78, Array)
#1 Z:\home\app-loud.test\www\application\classes\Controller\Review.php(14): Swift_Mailer->send(Array, Array, 'Test sbj', 'Test msg', false)
#2 Z:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#5 Z:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\app-loud.test\www\modules\email\vendor\swift\classes\Swift\Mailer.php:78
2013-06-26 12:40:14 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Swift_Mailer::send() must be an instance of Swift_Mime_Message, array given, called in Z:\home\app-loud.test\www\application\classes\Controller\Review.php on line 15 and defined ~ MODPATH\email\vendor\swift\classes\Swift\Mailer.php [ 78 ] in Z:\home\app-loud.test\www\modules\email\vendor\swift\classes\Swift\Mailer.php:78
2013-06-26 12:40:14 --- DEBUG: #0 Z:\home\app-loud.test\www\modules\email\vendor\swift\classes\Swift\Mailer.php(78): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\app-lou...', 78, Array)
#1 Z:\home\app-loud.test\www\application\classes\Controller\Review.php(15): Swift_Mailer->send(Array, Array, 'Test sbj', 'Test msg', false)
#2 Z:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#5 Z:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\app-loud.test\www\modules\email\vendor\swift\classes\Swift\Mailer.php:78