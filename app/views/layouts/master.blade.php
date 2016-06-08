<!DOCTYPE html>
<html lang="en">
<head>
    <title>Andrew Powell-Morse | @yield('title-tag')</title>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,800,700,600,400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/main.css" crossorigin="anonymous">
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<?php $user = Auth::user() ?>
	@yield('top-links')
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a href="/posts">
	      	<img src="/img/pomo-mark.png" href="/posts" class="navbar-brand">
	      </a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
		  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav">
		      <li><a href="/posts">Blog<span class="sr-only">(current)</span></a></li>
		      <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Me<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="/resume">Resume</a></li>
	            <li><a href="/portfolio">Portfolio</a></li>
	        		<li><a href="mailto:{{{$user['email']}}}">Write me</a></li>
	          </ul>
	        </li>

		      <!-- These buttons only show if the user is logged IN -->
		      
		      @if (Auth::check())
		        <li><a href="/posts/create">Create A New Post</a></li>   
		      @endif
		    </ul>

	     <div class="nav-menu btn-group pull-right" role="group">

	        <!-- Logout & Profile Buttons -->
	        <!-- These buttons only show if the user is logged IN -->
	        @if (Auth::check())
	      
	        <a href="/logout" type="button" class="btn btn-default" id="logout-button">Logout</a>
	        <a href="/users/{{{$user->id}}}" type="button" class="btn btn-default" id="profile-button">Profile</a>
	        @else

	        <!-- Login & Signup Buttons -->
	        <!-- These only show if the user is logged OUT -->

	        <button type="button" class="btn btn-default" id="login-modal-button" data-toggle="modal" data-target=".login-modal">Login</button>
	        <button type="button" class="btn btn-default" id="signup-modal-button" data-toggle="modal" data-target=".signup-modal">Sign Up</button>
	        @endif
	      </div>

	    
	      <!-- Login modal -->
	      <div class="modal fade login-modal" tabindex="-1" role="dialog" aria-hidden="true">
	        <div class="modal-dialog modal-sm">
	          <div class="modal-content">
	            <div class="modal-header">
	              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <h4 class="modal-title" id="mySmallModalLabel">Welcome back!</h4>
	              {{ Form::open(array('action' => 'UsersController@doLogin')) }}
									@if ($errors->has('email'))
									<div class="alert alert-danger">{{ $errors->first('name', '<span class="help-block">:message</span>') }}</div>
									@endif
									<fieldset class="form-group">
										{{ Form::label('email', 'Email') }}
										{{ Form::text('email', Input::old('Email'), ['class' => 'form-control', 'placeholder' => 'Your Email']) }}
									</fieldset>
									@if ($errors->has('password'))
									<div class="alert alert-danger">{{ $errors->first('password', '<span class="help-block">:message</span>') }}</div>
									@endif
									<fieldset class="form-group">
										{{ Form::label('password', 'Password') }}
										{{ Form::password('password', ['class' => 'form-control', 'placeholder' => ' Enter Your Password']) }}
									</fieldset>
									<button type="submit" class="btn btn-success center-block">CLICK TO LOG IN</button>
								{{ Form::close() }}
	              <div class="text-center">
	                  <a href="#" id="forgotPasswordLink">Forgot your password?</a>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>

	      <!-- Signup modal -->
	      <div class="modal fade signup-modal" tabindex="-1" role="dialog" aria-hidden="true">
	        <div class="modal-dialog modal-sm">
	          <div class="modal-content">
	            <div class="modal-header">
	              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	              <h4 class="modal-title text-center" id="mySmallModalLabel">Let's Get Started!</h4>
								{{ Form::open(array('action' => 'UsersController@store')) }}
									@if ($errors->has('first_name'))
									<div class="alert alert-danger">{{ $errors->first('name', '<span class="help-block">:message</span>') }}</div>
									@endif
									<fieldset class="form-group">
										{{ Form::label('first_name', 'First Name') }}
										{{ Form::text('first_name', Input::old('first_name'), ['class' => 'form-control', 'placeholder' => 'Your First Name']) }}
									</fieldset>
									@if ($errors->has('last_name'))
									<div class="alert alert-danger">{{ $errors->first('last_name', '<span class="help-block">:message</span>') }}</div>
									@endif
									<fieldset class="form-group">
										{{ Form::label('last_name', 'Last Name') }}
										{{ Form::text('last_name', Input::old('last_name'), ['class' => 'form-control', 'placeholder' => 'Your Last Name']) }}
									</fieldset>
									@if ($errors->has('email'))
									<div class="alert alert-danger">{{ $errors->first('email', '<span class="help-block">:message</span>') }}</div>
									@endif
									<fieldset class="form-group">
										{{ Form::label('email', 'Email') }}
										{{ Form::text('email', Input::old('email'), ['class' => 'form-control', 'placeholder' => 'Your Email']) }}
									</fieldset>
									@if ($errors->has('password'))
									<div class="alert alert-danger">{{ $errors->first('password', '<span class="help-block">:message</span>') }}</div>
									@endif
									<fieldset class="form-group">
										{{ Form::label('password', 'Password') }}
										{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Create a Password']) }}
									</fieldset>
									<button type="submit" class="btn btn-success center-block">CLICK TO SIGN UP</button>
								{{ Form::close() }}
	            </div>
	          </div>
	        </div>
	      </div>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	@if (Session::has('successMessage'))
	    <div class="alert alert-success flashbar">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
	    <div class="alert alert-danger flashbar">{{{ Session::get('errorMessage') }}}</div>
	@endif
  @yield('content')
  	<footer class="footer">
      <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <a href="mailto:{{{$user['email']}}}?"><span class="glyphicon glyphicon-envelope footer_mail" aria-hidden="true"></span> - {{{$user['email']}}}</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <p class="copyright">© 2016 Andrew Powell-Morse. All Rights Reserved.
            </div>
        </div>
    </div>
      </div>
    </footer>

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="/js/main.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</body>
</html>