<?php

namespace app\Controllers;

use app\Models\UserModel,
	core\Twig\Twig,
	Twig\Error\LoaderError,
	Exception;

class UserController extends Controller
{
	/**
	 * Renders the register page.
	 *
	 * @throws LoaderError
	 * @throws Exception
	 */
	/**
	 * Renders the register page.
	 *
	 * @throws LoaderError
	 * @throws Exception
	 */
	public function register()
	{
		// Prepare data for rendering
		$data = [
			'title' => "Register",
		];

		// Check if form is submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Handle registration
			$userModel = new UserModel();
			$userModel->userRegister($_POST['username'], $_POST['email'], $_POST['password']);
		}

		// Create a new View object with the title and content, then render it
		echo (new Twig())->render('register.twig', $data);
	}

	/**
	 * Renders the login page.
	 *
	 * @throws LoaderError
	 * @throws Exception
	 */
	public function login()
	{

		// Prepare data for rendering
		$data = [
			'title' => "Login",
		];

		// Check if form is submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Handle login
			$userModel = new UserModel();
			$userModel->userLogin($_POST['email'], $_POST['password']);
		}

		// Create a new View object with the title and content, then render it
		echo (new Twig())->render('login.twig', $data);
	}
}