<?php

namespace app\Models;

class UserSession
{


	public function logout()
	{
		// Unset all session variables
		$_SESSION = [];

		// Destroy the session
		session_destroy();

		// Redirect to login page or any other desired page
		header("Location: /");
		exit;
	}
}