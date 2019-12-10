<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',

	/*  Enter database connection settings here:  */
	'dbdriver' => 'mysqli',     // database driver (mysqli, postgre)
	'hostname' => 'localhost',  // database host
	'username' => 'root',           // database username
	'password' => '',           // database password
	'database' => 'acm',           // database name
	'dbprefix' => 'shj_',       // table prefix
	/**********************************************/

	'pconnect' => TRUE,
	'db_debug' => FALSE,
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'autoinit' => TRUE,
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array()
);

/* End of file database.php */
/* Location: ./application/config/database.php */
