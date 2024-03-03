<?php

namespace app\Http;

use app\Controllers\ErrorController;
use app\Controllers\PageController;
use core\Routing\Router;

class HttpHandler
{
	/**
	 * Method to handle incoming requests.
	 *
	 * Returns a view of the corresponding action method or 404 error.
	 * @throws ErrorController
	 */
	public function handleRequest()
	{
		$router = new Router(); // Instantiate Router outside the loop
		$route = $router->dispatch(); // Dispatch the request to get matched route
		return $this->processRequest($route);
	}

	private function processRequest($route)
	{
		if ($route) { // If a route is found
			$controllerName = "app\Controllers\\" . ucfirst($route['controller']) . 'Controller';
			$actionName = $route['action']; // Extract the action name from the matched route
			if (class_exists($controllerName)) {
				$controller = new $controllerName();
				return $controller->$actionName(); // Call the corresponding action method
			} else {
				return (new ErrorController())->show404(); // If controller class does not exist, show 404 error
			}
		} else {
			return (new ErrorController())->show404(); // If no route is found, show 404 error
		}
	}
}