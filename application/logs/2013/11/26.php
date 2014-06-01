<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-26 08:25:25 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function reset() on a non-object ~ APPPATH/classes/Controller/Review.php [ 22 ] in file:line
2013-11-26 08:25:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-26 08:39:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::reset() ~ APPPATH/classes/Controller/Review.php [ 18 ] in file:line
2013-11-26 08:39:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-26 08:39:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH/classes/Controller/Review.php [ 18 ] in file:line
2013-11-26 08:39:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-26 08:39:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: page_nav ~ APPPATH/classes/Controller/Review.php [ 37 ] in /home/spiny/app-loud.test/www/application/classes/Controller/Review.php:37
2013-11-26 08:39:49 --- DEBUG: #0 /home/spiny/app-loud.test/www/application/classes/Controller/Review.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/spiny/app...', 37, Array)
#1 /home/spiny/app-loud.test/www/system/classes/Kohana/Controller.php(84): Controller_Review->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#4 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/spiny/app-loud.test/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/spiny/app-loud.test/www/index.php(118): Kohana_Request->execute()
#7 {main} in /home/spiny/app-loud.test/www/application/classes/Controller/Review.php:37
2013-11-26 08:41:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: reviewsTotal ~ APPPATH/classes/Controller/Review.php [ 22 ] in /home/spiny/app-loud.test/www/application/classes/Controller/Review.php:22
2013-11-26 08:41:48 --- DEBUG: #0 /home/spiny/app-loud.test/www/application/classes/Controller/Review.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/spiny/app...', 22, Array)
#1 /home/spiny/app-loud.test/www/system/classes/Kohana/Controller.php(84): Controller_Review->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#4 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/spiny/app-loud.test/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/spiny/app-loud.test/www/index.php(118): Kohana_Request->execute()
#7 {main} in /home/spiny/app-loud.test/www/application/classes/Controller/Review.php:22
2013-11-26 08:41:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: reviewsTotal ~ APPPATH/classes/Controller/Review.php [ 22 ] in /home/spiny/app-loud.test/www/application/classes/Controller/Review.php:22
2013-11-26 08:41:51 --- DEBUG: #0 /home/spiny/app-loud.test/www/application/classes/Controller/Review.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/spiny/app...', 22, Array)
#1 /home/spiny/app-loud.test/www/system/classes/Kohana/Controller.php(84): Controller_Review->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#4 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/spiny/app-loud.test/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/spiny/app-loud.test/www/index.php(118): Kohana_Request->execute()
#7 {main} in /home/spiny/app-loud.test/www/application/classes/Controller/Review.php:22
2013-11-26 08:42:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::limit() ~ APPPATH/classes/Controller/Review.php [ 23 ] in file:line
2013-11-26 08:42:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-26 08:42:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::limit() ~ APPPATH/classes/Controller/Review.php [ 23 ] in file:line
2013-11-26 08:42:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-26 08:42:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: page_nav ~ APPPATH/classes/Controller/Review.php [ 38 ] in /home/spiny/app-loud.test/www/application/classes/Controller/Review.php:38
2013-11-26 08:42:53 --- DEBUG: #0 /home/spiny/app-loud.test/www/application/classes/Controller/Review.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/spiny/app...', 38, Array)
#1 /home/spiny/app-loud.test/www/system/classes/Kohana/Controller.php(84): Controller_Review->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#4 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/spiny/app-loud.test/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/spiny/app-loud.test/www/index.php(118): Kohana_Request->execute()
#7 {main} in /home/spiny/app-loud.test/www/application/classes/Controller/Review.php:38
2013-11-26 08:55:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: rewiews ~ APPPATH/views/templates/default/reviews_index.php [ 3 ] in /home/spiny/app-loud.test/www/application/views/templates/default/reviews_index.php:3
2013-11-26 08:55:29 --- DEBUG: #0 /home/spiny/app-loud.test/www/application/views/templates/default/reviews_index.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/spiny/app...', 3, Array)
#1 /home/spiny/app-loud.test/www/system/classes/Kohana/View.php(61): include('/home/spiny/app...')
#2 /home/spiny/app-loud.test/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/spiny/app...', Array)
#3 /home/spiny/app-loud.test/www/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/spiny/app-loud.test/www/application/views/templates/default/main.php(28): Kohana_View->__toString()
#5 /home/spiny/app-loud.test/www/system/classes/Kohana/View.php(61): include('/home/spiny/app...')
#6 /home/spiny/app-loud.test/www/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/spiny/app...', Array)
#7 /home/spiny/app-loud.test/www/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/spiny/app-loud.test/www/application/classes/Controller/Template.php(62): Kohana_Controller_Template->after()
#9 /home/spiny/app-loud.test/www/system/classes/Kohana/Controller.php(87): Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#12 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/spiny/app-loud.test/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/spiny/app-loud.test/www/index.php(118): Kohana_Request->execute()
#15 {main} in /home/spiny/app-loud.test/www/application/views/templates/default/reviews_index.php:3