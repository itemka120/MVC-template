<?php
// Define the namespace for the controller class
namespace app\Controllers;

// Import the View class from the core\View namespace
use core\Twig\Twig,
    Twig\Error\LoaderError;

// Define the PageController class
class PageController
{
    // Method to handle the index page
    /**
     * @throws LoaderError
     */
    public function home()
    {
        $data = [
            "title" => 'Welcome!',

        ];
        // Create a new View object with the title and content, then render it
        echo (new Twig())->render('home.twig', $data);
    }

    // Method to handle the contact page

    /**
     * @throws LoaderError
     */
    public function about()
    {
        $data = [
            "title" => 'About me',

        ];
        // Create a new View object with the title and content, then render it
        echo (new Twig())->render('about.twig', $data);
    }
}