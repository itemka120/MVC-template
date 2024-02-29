<?php

namespace core\Routing;

class Route
{
    // Properties to store route path and action
    private $path;
    private $action;

    // Constructor to initialize the route path and action
    public function __construct($path, $action)
    {
        $this->path = $path;
        $this->action = $action;
    }

    // Method to get the route path
    public function getPath()
    {
        return $this->path;
    }

    // Method to get the route action
    public function getAction()
    {
        return $this->action;
    }
}