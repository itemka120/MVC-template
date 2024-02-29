<?php

namespace app\Controllers;

use app\Models\ViewModel;
use core\Twig\Twig;

class ErrorController
{
    /**
     * Method to return 404 errors.
     */
    public function show404()
    {
        // Extract data from ViewModel
        $titles = (new ViewModel())->extractTitles();

        // Prepare data for rendering
        $data = [
            "title" => $titles["404"],
        ];

        // Create a new View object with the title and content, then render it
        return (new Twig())->render('404.twig', $data);
    }
}