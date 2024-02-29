<?php
namespace app\Models;

use mysqli;

class Model
{
    private mixed $host; // Variable to store the host name
    private mixed $user; // Variable to store the username
    private mixed $password; // Variable to store the password
    private mixed $db; // Variable to store the database name

    /**
     * Constructor to initialize object with database connection details.
     *
     * @param array $data Array containing database connection details.
     */
    public function __construct(array $data)
    {
        $this->host = $data["host"]; // Assigning host value from input data
        $this->user = $data["user"]; // Assigning user value from input data
        $this->password = $data["password"]; // Assigning password value from input data
        $this->db = $data["db"]; // Assigning db value from input data
    }

    /**
     * Method to establish a database connection.
     *
     * @return mysqli|false Returns MySQLi object on successful connection, false otherwise.
     */
    public function dbConnect(): bool|mysqli
    {
        $mysqli = new mysqli($this->host, $this->user, $this->password, $this->db); // Creating a new MySQLi object with connection details

        // Checking for connection errors
        if ($mysqli->connect_errno) {
            die("Connection failed: " . $mysqli->connect_error); // Terminating script execution and displaying error message on connection failure
        } else {
            return $mysqli; // Returning MySQLi object on successful connection
        }
    }
}