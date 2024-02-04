<?php
require_once "app/Models/UserModel.php";

class Router
{
    public function getPage()
    {
        $url = $_GET['url'] ?? "/";
        [$controllerName, $actionName] = $this->setPage($url);

        $controllerFile = "app/Controllers/$controllerName.php";
        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controller = new $controllerName;
            if (method_exists($controller, $actionName)) {
                $controller->$actionName();
            }
        }
    }

    private function setPage($url)
    {
    if ($this->isValidAction($url))
        if ($url == '/') {
            $controllerName = "HomeController";
            $actionName = "index";
        } else {
            $urlSegments = explode('/', trim($url, '/'));
            $controllerName = "PageController";
            $actionName = $urlSegments[0];
        }
        return [$controllerName, $actionName];
    }

    private function isValidAction($actionName)
    {
        $db = new Model();
        $validUrls = $db->getAllActions();
        if (in_array($actionName, $validUrls)) {
            return true;
        }else {
            return $this->show404();
        }
    }

    private function show404(): bool
    {
        http_response_code(404);
        exit();
    }
}
