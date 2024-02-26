<?php
namespace core\Twig;

use Twig\Environment,
    Twig\Error\LoaderError,
    Twig\Loader\FilesystemLoader;

class Twig
{
    /**
     * @throws LoaderError
     */
    public function render($template, $data)
    {
        $loader = new FilesystemLoader('public/layouts');
        $twig = new Environment($loader);

        return $twig->render($template, $data);
    }
}