<?php

class PortafoliosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /portafolios
	 *
	 * @return Response
	 */
	public function index()
	{
		$portafolios = Portafolio::all();
		return View::make('home.portafolios')
			->with('portafolios', $portafolios);
	}
	
	/**
	 * Display the specified resource.
	 * GET /portafolios/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$portafolio = Portafolio::find($id);
		return $portafolio;
	}


}