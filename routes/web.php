<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    #return $router->app->version();
    return 'Hello';
});

$router->get('hello[/{name}]', function ($name = null) {
    return 'Hello ' . $name;
});


$router->post('/', function (Illuminate\Http\Request $request) {
	$slug = $request->input('slug');
	return $slug;
});
