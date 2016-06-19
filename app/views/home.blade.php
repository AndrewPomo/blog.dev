@extends('layouts.master')

@section('title-tag')
    Full-Stack Web Developer | Andrew Powell-Morse
@stop

@section('top-links')
    
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
@stop

@section('content')
<div id='resume-hero' class="container-fluid">
    <div class="container">
        <div id='blog-jumbo' class="jumbotron text-center">
            <h1 id='roboto-slab'>I'm Andrew</h1>
            <p>Full Stack Developer | Marketer | Project Manager</p>
            <p>I <em>love</em>...</p>
            <p id="reallybig">PHP</p>
        </div>
    </div>
</div>
<!-- Marketing messaging and featurettes
================================================== -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row text-center">
    <div class="col-lg-4">
      <img class="img-circle center-block" src="/img/question-mark.png" alt="Generic placeholder image" width="140" height="140">
      <h2>Got Questions?</h2>
      <p>We've got answers! This is the place for all your LAMP+J questions. No short answers or links to other threads here. Each question gets its own specific solution, ensuring you leave with a proper solution.</p>
      <p><a class="btn btn-secondary" href="{{--{{action('ReportsController@create')}}--}}" role="button">Ask Now! &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="img-circle center-block" src="./img/specifix-bounty.png" alt="Generic placeholder image" width="140" height="140">
      <h2>Place A Bounty</h2>
      <p>Are you in need of expert help right away? For a small fee, Specifix bounties get you quality answers FAST! Post your question to the bounty board containing your desiredexperts, and poof! No more bug.</p>
      <p><a class="btn btn-secondary" href="{{--{{action('InstancesController@create')}}--}}" role="button">Place a Bounty&raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="img-circle center-block" src="./img/easy-money.png" alt="Generic placeholder image" width="140" height="140">
      <h2>Earn Cash</h2>
      <p>Do you have the jump on JavaScript? Are you a PHP professional? A MySQL master? Monitor the Specifix bounty boards for questions you can answer, and we'll reward you with cold hard cash. How easy is that?</p>
      <p><a class="btn btn-secondary" href="{{--{{action('DiysController@create')}}--}}" role="button">Get Paid, Son &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
</div><!-- /.container -->
@stop