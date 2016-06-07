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
            <div class="col-xs-12 col-sm-4 text-center">
                <!-- <img id="profile-pic" src="{{{ $user['image'] }}}"> -->

                <!-- <button class="col-xs-6 col-xs-offset-3 btn btn-success"><span class="fa fa-plus-circle"></span> Follow </button> -->
            </div>
            <div class="col-xs-12 col-sm-8">
                <h1>{{{ $user['name'] }}}</h1>
                <p><strong>Contact: </strong> {{{$user['email']}}}</p>
                <p><strong>Listings: </strong> 1,584 <strong>Sold: </p>
            </div>             
        </div>
    </div>
</div>
<!-- END USER INFO -->

<!-- USER'S ADS -->
<div class="profile-ads">
	<div class="container">
		<h2 class="row text-center recent-ads-header">Your Latest Posts</h2>
		<div class="item-list">
		    <div class="row col-md-offset-1 col-md-10 col-lg-8 col-lg-offset-2">
				<div class="col-xs-2 no-padding photobox">
					<a href="/posts/create" type="button" class="btn info-btn btn-small">New Post!</a>
				</div>
			</div> 
		</div>

		<hr class="ad-divider">
        @if (!empty($posts))
        	@foreach($posts as $post)
				<div class="item-list">
				    <div class="row col-md-offset-1 col-md-10 col-lg-8 col-lg-offset-2">
						<div class="col-xs-2 no-padding photobox">
							<div class="add-image"> 
								<a href="/posts/show?id={{{$post['id'] }}}">
									<img class="thumbnail no-margin" src="{{{ $post['img_url'] }}}" alt="img">
								</a> 
							</div>
						</div>
					 
						<div class="col-xs-7 add-desc-box">
							<div class="add-details">
								<h5 class="add-title"> 
									<a class="content-link" href="/posts/show/{{{$post['id'] }}}"> {{{ $post['title'] }}}</a>
								</h5>
								<span class="info-row"> 
									<span class="date">
										<i class="fa fa-clock-o"> </i> 
										{{{$estab = strtotime($post['date_listed'])}}}
											{{{date("m/d/Y", $estab) }}}
									</span> 
									- 
									<span class="category">{{{ $post['category'] }}} </span>
									- 
									<span class="item-location">
										<i class="fa fa-map-marker"></i> 
										San Antonio, TX 
									</span> 
								</span> 
							</div>
						</div>
					 	
						<div class="col-xs-3 text-right  price-box">
							<h2 class="item-price">${{{ $post['price'] }}}</h2>
							<form id="adActions" method="POST">
			                    <button type="button" class="btn edit-btn btn-small" id="delete-modal-button" data-toggle="modal" data-target=".edit-modal-{{{$postNum}}}">Edit</button>
			                    <button type="button" class="btn btn-danger btn-small" id="delete-modal-button" data-toggle="modal" data-target=".delete-modal-{{{$postNum}}}">Delete</button>
				            </form>

				            <!-- EDIT MODAL -->
							<div class="modal fade edit-modal-{{{$postNum}}}" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-lg">
								  <div class="modal-content">
								    <div class="modal-header">
								      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
								      <h4 class="modal-title text-center" id="myLargeModalLabel">Let's Fix This Ad!</h4>
								      <form method="POST">
								      	<label class='pull-left'>Title</label>
									    <input name="adTitle" class="form-control" required value="{{{ $post['title'] }}}">
									   
									    <label class='pull-left'>Description</label>
									    <input name="adDescription" class="form-control" required value="{{{ $post['description'] }}}">
									    
									    <label class='pull-left'>Price</label>
									    <input name="adPrice" class="form-control" type="number" min="0" placeholder="numbers only" required value="{{{ $post['price'] }}}">
								
									    <label class='pull-left'>Image</label>
									    <input name="adImgURL" class="form-control" required value="{{{$post['img_url'] }}}">
									    
									    <label class='pull-left'>Category</label>
									    <input name="adCategory"class="form-control" required value="{{{$post['category'] }}}">

									    <label class='pull-left'>Tags</label>
									    <input name="adTags"  class="form-control" placeholder="characters only" required value="{{{$post['tags'] }}}">
									    <input name="adId"  class="form-control hidden" placeholder="characters only" required value="{{{$post['id'] }}}">
							  			<button type="submit" class="btn btn-sml center" id='update-btn'>Update!</button>
								      </form>
								    </div>
								  </div>
								</div>
							</div>
							<!-- END EDIT MODAL -->

				            <!-- DELETE MODAL -->
							<div class="modal fade delete-modal-{{{$postNum}}}" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog modal-sm">
								  <div class="modal-content">
								    <div class="modal-header">
								      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
								      <h4 class="modal-title text-center" id="mySmallModalLabel">Are you sure, bruh?</h4>
								      <form method="POST">
								      	<button type="button" class="btn btn-sml pull-left" id='dont-delete' data-dismiss="modal" aria-label="Close">Don't delete!</button>
								        <button name="deleteAd" id="deleteAd" type="submit" class="btn btn-danger btn-sml" value="{{{ $post{'id'} }}}">Delete</button>
								      </form>
								    </div>
								  </div>
								</div>
							</div>
							<!-- END DELETE MODAL -->
						</div>
					</div> 
				</div>

				<hr class="ad-divider">
        	<?php $postNum++ ?>
        	@endforeach
    </div>
</div>
        @else
    		<div class="item-list">
			    <div class="row col-md-offset-1 col-md-10 col-lg-8 col-lg-offset-2">
					<div class="no-ads">
						<p>You haven't made any posts!</p>
					</div>
				</div> 
			</div>	
		@endif
        

	</div>
</div>
<!-- END USER'S ADS -->
@stop