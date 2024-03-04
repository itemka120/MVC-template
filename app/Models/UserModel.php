<?php

namespace app\Models;

class UserModel extends Model
{
	public function userRegister($name, $email, $password): bool
	{
		if (empty($name) || empty($email) || empty($password)) {
			return false; // Empty fields, registration failed
		}

		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

		$conn = $this->dbConnect();

		$stmt = $conn->prepare("SELECT COUNT(*) FROM user_form WHERE email = ?");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($count);
		$stmt->fetch();
		$stmt->close();

		if ($count > 0) {
			return false; // Email already exists, registration failed
		}

		$stmt = $conn->prepare("INSERT INTO user_form (`name`, `email`, `password`) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $hashedPassword);
		$stmt->execute();
		$stmt->close();

		return true; // Registration successful
	}

	public function userLogin($email, $password): bool
	{
		if (empty($email) || empty($password)) {
			return false; // Empty fields, login failed
		}


		$conn = $this->dbConnect();

		$stmt = $conn->prepare("SELECT name, password, user_type FROM user_form WHERE email = ?");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$result = $stmt->get_result();
		$stmt->close();

		if ($result !== null && $row = $result->fetch_assoc()) {
			$hashedPassword = $row['password'];

			if (password_verify($password, $hashedPassword)) {
				session_start();
				$_SESSION['username'] = $row['name'];
				if ($row["user_type"] == "user") {
					header("location: /");
				} elseif ($row["user_type"] == "admin") {
					header("location: /");
				}
				return true; // Login successful
			}
		}
		return false; // Login failed
	}
}