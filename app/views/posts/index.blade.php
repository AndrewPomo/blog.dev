@extends('layouts.master')

@section('title-tag')
    Blog Posts
@stop

@section('top-links')
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
@stop

@section('content')
<div id='blog-hero' class="container-fluid">
	<div class="container">
		<div id='blog-jumbo' class="jumbotron">
			<h1><span id='roboto-slab'>this is my blog.</h1>
		</div>
	</div>
</div>
<div class="container">
	<div id="post-holder" class="container col-xs-10 col-xs-offset-1">
	    @foreach($posts as $post)
	    	<div class="row pre-post">
		    	<img class="col-xs-6 pre-image" src="/{{$post->image}}">
		    	<div class="col-xs-6 info">
				    <p><strong>Categories:</strong> {{$post->categories}} </p>
				    <h3 class="pre-head">{{$post->title}}</h3>
				    <p class="post-date">{{$post->created_at->setTimezone('America/New_York')->format('F jS Y @ h:i A')}} EST</p>
				    <p> {{$post->summary}} </p>
				    <a href="{{{ action('PostsController@show', [$post->id]) }}}" class="read-on">Keep Reading!</a>
			    </div>
		    </div>
		@endforeach
		{{ $posts->links() }}
	</div>
</div>
@stop