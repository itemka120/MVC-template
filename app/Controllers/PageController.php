<?php
// Define the namespace for the controller class
namespace app\Controllers;

// Import the View class from the core\View namespace
use core\View\View;

// Define the PageController class
class PageController {
    // Method to handle the index page
    public function index()
    {
        // Read the content of the 'home.php' view file
        $content = file_get_contents('public/views/home.php');

        // Set the title for the page
        $title = 'Welcome!';

        // Create a new View object with the title and content, then render it
        echo (new View($title, $content))->render();
    }

    // Method to handle the contact page
    public function about()
    {
        // Read the content of the 'about.php' view file
        $content = file_get_contents('public/views/about.php');

        // Set the title for the page
        $title = 'About me';

        // Create a new View object with the title and content, then render it
        echo (new View($title, $content))->render();
    }
}