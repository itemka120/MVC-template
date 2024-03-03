<?php

/**
 * Require Composer's autoloader to load dependencies
 */

use app\Http\HttpHandler;

require_once 'vendor/autoload.php';

/**
 * Debugging: Setting up error reporting to display all errors
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * Importing the helper functions
 *
 *
 * */

/**
 * All the requests are received and processed here
 */

return (new HttpHandler())->handleRequest();
