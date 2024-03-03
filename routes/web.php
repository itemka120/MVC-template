<?php

//Defining all possible Routes

return [
	// Define a route for each root path
	new core\Routing\Route('/', 'Page', 'home'),
	new core\Routing\Route('/about', 'Page', 'about'),
	new core\Routing\Route('/login', 'User', 'login'),
	new core\Routing\Route('/register', 'User', 'register'),
];