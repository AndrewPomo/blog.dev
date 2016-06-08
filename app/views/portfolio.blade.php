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
                            "http://blog.dev/simplesimon/" role="button" target="blank">Play Simon</a></h3>
                            <p class="hidden-md hidden-lg">Somewhat Deceiving</p>
                            <p class="hidden-xs hidden-sm featured">
                            This is a simple JavaScript game that behaves like the old school hand-held game 'Simon'. This was one of my favorite projects while at Codeup. You'll probably see why.</p>
                            <p class="hidden-xs hidden-sm featured"><a class="btn btn-primary" href=
                            "https://www.facebook.com/" role="button" target="blank">Visit Facebook.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="thumbnail featured">
                        <img alt="Amazon" src="/img/amazon.png">
                        <div class="caption">
                            <h2 class="hidden-xs hidden-sm">Amazon</h2>
                            <h3 class="hidden-md hidden-lg">Amazon <a class="btn btn-primary port_butt hidden-md hidden-lg" href=
                            "http://www.amazon.com/" role="button" target="blank">Visit Amazon.com</a></h3>
                            <p class="hidden-md hidden-lg">Earth's most customer-centric company.</p>
                            <p class="hidden-xs hidden-sm featured">
                            Amazon.com strives to be Earth's most
                            customer-centric company where people can find and discover virtually anything they want to buy online. By giving customers more of what they want, Amazon.com continues to grow and evolve as a
                            world-class e-commerce platform.</p>
                            <p class="hidden-xs hidden-sm featured"><a class="btn btn-primary" href=
                            "http://www.amazon.com/" role="button" target="blank">Visit Amazon.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img alt="..." class="thumbnail-image" src=
                        "/img/netflix.png">
                        <div class="caption">
                            <h3>Netflix <a class="btn btn-primary port_butt hidden-md hidden-lg" href=
                            "http://www.netflix.com" role="button" target="blank">Visit Netflix.com</a></h3>
                            <p>See what's next.</p>
                            <p class="hidden-xs hidden-sm featured"><a class="btn btn-primary" href=
                            "http://www.netflix.com" role="button" target="blank">Visit Netflix.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
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
                <div class="col-sm-6 col-md-3">
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
                <div class="col-sm-6 col-md-3">
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
    <div class="container-fluid">
        <div class="container">
            <h1 id="foot_head">What Others Are Saying</h1>
        </div>
        <div class="jumbotron">
            <img id="ben" alt="ben" class="thumbnail-image" src="/img/ben.jpg">
            <p>"When I see Andrew write code, I'm often so overcome with joy that I simply fall to my knees and weep. He has completely changed the way I think about web development. You can't afford <em>not</em> to hire him."</p>
            <p><em>-Ben Batschelet</em></p>
        </div>
        <div class="jumbotron">
            <img id="isaac" alt="isaac" class="thumbnail-image" src="/img/isaac.jpg">
            <p class="quote">"Andrew is without a doubt the most talented developer I have encountered over the course of the past ten years. I taught him how to write his very first lines of code - now I wish he would teach me."</p>
            <p><em>-Isaac Castillo</em></p>
        </div>
    </div>
    
@stop