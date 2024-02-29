<?php

namespace app\Models;

use mysqli;

class ViewModel
{
    /**
     * Method to extract data from the database.
     *
     * @return array|string Returns an array containing page titles if successful, or an error message.
     */
    public function extractTitles(): array|string
    {
        // Instantiate Model and establish database connection
        $config = new Model([
            "host" => "localhost",
            "user" => "root",
            "password" => "",
            "db" => "portfolio"
        ]);

        // Establishing database connection
        $conn = $config->dbConnect();

        // Check if the connection was successful
        if ($conn instanceof mysqli) {
            // Execute query to fetch data
            $data = $conn->query("SELECT * FROM pages");

            if ($data) {
                // Check if there are rows returned
                if ($data->num_rows > 0) {
                    // Array to store pages' titles
                    $titles = [];

                    // Loop through each row
                    while ($row = $data->fetch_assoc()) {
                        // Process each row
                        $titles = ["home" => $row["home"], "about" => $row["about"], "404" => $row["404"]];
                    }

                    // Close the database connection
                    $conn->close();

                    // Returning page titles
                    return $titles;
                } else {
                    // No records found
                    return $conn->error;
                }
            } else {
                // Query execution failed
                return $conn->error;
            }
        } else {
            // Connection failed, handle the error
            echo "Failed to connect to MySQL: " . $conn->connect_error;
            exit();
        }
    }
}