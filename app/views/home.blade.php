@extends('layouts.master')

@section('title-tag')
    Full-Stack Web Developer
@stop

@section('top-links')
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
@stop

@section('content')
<div id='home-hero' class="container">
    <div id='home-jumbo' class="jumbotron">
    	<div class="row">
	    	<div class="col-xs-7">
			    <h1 id="firstname" class='roboto-slab home-name'>Andrew</h1>
			    <h1 id="lastname" class='roboto-slab home-name'>Powell-Morse</h1>
			    <p>Full Stack Developer | Marketer | Project Manager</p>
			    <p id='reallybig'>I love <span id="languages">PHP</span></p>
			</div>
			<div id="intro" class="col-xs-5">
				<p>I'm Andrew, a full-stack developer with five years of startup marketing and project management experience. I want to build things that matter.</p>
				<h2 id="home-buttons"><a href="/resume"><button id="homeresume"class="homebutton">Resume</button></a><a href="/portfolio"><button class="homebutton">Portfolio</button></a></h2>
			</div>
        </div>
        <hr id="bigger-margin">
        <div id="links" class="text-center">
        	<h2 id="linksintro">Connect with me:</h2>
        	<a href={{{'mailto:andrewpomo815@gmail.com'}}}><i class="fa fa-envelope-square fa-4" aria-hidden="true"></i></a>
        	<a href="https://www.linkedin.com/in/andrewpomo"><i class="fa fa-linkedin-square fa-4" aria-hidden="true"></i></a>
        	<a href="https://github.com/AndrewPomo"><i class="fa fa-github fa-4" aria-hidden="true"></i></a>
        	<a href="https://angel.co/andrew-powell-morse"><i class="fa fa-angellist fa-4" aria-hidden="true"></i></a>
        </div>
        <p></p>
    </div>
</div>

@stop