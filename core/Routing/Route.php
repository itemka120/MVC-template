<?php

namespace core\Routing;

class Route
{
	// Properties to store route path, controller, and action
	private mixed $path;
	private string $controller;
	private string $action;

	// Constructor to initialize the route path, controller, and action
	public function __construct($path, $controller, $action)
	{
		$this->path = $path;
		$this->controller = $controller;
		$this->action = $action;
	}

	// Method to get the route path
	public function getPath(): string
	{
		return $this->path;
	}

	// Method to get the route controller
	public function getController(): string
	{
		return $this->controller;
	}

	// Method to get the route action
	public function getAction(): string
	{
		return $this->action;
	}
}