<?php

//Defining all possible Routes

return [
    // Define a route for each root path
    new core\Routing\Route('/', 'home'),
    new core\Routing\Route('/about', 'about'),
];