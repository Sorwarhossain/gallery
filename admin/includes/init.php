<?php 


//defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

//root url 
defined('SITE_URL') ? null : define('SITE_URL', "http://" . $_SERVER['SERVER_NAME'] .'/gallery');
defined('ADMIN_URL') ? null : define('ADMIN_URL', "http://" . $_SERVER['SERVER_NAME'] .'/gallery/admin');

defined('SITE_ROOT') ? null : define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']. '/gallery');




require_once('functions.php');
require_once('config.php');
require_once('database.php');
require_once('db_object.php');
require_once('user.php');
require_once('photo.php');
require_once('session.php');