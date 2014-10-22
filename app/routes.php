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
	echo 'Pre!';
	$fruit = Array('Apples', 'Oranges', 'Pears');
    echo Pre::render($fruit,'Fruit');

    echo 'Faker';
    $faker = Faker::create();
    echo $faker->name;
    echo $faker->phoneNumber;
    echo $faker->email;
    echo $faker->sentence($nbWords = 6);
    echo $faker->date($format = 'Y-m-d', $max = '-13 years', $min = '-100 years');

    echo 'LoremIpsum';
    $generator = new LoremIpsum();
    $paragraphs = $generator->getParagraphs(3);
    echo implode('<p>', $paragraphs);


});
