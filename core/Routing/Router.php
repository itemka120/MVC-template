<?php
namespace core\Routing;

class Router {
    public $routes = [];

    // Add a method to register routes
    public function getRoutes() {
        return $this->routes = setRoutes();
    }
}
