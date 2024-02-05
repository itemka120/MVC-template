<?php
namespace core\View;
use app\Controller\Errors;

require_once "core/Routing/Router.php";
require_once "app/Controllers/HomeController.php";
require_once "app/Controllers/PageController.php";
require_once "app/Controllers/ErrorController.php";

class View
{
    public function getPage() { //Calls Controllers
        $url = "/" . $_GET['url'] ?? "/";
        [$controllerName, $actionName] = $this->setPage($url);
        if($this->setPage($url)) {
            $controllerFile = "app/Controllers/$controllerName.php";
            if (file_exists($controllerFile)) {
                //$controller = new $controllerName;
                //return $controller->$actionName();
                return (new $controllerName())->$actionName();

            }
        }else{
            return (new Errors())->show404();
        }

    }

    public function setPage($url) { //Works with Urls
        //$routes = (new Router)->getRoutes();TODO
        if ($url == "/") {
            $controllerName = "HomeController";
            $actionName = "index";
            return [$controllerName, $actionName];
        }elseif ($url == "/about"){
            $controllerName = "PageController";
            $actionName = "about";
            return [$controllerName, $actionName];
        }else{
            return false;
        }
    }
}