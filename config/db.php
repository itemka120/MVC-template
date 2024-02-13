<?php

//It creates a new instance of the Model class with an associative array containing the database connection information

return (new \app\Models\Model([
    "host" => "localhost",
    "user" => "root",
    "password" => "",
    "db" => "portfolio"
]));
