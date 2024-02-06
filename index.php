<?php
//Loading Classes
require_once 'vendor/autoload.php';

//Debugging
error_reporting(E_ALL);

//Getting Page
use core\View\View;
return (new View)->getPage();