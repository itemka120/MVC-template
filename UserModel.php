<?php
class User
{
    private $id;
    private $name;
    private $secondName;

    public function __construct($id, $name, $secondName)
    {
        $this->id = $id;
        $this->name = $name;
        $this->secondName = $secondName;
    }

    public function getUser() {
        return $this->id . " " . $this->name . " " . $this->secondName;
    }
}