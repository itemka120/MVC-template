<?php

namespace app\Controllers;

use core\Twig\Twig,
	Twig\Error\LoaderError,
	Exception;

class PageController extends Controller
{
	/**
	 * Renders the home page.
	 *
	 * @throws LoaderError
	 * @throws Exception
	 */
	public function home()
	{
		// Prepare data for rendering
		$data = [
			'title' => 'Welcome!',
		];

		// Create a new View object with the title and content, then render it
		echo (new Twig())->render('home.twig', $data);
	}

	/**
	 * Renders the about page.
	 *
	 * @throws LoaderError
	 * @throws Exception
	 */
	public function about()
	{
		// Prepare data for rendering
		$data = [
			'title' => 'About me',
		];

		// Create a new View object with the title and content, then render it
		echo (new Twig())->render('about.twig', $data);
	}
}