<?php
// Define the namespace for the controller class
namespace app\Controllers;

// Define the ErrorController class
class ErrorController
{
    // Method to handle 404 errors
    public function show404(): bool
    {
        // Set the HTTP response code to 404 (Not Found)
        return http_response_code(404);
    }
}