<?php

namespace app\Controllers;

use app\Models\ViewModel,
    core\Twig\Twig,
    Twig\Error\LoaderError;

class PageController
{
    /**
     * Renders the home page.
     *
     * @throws LoaderError
     */
    public function home()
    {
        // Extract data from ViewModel
        $titles = (new ViewModel())->extractTitles();

        // Prepare data for rendering
        $data = [
            "title" => $titles["home"],
        ];

        // Create a new View object with the title and content, then render it
        echo (new Twig())->render('home.twig', $data);
    }

    /**
     * Renders the about page.
     *
     * @throws LoaderError
     */
    public function about()
    {
        // Extract data from ViewModel
        $titles = (new ViewModel())->extractTitles();

        // Prepare data for rendering
        $data = [
            "title" => $titles["about"],
        ];

        // Create a new View object with the title and content, then render it
        echo (new Twig())->render('about.twig', $data);
    }

}