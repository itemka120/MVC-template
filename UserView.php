<?php
class UserView{
    public function returnUser($user) {
        echo "User: " . $user->getUser() . "<br>";
    }
}