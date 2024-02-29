<?php

namespace core\Routing;

class Router
{
    // Property to store routes
    private array $routes = [];

    // Method to dispatch the request and match routes
    public function dispatch()
    {
        // Include the route definitions from the 'web.php' file
        $routes = include "routes/web.php";

        // Iterate through each route and add it to the routes array
        foreach ($routes as $route) {
            // Access route properties and store them in the routes array
            $this->routes[$route->getPath()] = ["action" => $route->getAction()];
        }

        // Call the getRoute method to find a matching route for the current request URL
        return $this->getRoute($this->routes);
    }

    // Method to get the matched route for the current request URL
    public function getRoute($routes)
    {
        // Get the request URI
        $url = $_SERVER['REQUEST_URI'];

        // Check if a route exists for the given URL, return null if not found
        return $routes[$url] ?? null;
    }
}