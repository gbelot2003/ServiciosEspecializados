<?php

class DetallesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /detalles
	 *
	 * @return Response
	 */
	public function index()
	{
		$detalles = Detalle::all();
		return $detalles;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /detalles/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /detalles
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /detalles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$detalle = Detalle::find($id);
		return $detalle;
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /detalles/{id}/edit
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
	 * PUT /detalles/{id}
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
	 * DELETE /detalles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}