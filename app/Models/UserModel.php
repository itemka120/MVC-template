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
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
		$stmt = $conn->prepare("INSERT INTO user_form (`name`, `email`, `password`) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $hashedPassword);
		$result = $stmt->execute();
		$stmt->close();

		return $result;
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
		$stmt = $conn->prepare("SELECT password FROM user_form WHERE email = ?");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($hashedPassword);
		$stmt->fetch();
		$stmt->close();

		// Verify password
		if (!$hashedPassword) {
			echo 'User not found';
			return false; // User not found
		}

		echo 'User is found';
		return password_verify($password, $hashedPassword);
	}
}