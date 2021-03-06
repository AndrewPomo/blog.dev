<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct()
    {
        // $this->beforeFilter('auth', ['except' => 'getLogin');
    }

    public function doLogin()
	{
		if (Auth::attempt([
			'email' => Input::get('email'), 
			'password' => Input::get('password')]
		)) {
			$user = Auth::user();
			Session::flash('successMessage', 'Login successful!');
	    	return Redirect::intended("/users/$user->id");
		} else {
		    // login failed, go back to the login screen
		    Session::flash('errorMessage', 'Something went wrong with your login.');
		    return Redirect::back();
		}
	}

	public function logout()
	{
		Auth::logout();
    	return Redirect::intended('/posts');
	}

	public function index()
	{
		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), User::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', 'User was not saved');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // validation succeeded, create and save the post
			$newUser = new User();
			$newUser->first_name = Input::get('first_name');
			$newUser->last_name = Input::get('last_name');
			$newUser->email = Input::get('email');
			$newUser->password = Input::get('password');
			
			if (Input::hasFile('image')) {
				$imagePath = 'img/userImg/';
				$imageExtension = Input::file('image')->getClientOriginalExtension();
				$imageName = uniqid() . '.' . $imageExtension;
				Input::file('image')->move($imagePath, $imageName);
				$newUser->image = 'img/userImg/' . $imageName;
			}
			
			$newUser->save();
			Session::flash('successMessage', 'User has been saved');
			Log::info("New User Created: id= $newUser->id, title= $newUser->name, email= $newUser->email");
			return Redirect::back();
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);
		$posts = $user->posts;
		return View::make("users.show")->with('user', $user)->with('posts', $posts);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $post = Post::find($id);
        return View::make('user.edit')->with(['post' => $post]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', 'Post was not updated');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // validation succeeded, create and save the post
			$editUser = User::find($id);
			$editUser->first_name = Input::get('first_name');
			$editUser->last_name = Input::get('last_name');
			$editUser->email = Input::get('email');
			$editUser->password = Input::get('password');
			
			if (Input::hasFile('image')) {
				$imagePath = 'img/userImg/';
				$imageExtension = Input::file('image')->getClientOriginalExtension();
				$imageName = uniqid() . '.' . $imageExtension;
				Input::file('image')->move($imagePath, $imageName);
				$editUser->image = 'img/userImg/' . $imageName;
			}
			
			$editUser->save();
			Session::flash('successMessage', 'User has been saved');
			Log::info("User Updated: id= $newUser->id, title= $newUser->name, email= $newUser->email");
			return View::make("users.show")->with('user', $editUser);
	    }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$deadUser = User::find($id);
		$deadUser->delete();
		Session::flash('successMessage', 'User successfully deleted!');
		return View::make("user.show")->with('user', $deadUser);
	}


}
