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
	public function register()
	{

		// Prepare data for rendering
		$data = [
			'title' => "Register",
		];

		// Create a new View object with the title and content, then render it
		echo (new Twig())->render('register.twig', $data);
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			return (new UserModel())->UserRegister($_POST['username'], $_POST['email'], $_POST['password']);
		}
	}

	/**
	 * Renders the register page.
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

		// Create a new View object with the title and content, then render it
		echo (new Twig())->render('login.twig', $data);
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			return (new UserModel())->UserLogin($_POST['email'], $_POST['password']);
		}
	}
}