<?php
use core\Routing\Route;

function setRoutes() {
    return $routes = [
        new Route('/', 'HomeController', 'index'),
        new Route('/about', 'PageController', 'about'),
    ];
}
