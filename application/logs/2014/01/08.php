<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-08 02:18:41 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$folder ~ APPPATH\classes\Controller\Ajax.php [ 119 ] in N:\home\app-loud.test\www\application\classes\Controller\Ajax.php:119
2014-01-08 02:18:41 --- DEBUG: #0 N:\home\app-loud.test\www\application\classes\Controller\Ajax.php(119): Kohana_Core::error_handler(8, 'Undefined prope...', 'N:\home\app-lou...', 119, Array)
#1 N:\home\app-loud.test\www\application\classes\Controller\Ajax.php(101): Controller_Ajax->sendEmail(Array)
#2 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_contact()
#3 [internal function]: Kohana_Controller->execute()
#4 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#8 {main} in N:\home\app-loud.test\www\application\classes\Controller\Ajax.php:119
2014-01-08 02:19:20 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Ajax::$folder ~ APPPATH\classes\Controller\Ajax.php [ 119 ] in N:\home\app-loud.test\www\application\classes\Controller\Ajax.php:119
2014-01-08 02:19:20 --- DEBUG: #0 N:\home\app-loud.test\www\application\classes\Controller\Ajax.php(119): Kohana_Core::error_handler(8, 'Undefined prope...', 'N:\home\app-lou...', 119, Array)
#1 N:\home\app-loud.test\www\application\classes\Controller\Ajax.php(101): Controller_Ajax->sendEmail(Array)
#2 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_contact()
#3 [internal function]: Kohana_Controller->execute()
#4 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#8 {main} in N:\home\app-loud.test\www\application\classes\Controller\Ajax.php:119
2014-01-08 05:02:17 --- CRITICAL: ErrorException [ 2 ]: fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ] in file:line
2014-01-08 05:02:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen(): SS...', 'N:\home\app-lou...', 243, Array)
#1 N:\home\app-loud.test\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 587, 0, '', 5)
#2 N:\home\app-loud.test\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 N:\home\app-loud.test\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 N:\home\app-loud.test\www\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 N:\home\app-loud.test\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 N:\home\app-loud.test\www\application\classes\Controller\Ajax.php(128): Email::send('spiny_beast@mai...', 'dlkfsdkf@lkgdlf...', 'Advertising', '<p>??    <b>Ema...', true)
#7 N:\home\app-loud.test\www\application\classes\Controller\Ajax.php(108): Controller_Ajax->sendEmail(Array)
#8 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_contact()
#9 [internal function]: Kohana_Controller->execute()
#10 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#11 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2014-01-08 05:02:46 --- CRITICAL: ErrorException [ 2 ]: fsockopen(): SSL operation failed with code 1. OpenSSL Error messages:
error:140770FC:SSL routines:SSL23_GET_SERVER_HELLO:unknown protocol ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ] in file:line
2014-01-08 05:02:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen(): SS...', 'N:\home\app-lou...', 243, Array)
#1 N:\home\app-loud.test\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 587, 0, '', 5)
#2 N:\home\app-loud.test\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 N:\home\app-loud.test\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 N:\home\app-loud.test\www\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 N:\home\app-loud.test\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 N:\home\app-loud.test\www\application\classes\Controller\Ajax.php(128): Email::send('spiny_beast@mai...', 'hfghfhf@hgfhf.g...', 'Review', '<p>??    <b>Ema...', true)
#7 N:\home\app-loud.test\www\application\classes\Controller\Ajax.php(108): Controller_Ajax->sendEmail(Array)
#8 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_contact()
#9 [internal function]: Kohana_Controller->execute()
#10 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#11 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#14 {main} in file:line