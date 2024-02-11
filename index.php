<?php
//Loading Classes
require_once 'vendor/autoload.php';

//Debugging
error_reporting(E_ALL);

//Getting Page
return (new \app\Controllers\ViewController([
    "/" => ["action" => "index"],
    "/contact" => ["action" => "contact"],
]))->handleRequest();