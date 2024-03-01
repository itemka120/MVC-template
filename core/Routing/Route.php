<?php

namespace core\Routing;

class Route
{
	// Properties to store route path and action
	private mixed $path;

	private string $action;

	// Constructor to initialize the route path and action
	public function __construct($path, $action)
	{
		$this->path = $path;
		$this->action = $action;
	}

	// Method to get the route path
	public function getPath(): string
	{
		return $this->path;
	}

	// Method to get the route action
	public function getAction(): string
	{
		return $this->action;
	}
}