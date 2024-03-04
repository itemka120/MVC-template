<?php

namespace app\Models;

class UserModel extends Model
{
	public function UserRegister($name, $email, $password): bool
	{
		// Check for empty fields
		if (empty($name) || empty($email) || empty($password)) {
			return false;
		}

		// Hash the password
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

		// Establish database connection
		$conn = $this->dbConnect();

		// Check if email already exists
		$stmt = $conn->prepare("SELECT COUNT(*) FROM user_form WHERE email = ?");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($count);
		$stmt->fetch();
		$stmt->close();

		if ($count > 0) {
			return false; // User already exists
		}

		// Register new user
		$stmt = $conn->prepare("INSERT INTO user_form (`name`, `email`, `password`) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $hashedPassword);
		$stmt->execute();
		$stmt->close();

		return true;
	}

	public function UserLogin($email, $password): bool
	{
		// Check for empty fields
		if (empty($email) || empty($password)) {
			return false;
		}

		// Establish database connection
		$conn = $this->dbConnect();

		// Retrieve hashed password for the given email
		$stmt = $conn->prepare("SELECT name, password FROM user_form WHERE email = ?");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$result = $stmt->get_result();
		$stmt->close();

		if ($result !== null) {
			// Fetch the hashed password from the database
			$row = $result->fetch_assoc();
			$hashedPassword = $row['password'];
			// Verify the provided password against the hashed password
			if (password_verify($password, $hashedPassword)) {
				// Password is correct
				return true;
			} else {
				// Incorrect password
				return false;
			}
		} else {
			// User not found
			return false;
		}
	}
}