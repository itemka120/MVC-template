<?php
namespace app\Models;

use mysqli;

class Model
{
    /**
     * Method to establish a database connection.
     *
     * @return mysqli|false Returns MySQLi object on successful connection, false otherwise.
     */
    public function dbConnect(): bool|mysqli
    {
		$mysqli = new mysqli("localhost", "root", "", "portfolio"); // Creating a new MySQLi object with connection details

		// Checking for connection errors
		if ($mysqli->connect_errno) {
			die("Connection failed: " . $mysqli->connect_error); // Terminating script execution and displaying error message on connection failure
		} else {
			return $mysqli; // Returning MySQLi object on successful connection
		}
	}
}