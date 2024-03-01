<?php

/**
 * Require Composer's autoloader to load dependencies
 */

require_once 'vendor/autoload.php';

/**
 * Debugging: Setting up error reporting to display all errors
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * All the requests are received and processed here
 */

use app\Controllers\ViewController;
return (new ViewController())->handleRequest();