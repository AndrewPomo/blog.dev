<!DOCTYPE html>
<html lang="en">
<head>
    <title>Andrew Powell-Morse | @yield('title-tag')</title>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,800,700,600,400,300' rel='stylesheet' type='text/css'>
	@yield('top-links')
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
	    	<div class="navbar-header">
	      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	        		<span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
	      		</button>
	      		<a class="navbar-brand" href="/">Andrew Powell-Morse</a>
	    	</div>
	    	<div id="navbar" class="navbar-collapse collapse">
	      		<ul class="nav navbar-nav">
			        <li><a href="#">Home</a></li>
			        <li><a href="#">Resume</a></li>
			        <li><a href="#">Portfolio</a></li>
			        <li><a href="#">Contact</a></li>
			    </ul>
	    	</div><!--/.nav-collapse -->
	  	</div><!--/.container-fluid -->
	</nav>
    @yield('content')

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>