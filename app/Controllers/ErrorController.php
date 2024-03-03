<?php

namespace app\Controllers;

use core\Twig\Twig,
	Twig\Error\Error;

class ErrorController extends Controller
{
	/**
	 * Method to return 404 errors.
	 * @throws Error
	 */
	public function show404()
	{
		$data = [
			'title' => '404',
		];

		// Create a new View object with the title and content, then render it
		echo (new Twig())->render('404.twig', $data);
	}
}