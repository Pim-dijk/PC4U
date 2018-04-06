<?php
//define the core paths
//define them as absolute paths to make sure that require_once works as expected
//DIRECTORY_SEPARATOR is a PHP pre-defined constant
// (\ for windows / for unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define('SITE_ROOT', DS . 'xampp' . DS . 'htdocs' . DS . 'PC4U' . DS . 'HTML');
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'Includes');
define('ROOT_PATH', $_SERVER["DOCUMENT_ROOT"] . "/PC4U/HTML/");
//load confid file first
require_once(LIB_PATH.DS. "config.php" );
//load core object
//require_once(LIB_PATH.DS. "session.php" );
require_once(LIB_PATH.DS. "database.php" );
require_once(LIB_PATH.DS. "database_object.php" );
//load database-related classe
require_once(LIB_PATH.DS. "customer.php" );
require_once(LIB_PATH.DS. "product.php");
require_once(LIB_PATH.DS. "category.php");
require_once(LIB_PATH.DS. "image.php");
require_once(LIB_PATH.DS. "discount.php");
?>