<?php
// Define the namespace for the model class
namespace app\Models;

// Import the mysqli class
use mysqli;

// Define the Model class
class Model {
    // Properties to store database connection information
    private $host;
    private $user;
    private $password;
    private $db;

    // Constructor to initialize the database connection information
    public function __construct($data)
    {
        $this->host = $data["host"];
        $this->user = $data["user"];
        $this->password = $data["password"];
        $this->db = $data["db"];
    }

    // Method to establish a database connection
    public function dbConnect()
    {
        // Create a new MySQLi connection
        $conn = new mysqli($this->host, $this->user, $this->password, $this->db);

        // Check if the connection was successful
        if ($conn->connect_error) {
            // If there is an error, return the error message
            return $conn->connect_error;
        }

        // If the connection is successful, return the connection object
        return $conn;
    }
}