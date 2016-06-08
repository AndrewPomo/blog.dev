@extends('layouts.master')

@section('title-tag')
    {{{$post->title}}}
@stop

@section('top-links')
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<style type="text/css">
		
		#post-hero{
			background-image: url(/{{{$post->image}}});
			background-size:cover;
		}

	</style>
@stop

@section('content')
<div id='post-hero' class="container-fluid">
	<div class="container">
		<div id='blog-jumbo' class="jumbotron">
			
		</div>
	</div>
</div>
<div class="container">
	<div id="post-holder" class="container col-xs-12 cold-md-10 col-md-offset-1">
		<div id="post-content-holder" class="container col-xs-10 col-xs-offset-1">
			<h1><span id='roboto-slab'>{{{$post->title}}}</span></h1>
			<p><span id='roboto-slab-small'>{{{$post->author}}} | {{{$post->created_at->setTimezone('America/New_York')->format('F jS, Y')}}}</span></p>
		    <p>Tagged: <em>{{{$post->categories}}}</em></p>
		    <p> {{$post->body}} </p>
	    </div>
	</div>
</div>
@stop