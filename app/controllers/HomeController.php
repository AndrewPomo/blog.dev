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

	public function showWelcome()
	{
		return View::make('hello');
		// return View::make('home');
	}

	public function resume()
	{
	    return View::make('resume');
	}

	public function portfolio()
	{
	    return View::make('portfolio');
	}

	public function simon()
	{
	    return View::make('simplesimon');
	}

/* If you want to have a variable injected into your route, Format is {variable?}.
	public function($name = default variable)
*/
	public function sayHello($name = 'Codeup')
	{
	    if ($name == "Chris") {
	    	return Redirect::to('/');
	    } else {
	    	$data['name'] = $name;
	    	return View::make('my-first-view')->with($data);
	    }
	}

	public function rollDice($guess = null)
	{
		if ($guess == null) {
	    	$guess = "To roll the die and make a guess, click a link below.";
	    	$number = null;
	    	$outcome = null;
	    	$dieMessage = null;
	    } else {
	    	$guessNum = $guess;
	    	$guess = "You guessed: $guessNum";
	    	$number = mt_rand(1,6);
	    	$dieMessage = "The dice says: $number";
		    if ($guessNum == $number) {
		    	$outcome = "Great guess! Click below to roll again.";
		    } else {
		    	$outcome = "Wrong...try again!";
		    }
    	}

	    $data = [
	    	'dieMessage' => $dieMessage,
	    	'guess' => $guess,
	    	'outcome' => $outcome
		];
	    return View::make('roll-dice')->with($data);
	}

}
