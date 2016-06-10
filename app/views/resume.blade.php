@extends('layouts.master')

@section('title-tag')
    My Resume
@stop

@section('top-links')
    
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
@stop

@section('content')
<div id='blog-hero' class="container-fluid">
    <div class="container">
        <div id='blog-jumbo' class="jumbotron">
            <h1 id='roboto-slab'>tl;dr</h1>
            <p>I'm a formally-trained developer with 4.5 years of marketing experience. I'm new to coding, but I've excelled thus far. Turn me into your ideal programmer.</p> 
        </div>
    </div>
</div>
<div class="container">
    <div id="resume-holder" class="container col-md-10 col-xs-12 col-md-offset-1">
        <div id="post-content-holder" class="container col-xs-10 col-xs-offset-1">
            <h2 id="resume-section-head" class='roboto-slab roboto-bold'>My Story</h2>
            <h3 class='roboto-slab'>Education:</h3>
                <ul>
                    <li>Attended University of North Texas As a Marketing Major</li>
                    <li>Two time recipient of President's list honors. (4.0 GPA for semester)</li>
                </ul>
            <h3 class='roboto-slab'>Work Experience:</h3>
                <h4>2014-2016: Director of Marketing & Co-Founder - SeatSmart.</h4>
                        <p>My first pre-described leadership role. A fantastic opportunity, but also an immense challenge that ultimately led to me leaving the company to learn to code.</p>
                        <a class='read-more'>Read More...</a>
                        <div class="hide-show-content">
                            <br>
                            <p><strong>What I Did:</strong></p>
                            <p>Much of my role was that of a project manager. This meant brainstorming prioritizing, and managing marketing projects from concept to deployment. I also developed and wrote much of our brand messaging and copy. One unique challenge I faced here was managing a content creation team in Bulgaria. Ultimately my strategy and their execution lead to a successful blog, including a post that went globally viral.</p>

                            <p>My inability to build my own marketing tech left me feeling powerless and was taking a toll on my personal well-being. I decided to leave SeatSmart, enroll at Codeup and take my future into my own hands.</p>

                            <p><strong>What I Learned:</strong></p>
                            <ul>
                                <li>You define the effectiveness of the people you manage and work with. If you don't support them in every way, you're doing them a disservice, and selling yourself short.</li>
                                <li>Marketing a startup is crazy difficult when you are the low-cost provider in a crowded market dominated by juggernauts.</li>
                                <li>In terms of personal growth, I'm willing to sacrifice short-term gain in exchange for long-term gain.</li>
                            </ul>
                        </div>
                <hr>
                <h4>2012-2015: Digital Marketing, Analytics & Editorial Content - Best Tickets</h4>
                    <p>Here, I laid the foundation for my expertise in SEO, email marketing, content marketing and all other digital marketing disciplines. Over the course of a single year, I increased BestTickets.com annual earnings by 5,000%.</p> 
                    <a class='read-more'>Read More...</a>
                    <div class="hide-show-content">
                        <br>
                        <p><strong>What I Did:</strong></p>
                        <p>My marketing activities here consisted primarily of writing the copy for the website, app, and promotional literature, but my day-to-day was much more than that. I helped develop every aspect of the business from the ground up. From writing standard operating procedures, to developing sales tactics, to making and wiring cat5 cables, I worked all hours of the day to advise, assist, and elevate every the company in any way I could.</p>

                        <p><strong>What I Learned:</strong> I have a borderline maniacal willingness to take on any challenge presented to me. Even if I know nothing about the task when I start, I'll end up with a quality result by the time I'm done.</p>
                    </div>
                <hr>
                <h4>2011-2012: Marketing & Co-Founder - Social Commerce Inc.</h4>
                     <p>My first shot at building a startup. The company is gone now, but working at Social Commerce was an incredibly valuable learning experience.</p>
                    <a class='read-more'>Read More...</a>
                    <div class="hide-show-content">
                        <br>
                        <p><strong>What I Did:</strong></p>

                        <p>My marketing activities here consisted primarily of writing the copy for the website, app, and promotional literature, but my day-to-day was much more than that. I helped develop every aspect of the business from the ground up. From writing standard operating procedures, to developing sales tactics, to making and wiring cat5 cables, I worked all hours of the day to advise, assist, and elevate every the company in any way I could.</p>

                        <p><strong>What I Learned:</strong></p>
                        <ul>
                            <li>I have a borderline maniacal willingness to take on any challenge presented to me. Even if I know nothing about the task when I start, I'll end up with a quality result by the time I'm done.</li>
                        </ul>
                    </div>
        </div>
        <hr>
    </div>
</div>
@stop