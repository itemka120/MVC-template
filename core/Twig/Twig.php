<?php

namespace core\Twig;

use Twig\Environment;
use Twig\Error\Error;
use Twig\Loader\FilesystemLoader;

class Twig
{
    /**
     * Renders the template with provided data.
     *
     * @param string $template The name of the template file.
     * @param array $data The data to be passed to the template.
     * @return string The rendered template.
     * @throws Error If the template file cannot be loaded.
     */
    public function render(string $template, array $data): string
    {
        $loader = new FilesystemLoader('public/views'); // Create a new FilesystemLoader instance with the specified directory
        $twig = new Environment($loader); // Create a new Twig\Environment instance with the loader
        return $twig->render($template, $data); //Rendering data
    }
}