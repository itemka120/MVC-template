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
    public function contact()
    {
        // Read the content of the 'contact.php' view file
        $content = file_get_contents('public/views/contact.php');

        // Set the title for the page
        $title = 'Contact me';

        // Create a new View object with the title and content, then render it
        echo (new View($title, $content))->render();
    }
}