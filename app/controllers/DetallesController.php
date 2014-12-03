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



}