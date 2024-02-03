<?php
require_once 'UserModel.php';
class UserController{
    public function setUser($userId, $name, $secondName) {
        return new User($userId, $name, $secondName);
    }
}