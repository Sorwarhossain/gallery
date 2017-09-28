<?php 
require_once dirname(__FILE__) . '/functions.php';
require_once dirname(__FILE__) . '/config.php';
require_once dirname(__FILE__) . '/database.php';
require_once dirname(__FILE__) . '/db_object.php';
require_once dirname(__FILE__) . '/user.php';
require_once dirname(__FILE__) . '/photo.php';
require_once dirname(__FILE__) . '/comment.php';
require_once dirname(__FILE__) . '/session.php';
require_once dirname(__FILE__) . '/pagination.php';



/*include('functions.php');
include('config.php');
include('database.php');
include('db_object.php');
include('user.php');
include('photo.php');
include('comment.php');
include('session.php');*/



//defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

//root url 
defined('SITE_URL') ? null : define('SITE_URL', "http://" . $_SERVER['SERVER_NAME'] .'/gallery');
defined('ADMIN_URL') ? null : define('ADMIN_URL', "http://" . $_SERVER['SERVER_NAME'] .'/gallery/admin');

defined('SITE_ROOT') ? null : define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']. '/gallery');




