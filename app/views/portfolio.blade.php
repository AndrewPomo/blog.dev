@extends('layouts.master')

@section('title-tag')
    Portfolio
@stop

@section('top-links')
    <link href="/css/my_site.css" rel="stylesheet">
@stop

@include('partials.navbar')

@section('content')
<div class="container">
    <div id='resume-jumbo' class="jumbotron">
        <h1 id='roboto-slab'>My Portfolio</h1>
        <p>Here you'll find some of my favorite projects!</p> 
        
    </div>
</div>
    <div class="container-fluid">
        <div class="container" id="thumbnails">
            <div class="row">
                <div class="col-sm-6">
                    <div class="thumbnail featured">
                         <img alt="Specifix" src="/img/specifix.png">
                        <div class="caption">
                            <h2 class="hidden-xs hidden-sm">Specifix</h2>
                            <h3 class="hidden-md hidden-lg">Specifix </h3>
                            <p class="hidden-md hidden-lg">Quality Coding Solutions</p>
                            <p class="hidden-xs hidden-sm featured">
                            Coding Q&A site built at Codeup on a team of three. This project took about 10 days. My key responsibilities included the jQuery/AJAX voting system, the notification system, makign seeders using question and answer content I scraped from Stack Overflow, and the general design and layout of the site.</p>
                            <p>Tech: HTML, CSS, Bootstrap, jQuery, AJAX, PHP, MySQL, Laravel</p>
                            <p><a href=
                            "http://getspecifix.com"> <button class="bluebutton">Try Specifix</button></a> | <a href=
                            "https://github.com/specifix-joshua/specifix.dev" ><button class="bluebutton">Github</button></a></p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail featured">
                         <img alt="RadLister" src="/img/radlister.png">
                        <div class="caption">
                            <h2 class="hidden-xs hidden-sm">Radlister</h2>
                            <h3 class="hidden-md hidden-lg">Radlister</h3>
                            <p class="hidden-md hidden-lg">The Gnarliest Craigslist Clone</p>
                            <p class="hidden-xs hidden-sm featured">
                            Craigslist clone built at Codeup on a team of three. This project took about 6 days. My key responsibilities included ad creation, editing and deletion, login and logout, building views for the user profile, ad index and single ad, and the general color scheme, design and layout of the site.</p>
                            <p>Tech: HTML, CSS, Bootstrap, jQuery, PHP, MySQL</p>
                            <p><a href=
                            "http://radlister.andrewpomo.com"> <button class="bluebutton">Try RadLister</button></a> | <a href=
                            "https://github.com/Rad-Lister/adlister.dev" ><button class="bluebutton">Github</button></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail featured">
                         <img alt="Simon" src="/img/simon.png">
                        <div class="caption">
                            <h2 class="hidden-xs hidden-sm">Simon</h2>
                            <h3 class="hidden-md hidden-lg">Simon</h3>
                            <p class="hidden-md hidden-lg">Don't be fooled by Bambi and Bird.</p>
                            <p class="hidden-xs hidden-sm featured">
                            An admittedly weird jQuery version of the old school hand-held game 'Simon'. I enjoyed this whole project, but especially writing the sassy dialogue between Bird and Bambi.</p>
                            <p>Tech: HTML, CSS, Bootstrap, jQuery</p>
                            <p><a href=
                            "{{{action('HomeController@simon')}}}"> <button class="bluebutton">Play Simon</button></a> | <a href=
                            "https://github.com/AndrewPomo/Simple-Simon" ><button class="bluebutton">Github</button></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail featured">
                        <img alt="Bieber Beater" src="/img/bieber-beater.png">
                        <div class="caption">
                            <h2 class="hidden-xs hidden-sm">Bieber Beater</h2>
                            <h3 class="hidden-md hidden-lg">Bieber Beater</h3>
                            <p class="hidden-md hidden-lg">Is there a more punchable face?</p>
                            <p class="hidden-xs hidden-sm featured">
                            A simple JS wack-a-mole game featuring everyone's least-favorite Canadian pop star! Neat features include the clock, which adds time to your timer, and the CSS 'holes' that I made.</p>
                            <p>Tech: HTML, CSS, Bootstrap, jQuery</p>
                            <p><a  href=
                            "{{{action('HomeController@bieberBeater')}}}"> <button class="bluebutton">Play Bieber Beater</button></a> | <a href=
                            "https://github.com/AndrewPomo/whack-a-mole" ><button class="bluebutton">Github</button></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img alt="..." class="thumbnail-image" src=
                        "/img/quickweather.png">
                        <div class="caption">
                            <h2 class="hidden-xs hidden-sm">QuickWeather</h2>
                            <h3 class="hidden-md hidden-lg">QuickWeather</h3>
                            <p class="hidden-md hidden-lg">Drop the pin, see the weather.</p>
                            <p class="hidden-xs hidden-sm featured">I used JavaScript, the Google Maps API, and the OpenWeatherMap API to build this fun weather forecasting map. The background matches the pinned location's current weather!</p>
                            <p>Tech: HTML, CSS, Bootstrap, JavaScript</p>
                            <p><a href=
                            "{{{action('HomeController@quickWeather')}}}"><button class="bluebutton">Try QuickWeather</button></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img alt="..." class="thumbnail-image" src=
                        "/img/calculator.png">
                        <div class="caption">
                            <h2 class="hidden-xs hidden-sm">JS Calculator</h2>
                            <h3 class="hidden-md hidden-lg">JS Calculator</h3>
                            <p class="hidden-md hidden-lg">Numbers! Arithmetic! Calculations!</p>
                            <p class="hidden-xs hidden-sm featured">I used pure JS to make this simple calculator. My twist? Make it a visual replica of the Mac OS calculator. Complete with background to fool the viewer. Go on...get your math on!</p>
                            <p>Tech: HTML, CSS, Bootstrap, JavaScript</p>
                            <p><a href=
                            "{{{action('HomeController@calculator')}}}" ><button class="bluebutton">Try JS Calculator</button></a></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@include('partials.footer')
@stop