<?php

namespace app\Controllers;

use core\Twig\Twig,
	Twig\Error\LoaderError;
use Exception;

class UserController
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
	}
}