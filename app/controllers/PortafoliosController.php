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
	 * Show the form for creating a new resource.
	 * GET /portafolios/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /portafolios
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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

	/**
	 * Show the form for editing the specified resource.
	 * GET /portafolios/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /portafolios/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /portafolios/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}