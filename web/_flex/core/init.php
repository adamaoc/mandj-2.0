<?php
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

session_start();

require_once $_SERVER['DOCUMENT_ROOT'].'/web/config.php';
// require_once "define_locals.php";
require_once "definitions.php";


// Create a global configuration
$GLOBALS['config'] = array(
	'mysql' => array(
		'host' 		=> $host,
		'username' 	=> $username,
		'password' 	=> $password,
		'db' 		=> $dbname
	),
	'session' => array(
		'session_name'	=> 'user',
		'token_name'	=> 'token'
	)
);



require_once $_SERVER['DOCUMENT_ROOT']."/web/_flex/functions/metas_and_titles.php";
require_once $_SERVER['DOCUMENT_ROOT']."/web/_flex/data/navlinks.php";