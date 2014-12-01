<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get("/partials/equipo", array(
	'as' => "partials/equipo",
	'uses' => "HomeController@equipo"
));

Route::get("/partials/mision", array(
	'as' => "partials/mision",
	'uses' => "HomeController@mision"
));

Route::group(array('before' => 'guest'), function(){

	Route::get('/', array(
		'as' => "index",
		'uses' => "HomeController@index"
	));

	Route::get('/inicio', array(
		'as' => "inicio",
		'uses' => "HomeController@inicio"
	));


	Route::get('/proyecto', array(
		'as' => "proyecto",
		'uses' => "HomeController@proyecto"
	));

	Route::get('/portafolios', array(
		'as' => "portafolios",
		'uses' => "HomeController@portafolios"
	));

	Route::get('/blogs', array(
		'as' => "blogs",
		'uses' => "HomeController@blogs"
	));

	Route::get('/contactanos', array(
		'as' => "contactanos",
		'uses' => "HomeController@contactanos"
	));

	Route::get('/template/detalles', array(
		'as' => "template/detalles",
		'uses' => "HomeController@detalles"
	));
	

	Route::get("/detalles", array(
		'as' => "detalles",
		'uses' => "DetallesController@index"
	));

	Route::get("detalles/{id}", array(
		'uses' => "DetallesController@show"
	));
});
