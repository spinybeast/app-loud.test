<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-16 23:18:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: activePlatform ~ APPPATH/views/templates/default/header.php [ 14 ] in /home/spiny/app-loud.test/www/application/views/templates/default/header.php:14
2013-11-16 23:18:22 --- DEBUG: #0 /home/spiny/app-loud.test/www/application/views/templates/default/header.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/spiny/app...', 14, Array)
#1 /home/spiny/app-loud.test/www/system/classes/Kohana/View.php(61): include('/home/spiny/app...')
#2 /home/spiny/app-loud.test/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/spiny/app...', Array)
#3 /home/spiny/app-loud.test/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/spiny/app-loud.test/www/application/views/templates/default/main.php(25): Kohana_View->__toString()
#5 /home/spiny/app-loud.test/www/system/classes/Kohana/View.php(61): include('/home/spiny/app...')
#6 /home/spiny/app-loud.test/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/spiny/app...', Array)
#7 /home/spiny/app-loud.test/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/spiny/app-loud.test/www/application/classes/Controller/Template.php(64): Kohana_Controller_Template->after()
#9 /home/spiny/app-loud.test/www/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#12 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/spiny/app-loud.test/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/spiny/app-loud.test/www/index.php(118): Kohana_Request->execute()
#15 {main} in /home/spiny/app-loud.test/www/application/views/templates/default/header.php:14
2013-11-16 23:18:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: activePlatform ~ APPPATH/views/templates/default/right_block.php [ 13 ] in /home/spiny/app-loud.test/www/application/views/templates/default/right_block.php:13
2013-11-16 23:18:22 --- DEBUG: #0 /home/spiny/app-loud.test/www/application/views/templates/default/right_block.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/spiny/app...', 13, Array)
#1 /home/spiny/app-loud.test/www/system/classes/Kohana/View.php(61): include('/home/spiny/app...')
#2 /home/spiny/app-loud.test/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/spiny/app...', Array)
#3 /home/spiny/app-loud.test/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/spiny/app-loud.test/www/application/views/templates/default/main.php(27): Kohana_View->__toString()
#5 /home/spiny/app-loud.test/www/system/classes/Kohana/View.php(61): include('/home/spiny/app...')
#6 /home/spiny/app-loud.test/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/spiny/app...', Array)
#7 /home/spiny/app-loud.test/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/spiny/app-loud.test/www/application/classes/Controller/Template.php(64): Kohana_Controller_Template->after()
#9 /home/spiny/app-loud.test/www/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#12 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/spiny/app-loud.test/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/spiny/app-loud.test/www/index.php(118): Kohana_Request->execute()
#15 {main} in /home/spiny/app-loud.test/www/application/views/templates/default/right_block.php:13