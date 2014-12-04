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

	public function blogs()
	{
		return View::make('home.blogs');
	}

	public function contactanos()
	{
		return View::make('home.contactanos');
	}

	public function contactanosForm(){

			$nombre 		= Input::get('nombre');
			$organizacion   = Input::get('organizacion');
			$email 			= Input::get("email");
			$asunto 		= Input::get('asunto');
			$body 			= Input::get('body');

			$mensaje = array(
				'nombre' => $nombre,
				'organizacion' => $organizacion,
				'email' => $email,
				'asunto' => $asunto,
				'body' => $body
			);

			return Redirect::route('success')->with('global', "Su Mensaje a sido enviado exitosamente");

	}

	public function success(){
		return View::make("home.response.success");
	}

	public function equipo(){

		$detalles = Detalle::all();
		return View::make('home.partials.equipo')
			->with('detalles',  $detalles);
	}

	public function mision(){
		return View::make('home.partials.mision');
	}

	public function detalles(){
		return View::make('home.partials.detalles');
	}

}
