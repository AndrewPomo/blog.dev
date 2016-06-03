@extends('layouts.master')

@section('title-tag')
    New Post
@stop

@section('top-links')

<link href="/css/main.css" rel="stylesheet">

@section('content')

<div class="container">


	{{ $errors->first('title', '<span class="help-block">:message</span>') }}
	{{ $errors->first('body', '<span class="help-block">:message</span>') }}
	{{ $errors->first('author', '<span class="help-block">:message</span>') }}
	{{ $errors->first('categories', '<span class="help-block">:message</span>') }}
	<h1 class="createHead">Create A New Post!</h1>
	<form  method="POST" action="{{{ action('PostsController@store') }}}">
	@if ($errors->has('title'))
	 <div class="alert alert-danger">{{ $errors->first('title', '<span class="help-block">:message</span>') }}</div>
	@endif
		<fieldset class="form-group">
			<label for="title">Title</label>
			<input id="title" class="form-control" type="text" name="title" placeholder="Enter a title for your post" value="{{{ Input::old('title') }}}">
		</fieldset>
	@if ($errors->has('author'))
	 <div class="alert alert-danger">{{ $errors->first('author', '<span class="help-block">:message</span>') }}</div>
	@endif
		<fieldset class="form-group">
			<label for="author">Author</label>
			<input id="author" class="form-control" type="text" name="author" placeholder="Enter your name" value="{{{ Input::old('author') }}}">
		</fieldset>
	@if ($errors->has('categories'))
	 <div class="alert alert-danger">{{ $errors->first('categories', '<span class="help-block">:message</span>') }}</div>
	@endif
		<fieldset class="form-group">
			<label for="categories">categories</label>
			<input id="categories" class="form-control" type="text" name="categories" placeholder="Enter some categories for your post" value="{{{ Input::old('categories') }}}">
		</fieldset>
	@if ($errors->has('body'))
	 <div class="alert alert-danger">{{ $errors->first('body', '<span class="help-block">:message</span>') }}</div>
	@endif
		<fieldset class="form-group">
			<label for="body">Body</label>
			<textarea id="body" class="form-control" name="body" placeholder="Write your post here">{{{ Input::old('body') }}}</textarea>
		</fieldset>
		<button type="submit" class="btn btn-success">Publish</button>
	</form>
</div>
@stop