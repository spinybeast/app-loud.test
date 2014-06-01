<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-27 08:40:31 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_ORM::where() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Review.php [ 88 ] in /home/spiny/app-loud.test/www/application/classes/Controller/Review.php:88
2013-11-27 08:40:31 --- DEBUG: #0 /home/spiny/app-loud.test/www/application/classes/Controller/Review.php(88): Kohana_Core::error_handler(2048, 'Non-static meth...', '/home/spiny/app...', 88, Array)
#1 /home/spiny/app-loud.test/www/application/classes/Controller/Review.php(33): Controller_Review->category_cloud()
#2 /home/spiny/app-loud.test/www/system/classes/Kohana/Controller.php(84): Controller_Review->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#5 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/spiny/app-loud.test/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/spiny/app-loud.test/www/index.php(118): Kohana_Request->execute()
#8 {main} in /home/spiny/app-loud.test/www/application/classes/Controller/Review.php:88
2013-11-27 08:45:47 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function reset() on a non-object ~ APPPATH/classes/Model/Review.php [ 121 ] in file:line
2013-11-27 08:45:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-27 08:46:07 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH/classes/Controller/Review.php [ 28 ] in file:line
2013-11-27 08:46:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-27 08:48:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: page_nav ~ APPPATH/classes/Controller/Review.php [ 29 ] in /home/spiny/app-loud.test/www/application/classes/Controller/Review.php:29
2013-11-27 08:48:19 --- DEBUG: #0 /home/spiny/app-loud.test/www/application/classes/Controller/Review.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/spiny/app...', 29, Array)
#1 /home/spiny/app-loud.test/www/system/classes/Kohana/Controller.php(84): Controller_Review->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#4 /home/spiny/app-loud.test/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/spiny/app-loud.test/www/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/spiny/app-loud.test/www/index.php(118): Kohana_Request->execute()
#7 {main} in /home/spiny/app-loud.test/www/application/classes/Controller/Review.php:29