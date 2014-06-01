<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-09 07:59:23 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in file:line
2014-01-09 07:59:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'N:\home\app-lou...', 420, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\Route.php(420): preg_match('', '', NULL)
#2 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-01-09 07:59:45 --- CRITICAL: ErrorException [ 2 ]: preg_match(): Empty regular expression ~ SYSPATH\classes\Kohana\Route.php [ 420 ] in file:line
2014-01-09 07:59:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): E...', 'N:\home\app-lou...', 420, Array)
#1 N:\home\app-loud.test\www\system\classes\Kohana\Route.php(420): preg_match('', '', NULL)
#2 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(470): Kohana_Route->matches(Object(Request))
#3 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(942): Kohana_Request::process(Object(Request), Array)
#4 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2014-01-09 12:33:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\templates\default\header.php [ 6 ] in file:line
2014-01-09 12:33:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line