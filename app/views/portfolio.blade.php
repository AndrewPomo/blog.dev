@extends('layouts.master')

@section('title-tag')
    Portfolio
@stop

@section('top-links')
    <link href="/css/my_site.css" rel="stylesheet">
@stop

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>My Portfolio</h1>
            <p>Browse below to take a closer look at my previous work.</p>
        </div>
    </div><!--need a page header<-->
    <!-- <div class="container-fluid"> -->
        <div class="container" id="thumbnails">
            <div class="row">
                <div class="col-sm-6">
                    <div class="thumbnail featured">
                         <img alt="Simon" src="/img/simon.png">
                        <div class="caption">
                            <h2 class="hidden-xs hidden-sm">Simon</h2>
                            <h3 class="hidden-md hidden-lg">Simon <a class="btn btn-primary port_butt hidden-md hidden-lg" href=
                            "{{{action('HomeController@simon')}}}" role="button" target="blank">Play Simon</a></h3>
                            <p class="hidden-md hidden-lg">Don't be fooled by Bambi and Bird.</p>
                            <p class="hidden-xs hidden-sm featured">
                            This simple JavaScript game is an admittedly weird version of the old school hand-held game 'Simon'. I enjoyed this whole project, but especially writing the sassy dialogue between Bird and Bambi.</p>
                            <p class="hidden-xs hidden-sm featured"><a class="btn btn-primary" href=
                            "{{{action('HomeController@simon')}}}" role="button" target="blank">Play Simon</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail featured">
                        <img alt="Bieber Beater" src="/img/bieber-beater.png">
                        <div class="caption">
                            <h2 class="hidden-xs hidden-sm">Bieber Beater</h2>
                            <h3 class="hidden-md hidden-lg">Bieber Beater <a class="btn btn-primary port_butt hidden-md hidden-lg" href=
                            "{{{action('HomeController@bieberBeater')}}}" role="button" target="blank">Play Bieber Beater</a></h3>
                            <p class="hidden-md hidden-lg">Is there a more punchable face?</p>
                            <p class="hidden-xs hidden-sm featured">
                            Another simple JavaScript wack-a-mole game featuring everyone's least-favorite Canadian pop star! Neat features include the clock, which adds time to your timer, and the CSS 'holes' that I made. Beat away!</p>
                            <p class="hidden-xs hidden-sm featured"><a class="btn btn-primary" href=
                            "{{{action('HomeController@bieberBeater')}}}" role="button" target="blank">Play Bieber Beater</a></p>
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
                            <h3 class="hidden-md hidden-lg">QuickWeather <a class="btn btn-primary port_butt hidden-md hidden-lg" href=
                            "{{{action('HomeController@quickWeather')}}}" role="button" target="blank">Try QuickWeather</a></h3>
                            <p class="hidden-md hidden-lg">Drop the pin, see the weather.</p>
                            <p class="hidden-xs hidden-sm featured">Used JavaScript, the Google Maps API, and the OpenWeatherMap API to build this interactive weather forecasting map. My touch was changing the background to match the current weather at the pin!</p><p class="hidden-xs hidden-sm featured"><a class="btn btn-primary" href=
                            "{{{action('HomeController@quickWeather')}}}" role="button" target="blank">Try QuickWeather</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img alt="..." class="thumbnail-image" src=
                        "/img/reddit.png">
                        <div class="caption">
                            <h3>Reddit <a class="btn btn-primary port_butt hidden-md hidden-lg" href=
                            "https://www.reddit.com" role="button" target="blank">Visit Reddit.com</a></h3>
                            <p>The Front Page of the Internet.</p>
                            <p class="hidden-xs hidden-sm featured"><a class="btn btn-primary" href=
                            "https://www.reddit.com" role="button" target="blank">Visit Reddit.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img alt="..." class="thumbnail-image" src=
                        "/img/seatsmart.png">
                        <div class="caption">
                            <h3>SeatSmart <a class="btn btn-primary port_butt hidden-md hidden-lg" href=
                            "http://www.seatsmart.com" role="button" target="blank">Visit SeatSmart.com</a></h3>
                            <p>Same Tickets. Lower Prices.</p>
                            <p class="hidden-xs hidden-sm featured"><a class="btn btn-primary" href=
                            "http://www.seatsmart.com" role="button" target="blank">Visit SeatSmart.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail">
                        <img alt="..." class="thumbnail-image" src=
                        "/img/apple.png">
                        <div class="caption">
                            <h3>Apple <a class="btn btn-primary port_butt hidden-md hidden-lg" href=
                            "https://www.apple.com" role="button" target="blank">Visit Reddit.com</a></h3>
                            <p>This s**t's <em>expensive</em>!</p>
                            <p class="hidden-xs hidden-sm featured"><a class="btn btn-primary" href=
                            "https://www.apple.com" role="button" target="blank">Visit Reddit.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <!--  </div> -->
    
@stop