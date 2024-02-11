<?php
namespace app\Controllers;

use app\Models\Model;

class ViewController {

    private $routes;

    public function __construct($routes){
        $this->routes = $routes;
    }
    public function handleRequest() {
        // Get the current URL
        $url = $_SERVER['REQUEST_URI'];

        $this->routes = $this->getRoute($url);

        // If a route is found, call the corresponding action
        if ($this->routes) {
            $actionName = $this->routes['action'];
            return (new PageController())->$actionName();
        } else {
            // If no route is found, show a 404 error
            return (new ErrorController())->show404();
        }
    }

    private function getRoute($url) {
        // Check if a route exists for the given URL, return null if not found
        return $this->routes[$url] ?? null;
    }
}