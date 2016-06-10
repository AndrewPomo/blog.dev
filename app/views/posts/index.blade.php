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
			<h1><span class='roboto-slab roboto-bold'>this is my blog.</h1>
		</div>
	</div>
</div>
<div class="container">
	<div id="post-holder" class="container col-md-10 col-xs-12 col-md-offset-1">
	    @foreach($posts as $post)
	    	<div class="row pre-post">
		    	<a href="{{{ action('PostsController@show', [$post->id]) }}}" class="read-on"><img class="col-xs-12 col-md-6 pre-image" src="/{{$post->image}}"></a>
		    	<div class="col-xs-12 col-md-6 info">
				    <p><strong>Categories:</strong> {{$post->categories}} </p>
				    <h3 class="pre-head">{{$post->title}}</h3>
				    <p class="post-date">{{$post->created_at->setTimezone('America/New_York')->format('F jS Y @ h:i A')}} EST</p>
				    <p> {{$post->summary}} </p>
				    <a href="{{{ action('PostsController@show', [$post->id]) }}}" class="read-on">Keep Reading!</a>
			    </div>
		    </div>
		    <hr>
		@endforeach
		{{ $posts->links() }}
	</div>
</div>
@stop