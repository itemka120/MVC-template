<?php
namespace app\Models;

use mysqli;

class Model {
    private $host;
    private $user;
    private $password;
    private $db;

    public function __construct($data) {
        $this->host = $data["host"];
        $this->user = $data["user"];
        $this->password = $data["password"];
        $this->db = $data["db"];
    }

    public function dbConnect()
    {
        // Create connection
        $conn = new mysqli($this->host, $this->user, $this->password, $this->db);

        // Check connection
        if ($conn->connect_error) {
            return $conn->connect_error;
        }

        return $conn; // Return the connection object

    }
}