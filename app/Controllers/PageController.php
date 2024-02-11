<?php
namespace app\Controllers;

use app\View\View;

class PageController {
    public function index()
    {
        $content = file_get_contents('public/views/home.php');
        $title = 'Welcome!';

        echo (new View($title, $content))->render();
    }

    public function contact()
    {
        $content = file_get_contents('public/views/contact.php');
        $title = 'Contact me';

        echo (new View($title, $content))->render();
    }
}