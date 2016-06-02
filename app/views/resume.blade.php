@extends('layouts.master')

@section('top-links')
    <link href="/css/main.css" rel="stylesheet">
@stop

@section('content')
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button aria-expanded="false" class="navbar-toggle collapsed"
                data-target="#bs-example-navbar-collapse-1" data-toggle=
                "collapse" type="button"><span class="sr-only">Toggle
                navigation</span> <span class="icon-bar"></span> <span class=
                "icon-bar"></span> <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="#">Andrew Powell-Morse</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id=
            "bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Home <span class=
                        "sr-only">(current)</span></a>
                    </li>
                    <li class="active">
                        <a href="#">Portfolio <span class=
                        "sr-only">(current)</span> </a>
                    </li>
                    <li>
                        <a href="#">Resume</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
    <div class="container">
        <div class="jumbotron">
            <h1>Experience <em>Matters</em></h1>
            <p>When searching for someone to manage your business's online presence, make sure you choose someone with real experience.</p>
            <p>Below you'll find everything you need to know about me and my experience as a marketer and web developer.</p>
        </div>
    </div><!--need a page header<-->
    <!-- <div class="container-fluid"> -->
    <div class="container">
        <div class="resume-holder">
            <div class="row">
                <div class="page-header col-sm-12 resume-header">
                    <h2 class="name-title">Andrew Powell-Morse
                    <br>
                    <small>Full-Stack Web Developer | Digital Marketer</small>
                    </h2>
                    <ul class="list-unstyled contact">
                        <li><h3>Contact Me</h3></li>
                        <li>Phone: 210.445.2022</li>
                        <li>Email: AndrewPomo815@gmail.com</li>

                </div>
            </div>
        </div>
    </div>
   <!--  </div> -->
    <div class="container-fluid">
        <div class="container">
            <h1 id="foot_head">What Others Are Saying</h1>
        </div>
        <div class="jumbotron">
            <img id="ben" alt="ben" class="thumbnail-image" src="/img/ben.jpg">
            <p>"When I see Andrew write code, I'm often filled with such joy that I simply fall to my knees and weep. He has completely changed the way I think about web development. You can't afford <em>not</em> to hire him."</p>
            <p><em>-Ben Batschelet</em></p>
        </div>
        <div class="jumbotron">
            <img id="isaac" alt="isaac" class="thumbnail-image" src="/img/isaac.jpg">
            <p class="quote">"Andrew is without a doubt the most talented developer I have encountered over the course of the past ten years. I taught him how to write his very first lines of code - now I wish he would teach me."</p>
            <p><em>-Isaac Castillo</em></p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <ul class="list-unstyled footer_list">
                    <li class="footer_li">Home</li>
                    <li class="footer_li">Portfolio</li>
                    <li class="footer_li">Experience</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <span class="glyphicon glyphicon-envelope footer_mail" aria-hidden="true"> <a href="mailto:AndrewPomo815@gmail.com?">AndrewPomo815@gmail.com</span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <p class="copyright">© 2016 Andrew Powell-Morse. All Rights Reserved.
            </div>
        </div>
    </div>
@stop