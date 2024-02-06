<?php
namespace app\Controllers;

class PageController {
    public function about() {
        include('public/views/about.php');
    }

    public function index() {
        include('public/views/home.php');
    }
}