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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/resume', function()
{
    return "This is my resume!";
});

Route::get('/portfolio', function()
{
    return "This is my portfolio!";
});

/* If you want to have a variable injected into your route, Format is {variable?}.
Format for default variable is function($name = default variable)
*/
Route::get('/sayhello/{name?}', function($name = 'Codeup')
{
    if ($name == "Chris") {
    	return Redirect::to('/');
    } else {
    	return "Hello, $name!";
    }
});

Route::get('/rolldice/{guess?}', function($guess = 'null')
{
    if ($guess == 'null') {
    	$guess = "You haven't made a guess yet!";
    	$number = null;
    	$outcome = null;
    } else {
    	$guessNum = $guess;
    	$guess = "You guessed: $guessNum";
    	$number = "The dice says: " . mt_rand(1, 6);
	    if ($guessNum == $number) {
	    	$outcome = "Great guess!";
	    } else {
	    	$outcome = "Wrong...try again!";
	    }
    }

    $data = [
    	'number' => $number,
    	'guess' => $guess,
    	'outcome' => $outcome
	];
    return View::make('roll-dice')->with($data);
});