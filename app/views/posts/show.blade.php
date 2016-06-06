@extends('layouts.master')

@section('title-tag')
    {{{$post->title}}}
@stop

@section('top-links')
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<style type="text/css">
		
		#post-hero{
			background-image: url(/img/postImg/6z707-stock19.jpg);
			background-size:cover;
		}

	</style>
@stop

@section('content')
<div id='post-hero' class="container-fluid">
	<div class="container">
		<div id='blog-jumbo' class="jumbotron">
			<h1><span id='roboto-slab'>{{{$post->title}}}</h1>
			<p><span id='roboto-slab-small'>{{{$post->author}}} | {{{$post->created_at->setTimezone('America/New_York')->format('F jS, Y')}}}</p>
		</div>
	</div>
</div>
<div class="container">
	<div id="post-holder" class="container col-xs-10 col-xs-offset-1">
	    <p>Tagged: <em>{{{$post->categories}}}</em></p>
	    <p> {{{$post->body}}} </p>
	</div>
@stop