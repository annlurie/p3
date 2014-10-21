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

//Route::get('/', function()
//{
//	return View::make('hello');
//});

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/lipsum/{query?}', function()
{
	return View::make('loremipsum');
});

Route::get('/users/{query?}', function()
{
	return View::make('users');
});

Route::get('/pack', function()
{
	echo 'packages!';
});
