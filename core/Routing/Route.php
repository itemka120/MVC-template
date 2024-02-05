<?php
namespace core\Routing;

class Route {
    private $url;
    private $controller;
    private $action;

    public function __construct($url, $controller, $action) {
        $this->url = $url;
        $this->controller = $controller;
        $this->action = $action;
    }
}