@extends('layouts.master')

@section('title-tag')
    Your Profile
@stop

@section('top-links')
	
@stop

@section('content')
<!-- USER INFO -->
<div class="row">
	<div class=" col-xs-12">
        <div class="col-sm-12 col-lg-offset-1">
        	<div class="row col-xs-12">
	            <div class="col-xs-6">
	                <h1>Welcome, {{{ $user['first_name'] }}}!</h1>
            	</div>             
	            <div id="writeQuotes" class="col-xs-6 text-right">
	                <p id="quote"> </p>
	                <p id="author"> </p>
	            </div>
	        </div>
        </div>
    </div>
</div>
<!-- END USER INFO -->

<!-- USER'S ADS -->
<div class="profile-ads">
	<div class="container">
		

		<hr class="ad-divider">
        @if (!empty($posts))
        <?php $postNum = 1; ?>
        <h2 class="row text-center recent-ads-header">Your Latest Posts</h2>
        <div class="container">
			<div id="post-holder-normal" class="container col-md-10 col-xs-12 col-md-offset-1">
        	@foreach($posts as $post)
		    	<div class="row pre-post">
			    	<img class="col-xs-6 pre-image" src="/{{$post->image}}">
			    	<div class="col-xs-6 info">
					    <div class="pull-right">
					    	<a href="{{{ action('PostsController@edit', [$post->id]) }}}" type="button" class="btn edit-btn btn-small" id="logout-button">Edit</a>
		                    <button type="button" class="btn btn-danger btn-small" id="delete-modal-button" data-toggle="modal" data-target=".delete-modal-<?=$postNum?>">Delete</button>
	                    </div>
					    <p><strong>Categories:</strong> {{$post->categories}} </p>
					    <h3 class="pre-head">{{$post->title}}</h3>
					    <p class="post-date">{{$post->created_at->setTimezone('America/New_York')->format('F jS Y @ h:i A')}} EST</p>
					    <p> {{$post->summary}} </p>
					    <a href="{{{ action('PostsController@show', [$post->id]) }}}" class="read-on">Keep Reading!</a>
				    </div>
			    </div>

	            <!-- DELETE MODAL -->
				<div class="modal fade delete-modal-<?=$postNum?>" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-sm">
					  <div class="modal-content">
					    <div class="modal-header">
					      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					      <h4 class="modal-title text-center" id="mySmallModalLabel">That's risky business! You sure you want to delete this post?</h4>
				      	  <button type="button" class="btn btn-sml" id='dont-delete' data-dismiss="modal" aria-label="Close">Don't delete!</button>
				          <a href="{{{action('PostsController@destroy($post->id)')}}}" id="deletePost" class="btn btn-danger btn-sml" method="DELETE">Delete</a>
					    </div>
					  </div>
					</div>
				</div>
				<!-- END DELETE MODAL -->
        	<?php $postNum++ ?>
        	@endforeach
        	</div>
        </div>
    </div>
</div>
        @else
	    	<h2 class="text-center">Slackin'! You haven't written any posts yet.</h2>
	    	<p class="text-center">(Let's fix that.)</p>
	 	    <a href="{{{action('PostsController@create')}}}"><h2 id="first-post" class="text-center col-xs-10 col-xs-offset-1">Click Here To Write Your First Post!</h2></a>
		@endif
        

	</div>
</div>
<!-- END USER'S ADS -->
@stop