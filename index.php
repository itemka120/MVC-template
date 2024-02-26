<?php
//Loading Classes
use app\Controllers\ViewController;

require_once 'vendor/autoload.php';

//Debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

//Getting Page
return (new ViewController())->handleRequest();