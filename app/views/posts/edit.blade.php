@extends('layouts.master')

@section('title-tag')
    New Post
@stop

@section('top-links')

<link href="/css/main.css" rel="stylesheet">
@stop

@include('partials.navbar')

@section('content')

<div class="container">
	<h1 class="editHead">Edit This Post!</h1>
	{{ Form::open(['action' => ['PostsController@update', $post->id], 'method'=>'PUT', 'files' => true]) }}
	@if ($errors->has('title'))
	 <div class="alert alert-danger">{{ $errors->first('title', '<span class="help-block">:message</span>') }}</div>
	@endif
		<fieldset class="form-group">
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'A Title For Your Post']) }}
		</fieldset>
	@if ($errors->has('author'))
	 <div class="alert alert-danger">{{ $errors->first('author', '<span class="help-block">:message</span>') }}</div>
	@endif
		<fieldset class="form-group">
			{{ Form::label('author', 'Author') }}
			{{ Form::text('author', $post->author, ['class' => 'form-control', 'placeholder' => 'Enter Your Name']) }}
		</fieldset>
	@if ($errors->has('categories'))
	 <div class="alert alert-danger">{{ $errors->first('categories', '<span class="help-block">:message</span>') }}</div>
	@endif
		<fieldset class="form-group">
			{{ Form::label('categories', 'Categories') }}
			{{ Form::text('categories', $post->categories, ['class' => 'form-control', 'placeholder' => 'Enter Some Categories For Your Post']) }}
		</fieldset>
		<fieldset class="form-group">
			{{ Form::label('image', 'Upload Your Post\'s Featured Image') }}
			{{ Form::file('image', Input::old('image'), ['class' => 'form-control']) }}
		</fieldset>
	@if ($errors->has('summary'))
	 <div class="alert alert-danger">{{ $errors->first('summary', '<span class="help-block">:message</span>') }}</div>
	@endif
		<fieldset class="form-group">
			{{ Form::label('summary', 'Summary') }}
			{{ Form::text('summary', $post->summary, ['class' => 'form-control', 'placeholder' => 'Enter A Short Summary Of Your Post']) }}
		</fieldset>
	@if ($errors->has('body'))
	 <div class="alert alert-danger">{{ $errors->first('body', '<span class="help-block">:message</span>') }}</div>
	@endif
		<fieldset class="form-group">
			{{ Form::label('body', 'Body') }}
			{{ Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Write Your Post Here']) }}
		</fieldset>
		<button type="submit" class="btn btn-success">Publish</button>
	{{ Form::close() }}
</div>
@stop