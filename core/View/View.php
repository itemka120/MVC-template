<?php
namespace core\View;

use app\Controllers\PageController;
use app\Controllers\ErrorController;

class View
{

    public $routes;


    public function getPage() { //Calls Controllers
        //$url = $_GET['url'] ?? "/";
        $url = isset($_GET['url']) ? '/' . ltrim($_GET['url'], '/') : '/';
        $actionName = $this->setPage($url);
        if($this->setPage($url)) {
            return (new PageController())->$actionName();
        }else{
            return (new ErrorController)->show404();
        }

    }


    public function setPage($url) { //Works with Urls
        //$routes = (new Router())->getRoutes();TODO
        if ($url === "/") {
            return "index";
        } elseif ($url === "/about") {
            return "about";
        } else{
            return false;
        }
    }
}