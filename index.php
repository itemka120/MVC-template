<?php
require_once 'UserController.php';
require_once 'UserView.php';

$users = [
    ['userId' => 1, 'name' => "Artem", 'secondName' => "Ivanov"],
    ['userId' => 2, 'name' => "Ruslan", 'secondName' => "Butenko"]
];

foreach ($users as $userData) {
    $userId = $userData['userId'];
    $name = $userData['name'];
    $secondName = $userData['secondName'];

    $controller = new UserController();
    $user = $controller->setUser($userId, $name, $secondName);

    $view = new UserView();
    $view->returnUser($user);
}
