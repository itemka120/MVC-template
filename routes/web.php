<?php

// Import the Route class
use core\Routing\Route;

// Define an array of routes
return [
    // Define a route for each root path
    new Route('/', 'index'),
    new Route('/contact',  'contact'),
];