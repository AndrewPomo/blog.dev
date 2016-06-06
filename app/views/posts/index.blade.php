@extends('layouts.master')

@section('title-tag')
    Blog Posts
@stop

@section('top-links')
	<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
@stop

@section('content')
<div id='blog-hero' class="container-fluid">
	<div class="container">
		<div id='blog-jumbo' class="jumbotron">
			<h1>this is my blog</h1>
			<h3>there are many like it, <span id='dancing-script'>but this one is mine</span></h3>
		</div>
	</div>
</div>
<div class="container">
    @foreach($posts as $post)
	    <h1> {{{$post->title}}} </h1>
	    <h4> Written by: {{{$post->author}}} </h4>
	    <p>Tags: {{{$post->categories}}} </p>
	    <p> {{{$post->body}}} </p>
	@endforeach
	{{ $posts->links() }}
</div>
@stop