<?php defined('SYSPATH') or die('No direct access allowed.');

$db_name = 'apploud';

$mysql = array(
		'type'       => 'mysql',
		'connection' => array(
			'hostname'   => 'localhost',
			'database'   => $db_name,
			'username'   => 'root',
			'password'   => FALSE,
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => CACHING,
		'profiling'    => PROFILING,
	);
 
 $mysql_admin = array(
		'type'       => 'mysql',
		'connection' => array(
			'hostname'   => 'localhost',
			'database'   => $db_name,
			'username'   => 'root',
			'password'   => FALSE,
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => CACHING,
		'profiling'    => PROFILING,
	); 

 return array
(
	'default' => $mysql,
	'admin' => $mysql_admin,
);
 