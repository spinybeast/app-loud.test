<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-20 08:15:00 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function and_where() on a non-object ~ APPPATH/classes/Controller/Review.php [ 24 ] in file:line
2013-11-20 08:15:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-20 08:59:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Model/Review.php [ 38 ] in file:line
2013-11-20 08:59:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-20 09:18:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::reset() ~ APPPATH/classes/Controller/Review.php [ 28 ] in file:line
2013-11-20 09:18:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-20 09:20:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH/classes/Controller/Review.php [ 35 ] in file:line
2013-11-20 09:20:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-20 09:22:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: page_nav ~ APPPATH/classes/Controller/Review.php [ 49 ] in /home/spiny/app-loud.test/www/application/classes/Controller/Review.php:49
2013-11-20 09:22:44 --- DEBUG: #0 /home/spiny/app-loud.test/www/application/classes/Controller/Review.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/spiny/app...', 49, Array)
#1 /home/spiny/app-loud.test/www/system/classes/Kohana/Controller.php(84): Controller_Review->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#4 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/spiny/app-loud.test/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/spiny/app-loud.test/www/index.php(118): Kohana_Request->execute()
#7 {main} in /home/spiny/app-loud.test/www/application/classes/Controller/Review.php:49