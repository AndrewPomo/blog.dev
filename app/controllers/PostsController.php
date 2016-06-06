<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(5);
		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), Post::$rules);

	    // attempt validation
	    if ($validator->fails()) {
	        // validation failed, redirect to the post create page with validation errors and old inputs
	        Session::flash('errorMessage', 'Post was not saved');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
	        // validation succeeded, create and save the post
			$newPost = new Post();
			$newPost->title = Input::get('title');
			$newPost->author = Input::get('author');
			$newPost->categories = Input::get('categories');
			$newPost->user_id = Auth::id();
			$newPost->summary = Input::get('summary');
			if (Input::hasFile('image')) {
				$imagePath = 'img/postImg/';
				$imageExtension = Input::file('image')->getClientOriginalExtension();
				$imageName = uniqid() . '.' . $imageExtension;
				Input::file('image')->move($imagePath, $imageName);
				$newPost->image = 'img/postImg/' . $imageName;
			}
			$newPost->body  = Input::get('body');
			$newPost->save();
			Session::flash('successMessage', 'Post has been saved');
			Log::info("New Post Created: id= $newPost->id, title= $newPost->title, author= $newPost->author, categories= $newPost->categories");
			return View::make("posts.show")->with('post', $newPost);
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
		$post = Post::find($id);
		return View::make("posts.show")->with('post', $post);
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
        return View::make('posts.edit')->with(['post' => $post]);
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
			$editPost = Post::find($id);
			$editPost->title = Input::get('title');
			$editPost->author = Input::get('author');
			$editPost->categories = Input::get('categories');
			$editPost->summary = Input::get('summary');
			if (Input::hasFile('image')) {
				$imagePath = 'img/postImg/';
				$imageExtension = Input::file('image')->getClientOriginalExtension();
				$imageName = uniqid() . '.' . $imageExtension;
				Input::file('image')->move($imagePath, $imageName);
				$editPost->image = 'img/postImg/' . $imageName;
			}
			$editPost->body  = Input::get('body');
			$editPost->save();
			Session::flash('successMessage', 'Post has been updated');
			return View::make("posts.show")->with('post', $editPost);
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
		$deadPost = Post::find($id);
		$deadPost->delete();
		Session::flash('successMessage', 'Post successfully deleted!');
		return View::make("posts.show")->with('post', $deadPost);
	}


}
