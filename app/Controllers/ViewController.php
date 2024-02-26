<?php
namespace app\Controllers;

use core\Routing\Router;

class ViewController {

    // Property to store routes(could be replaced by a simple variable)
    private $routes;

    // Method to handle incoming requests
    public function handleRequest()
    {

        // Create a new Router instance
        $router = new Router();

        // Dispatch the request to get matched routes
        $this->routes = $router->dispatch();

        // If a route is found
        if ($this->routes) {
            // Extract the action name from the matched route
            $actionName = $this->routes['action'];
            // Call the corresponding action method from the PageController
            return (new PageController())->$actionName();
        } else {
            // If no route is found, instantiate the ErrorController and call its show404 method
            return (new ErrorController())->show404();
        }
    }
}