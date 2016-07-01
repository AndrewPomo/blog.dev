@extends('layouts.master')

@section('title-tag')
    New Post
@stop

@section('top-links')

<link href="/css/main.css" rel="stylesheet">
@stop

@include('partials.navbar')

@section('content')
@if (Auth::check())
		<?php $user = Auth::user() ?>
@endif
<div class="container">
	<h1 class="createHead">Create A New Post!</h1>
	{{ Form::open(array('action' => 'PostsController@store', 'files' => true)) }}
	@if ($errors->has('title'))
	 <div class="alert alert-danger">{{ $errors->first('title', '<span class="help-block">:message</span>') }}</div>
	@endif
		<fieldset class="form-group">
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', Input::old('title'), ['class' => 'form-control', 'placeholder' => 'A Title For Your Post']) }}
		</fieldset>
	@if ($errors->has('categories'))
	 <div class="alert alert-danger">{{ $errors->first('categories', '<span class="help-block">:message</span>') }}</div>
	@endif
		<fieldset class="form-group">
			{{ Form::label('categories', 'Categories') }}
			{{ Form::text('categories', Input::old('categories'), ['class' => 'form-control', 'placeholder' => 'Enter Some Categories For Your Post']) }}
		</fieldset>
	@if ($errors->has('image'))
	 <div class="alert alert-danger">{{ $errors->first('image', '<span class="help-block">:message</span>') }}</div>
	@endif
		<fieldset class="form-group">
			{{ Form::label('image', 'Upload Your Post\'s Featured Image') }}
			{{ Form::file('image', Input::old('image'), ['class' => 'form-control']) }}
		</fieldset>
	@if ($errors->has('summary'))
	 <div class="alert alert-danger">{{ $errors->first('summary', '<span class="help-block">:message</span>') }}</div>
	@endif
		<fieldset class="form-group">
			{{ Form::label('summary', 'Summary') }}
			{{ Form::text('summary', Input::old('summary'), ['class' => 'form-control', 'placeholder' => 'Enter A Short Summary Of Your Post']) }}
		</fieldset>
	@if ($errors->has('body'))
	 <div class="alert alert-danger">{{ $errors->first('body', '<span class="help-block">:message</span>') }}</div>
	@endif
		<fieldset class="form-group">
			{{ Form::label('body', 'Body') }}
			{{ Form::textarea('body', Input::old('body'), ['class' => 'form-control', 'placeholder' => 'Write Your Post Here']) }}
		</fieldset>
		{{ Form::hidden('author', $user->first_name . ' ' . $user->last_name) }}
		<button type="submit" class="btn btn-success">Publish</button>
	{{ Form::close() }}
</div>

@stop

