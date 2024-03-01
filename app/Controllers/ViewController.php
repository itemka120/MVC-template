<?php
namespace app\Controllers;

use core\Routing\Router;

class ViewController
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

		$routes = $router->dispatch(); // Dispatch the request to get matched routes

		if ($routes) { // If a route is found
			$actionName = $routes['action']; // Extract the action name from the matched route
			return (new PageController())->$actionName(); // Call the corresponding action method from the PageController
		} else {
			return (new ErrorController())->show404(); // If no route is found, instantiate the ErrorController and call its show404 method
		}
	}
}