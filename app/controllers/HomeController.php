<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		return View::make('home.index');
	}

	public function inicio()
	{
		return View::make('home.inicio');
	}

	public function proyecto()
	{
		return View::make('home.proyecto');
	}

	public function portafolios()
	{
		return View::make('home.portafolios');
	}

	public function blogs()
	{
		return View::make('home.blogs');
	}

	public function contactanos()
	{
		return View::make('home.contactanos');
	}



}
