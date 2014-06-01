<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-01 05:38:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting identifier (T_STRING) ~ APPPATH\classes\Helper.php [ 37 ] in file:line
2013-11-01 05:38:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-01 06:44:22 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'LOWER(name)' in 'where clause' [ SELECT `category`.`id` AS `id`, `category`.`_last_time` AS `_last_time`, `category`.`_last_user` AS `_last_user`, `category`.`name` AS `name`, `category`.`description` AS `description`, `category`.`parent_id` AS `parent_id`, `category`.`platform` AS `platform`, `category`.`rev_num` AS `rev_num` FROM `categories` AS `category` WHERE `LOWER(name)` LIKE 'books' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in N:\home\app-loud.test\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-01 06:44:22 --- DEBUG: #0 N:\home\app-loud.test\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `categor...', false, Array)
#1 N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 N:\home\app-loud.test\www\application\classes\Filter\Category.php(18): Kohana_ORM->find()
#4 N:\home\app-loud.test\www\application\classes\Filter\Category.php(9): Filter_Category::getCategoryByRequest()
#5 N:\home\app-loud.test\www\application\classes\Controller\Review.php(13): Filter_Category::getActive()
#6 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#9 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#12 {main} in N:\home\app-loud.test\www\modules\database\classes\Kohana\Database\Query.php:251
2013-11-01 06:46:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Category::to_array() ~ APPPATH\classes\Filter\Category.php [ 18 ] in file:line
2013-11-01 06:46:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-01 07:13:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\templates\default\right_block.php [ 13 ] in file:line
2013-11-01 07:13:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-01 07:35:33 --- CRITICAL: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::and_where(), called in N:\home\app-loud.test\www\application\classes\Filter\Category.php on line 38 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1865 ] in N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php:1865
2013-11-01 07:35:33 --- DEBUG: #0 N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php(1865): Kohana_Core::error_handler(2, 'Missing argumen...', 'N:\home\app-lou...', 1865, Array)
#1 N:\home\app-loud.test\www\application\classes\Filter\Category.php(38): Kohana_ORM->and_where('platform', 8)
#2 N:\home\app-loud.test\www\application\classes\Filter\Category.php(19): Filter_Category::getId('combat')
#3 N:\home\app-loud.test\www\application\classes\Filter\Category.php(9): Filter_Category::getCategoryByRequest()
#4 N:\home\app-loud.test\www\application\classes\Controller\Review.php(13): Filter_Category::getActive()
#5 N:\home\app-loud.test\www\system\classes\Kohana\Controller.php(84): Controller_Review->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Review))
#8 N:\home\app-loud.test\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 N:\home\app-loud.test\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 N:\home\app-loud.test\www\index.php(118): Kohana_Request->execute()
#11 {main} in N:\home\app-loud.test\www\modules\orm\classes\Kohana\ORM.php:1865
2013-11-01 08:06:26 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Category::is_loaded() ~ APPPATH\classes\Filter\Category.php [ 41 ] in file:line
2013-11-01 08:06:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-01 08:16:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Filter\Category.php [ 35 ] in file:line
2013-11-01 08:16:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-01 13:44:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Filter\Category.php [ 35 ] in file:line
2013-11-01 13:44:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line