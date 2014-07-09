<?php

/**
 * Acts as an entry point into app
 */
//define('DS', DIRECTORY_SEPARATOR);
//define('ROOT', dirname(dirname(__FILE__)));

$url = isset($_GET['url']) ? $_GET['url'] : NULL;

// define path to config.php and router.php scripts
require_once (dirname(dirname(__FILE__)).'/config/config.php');
require_once (dirname(dirname(__FILE__)).'/library/router.php');
//phpinfo();