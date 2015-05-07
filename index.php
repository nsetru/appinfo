<?php

/**
 * Acts as an entry point into app
 */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

/*$url = isset($_GET['url']) ? $_GET['url'] : NULL; */

// define path to config.php and router.php scripts
require_once (ROOT . DS . 'config.php');

// Declare Models
// Declare Controllers

// Set view
