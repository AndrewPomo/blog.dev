@extends('layouts.master')

@section('title-tag')
    My Resume
@stop

@section('top-links')
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
@stop

@section('content')
<div class="container">
    <div id='resume-jumbo' class="jumbotron">
        <h1 id='roboto-slab'>tl;dr</h1>
        <p>After five years of startup marketing and project management, I've added full-stack web development to my tool kit. My love for product development and project management helps me write code efficiently and with purpose. I'm addicted to the pace and culture of startups, and can't wait to experience them as a programmer.</p> 
        <p>You'll find two version of my resume below. For the short n' sweet PDF, just click the button below. For the extended director's cut with full commentary...well...keep scrolling.</p> 
        <p><a class="btn resumebutton btn-lg" href="/files/Andrew_Powell_Morse.pdf" role="button">Download .PDF Resume</a></p>
        
    </div>
</div>
<div class="container-fluid skills">
    <div id="resume-content-holder" class="container col-xs-10 col-xs-offset-1">
        <h1 class='roboto-slab text-center res-sec'>Technical Skills</h1>
        <div id="res-skills" class="col-md-10 col-md-offset-1">
            <div class="programming col-xs-12 ">
                <h2 class="skillhead">Programming</h2>
                <div class="languages row">
                    <div class="col-xs-6">
                        <p>HTML</p>
                        <p>CSS</p>
                        <p>JavaScript</p>
                        <p>PHP</p>
                    </div>
                    <div class="col-xs-6">
                        <p>Bootstrap</p>
                        <p>jQuery</p>
                        <p>Laravel</p>
                        <p>Git</p>
                    </div>
                </div>
                <hr>
            </div>
            <div class="programming col-xs-12">
                <h2 class="skillhead">Marketing & Biz Ops</h2>
                <div class="languages row">
                    <div class="col-xs-6">
                        <p>SEO</p>
                        <p>Email Marketing</p>
                        <p>Copywriting</p>
                        <p>Google Analytics</p>
                    </div>
                    <div class="col-xs-6">
                        <p>Model Development</p>
                        <p>Product Development</p>
                        <p>Project Management</p>
                        <p>Pitching</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div id="work-experience" class="col-md-10 col-md-offset-1">
            <h1 class='roboto-slab text-center res-sec'>Work Experience:</h1>
            <div class="job">
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
            </div>
            <div class="job">
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
            </div>
            <div class="job">
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
                <hr>
            </div>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <h1 class='roboto-slab text-center res-sec'>Education:</h1>
            <div class="school">
                <h3>Codeup Full Stack Program (480 Class hours)</h3>
                <ul class="reslist">
                    <li>HTML & CSS</li>
                    <li>JavaScript & jQuery</li>
                    <li>MySQL</li>
                    <li>PHP & Laravel</li>
                </ul>
                <hr>
            </div>
            <div class="school">
                <h3>University of North Texas - Marketing Major</h3>
                <ul class="reslist">
                    <li>Two time recipient of President's list honors. (4.0 GPA for semester)</li>
                    <li>Left to found Social Commerce and Qliq. Maybe I'll go back some day?</li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <h1 class='roboto-slab text-center res-sec'>Other Achievements:</h1>
            <div class="other">
                <h3>Write Privileges:</h3>
                <ul class="reslist">
                    <li>HuffPost</li>
                    <li>Business Insider</li>
                    <li>Bleacher Report</li>
                </ul>
                <hr>
            </div>
            <div class="other">
                <h3>Web Coverage:</h3>
                <ul class="reslist col-xs-6">
                    <li>Wall Street Journal</li>
                    <li>New York Times</li>
                    <li>Washington Post</li>
                    <li>USA Today</li>
                    <li>LA Times</li>
                    <li>San Francisco Chronicle</li>
                    <li>Salon</li>
                    <li>The Atlantic</li>
                    <li>Bloomberg</li>
                    <li>Gawker</li>
                    <li>Deadspin</li>
                </ul>
                <ul class="reslist col-xs-6">
                    <li>Buzzfeed</li>
                    <li>Elite Daily</li>
                    <li>Mashable</li>
                    <li>The Guardian</li>
                    <li>NBC</li>
                    <li>CNN</li>
                    <li>CBS</li>
                    <li>BBC</li>
                    <li>ESPN</li>
                    <li>FOX</li>
                    <p>Many Others...</p>
                </ul>
                <hr>
            </div>
            <div class="other">
                <h3>TV Coverage:</h3>
                <ul class="reslist col-xs-6">
                    <li>Good Morning America</li>
                    <li>SportsCenter</li>
                </ul>
                <ul class="reslist col-xs-6">
                    <li>Fox Sports</li>
                    <li>CBS Sports</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div id='home-jumbo' class="jumbotron">
        <div id="links" class="text-center">
            <h2 id="linksintro">Connect with me:</h2>
            <a class="col-xs-6 col-md-3" href={{{'mailto:andrewpomo815@gmail.com'}}}><i class="fa fa-envelope-square fa-4" aria-hidden="true"></i></a>
            <a class="col-xs-6 col-md-3" href="https://www.linkedin.com/in/andrewpomo"><i class="fa fa-linkedin-square fa-4" aria-hidden="true"></i></a>
            <a class="col-xs-6 col-md-3" href="https://github.com/AndrewPomo"><i class="fa fa-github fa-4" aria-hidden="true"></i></a>
            <a class="col-xs-6 col-md-3" href="https://angel.co/andrew-powell-morse"><i class="fa fa-angellist fa-4" aria-hidden="true"></i></a>
        </div>
    </div>
</div>
@stop