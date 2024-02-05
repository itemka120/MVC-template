<?php
namespace core\Routing;
use core\Routing\Route;

require_once "core/Routing/Route.php";
require_once "core/web.php";

class Router {
    private $routes = [];

    // Add a method to register routes
    public function getRoutes() {
        return $this->routes = setRoutes();
    }

}
