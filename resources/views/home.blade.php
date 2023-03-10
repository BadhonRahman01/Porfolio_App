<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio | Home </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link rel="stylesheet" href={{ asset('css/screen2.css') }}>
    <link rel="stylesheet" href={{ asset('css/screen3.css') }}>
</head>

<body style="background-color:#99ddff">

    <nav class="nav" id="navbar_top">
        <div class="container">
            <h1 class="logo"><img src="{{ URL::asset('/images/badhonlogo.png') }}" alt="Badhon_Rahman" height="60">
            </h1>
            <ul id="menulist">
                <li style="padding: 0 30px;"><a href="#" class="current" id="a1">Home</a></li>
                <li style="padding: 0 30px;"><a href="#" id="a2">Services</a></li>
                <li style="padding: 0 30px;"><a href="#" id="a3">About</a></li>
                <li style="padding: 0 30px;"><a href="#" id="a4">Portfolio</a></li>
                <li style="padding: 0 30px;" id="lit"><a href="#" id="a5">Testimonials</a></li>
                <li style="padding: 0 30px;"><a href="#" id="a6">Blog</a></li>
                <li style="padding: 0 30px;"><a href="#" id="a7"><button class="contact-btn" style="font-size:1.0em;">
                            Contact </button></a></li>
            </ul>
            <div class="mobile-logo">
                <img src="{{ URL::asset('/images/menu.png') }}" id="menuimg" height="30" onclick="togglemenu()">
            </div>
        </div>
    </nav>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="divone" id="1">
        <div class="divone-social">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a class="facebook" href="https://www.facebook.com/rahman.badhan/"><i
                                class="fa fa-facebook"></i></a></li>
                    <li><a class="github" href="https://github.com/BadhonRahman01"><i class="fa fa-github"></i></a></li>
                    <li><a class="linkedin" href="https://www.linkedin.com/in/badhon-rahman/"><i
                                class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="w3-center w3-animate-left">
            <div class="divone-left">
                <div style="position: absolute;top: 200px;left: 25px;width: 700px;height: 450px; text-align:left">
                    <h2 >Hello, I Am
                    </h2>
                    <h1 class="typewrite"
                        data-period="2000" data-type='[ "Badhon Rahman"]'>
                        <span class="wrap"></span>
                    </h1>

                    <p>
                        A Software Engineer. I work with: PHP, Laravel, JavaScript, MySQL.</p>
                       <button class="contact-btn" style="font-size:1.2em;margin: 30px; width: 170px;height: 55px;" onclick="hireme()" id="cbtnhm"> Hire
                        Me! </button>
                    <a href="#4" >See My Works</a>
                </div>
            </div>
        </div>
        <div class="w3-center w3-animate-right">
            <div class="divone-right">
                <div class="w3-center w3-animate-bottom">
                    <div class="float">
                        <img src="{{ URL::asset('/images/y1.png') }}" height="700" id="badhon">
                    </div>
                    <div class="cup" id="cup1">
                        <div class="class" style="display: flex">
                            <figure>
                                <img src="{{ URL::asset('/images/trophy.png') }}" height="30px">
                            </figure>

                            <div class="cup-title">
                                <p style="font-size:1.2em;">Best Design<br>
                                    Award.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="admin text-center" id="cus1">
                        <figure>
                            <img src="{{ URL::asset('/images/cus.png') }}" height="30px">
                        </figure>
                        <div class="admin-title d-inline-block ml-0">
                            <strong>4k+</strong><br>
                            <span class="d-block">Happy<br>
                                Customers</span>
                        </div>
                    </div>
                    <div class="hcfloat">
                        <div class="hc1">
                            <img src="{{ URL::asset('/images/hc.png') }}" height="80px">
                        </div>
                    </div>
                    <div class="hcfloat">
                        <div class="tri1">
                            <img src="{{ URL::asset('/images/tri.png') }}" height="80px">
                        </div>
                    </div>
                </div>

                <div class="cursor">
                    <div class="cursor--small"></div>
                    <div class="cursor--large"></div>
                    <div class="cursor--text">
                        <div class="text"></div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </div>

    <div class="divtwo" id="2">
        <div class="div2in" >
            <h3>
                My Expertise</h3>
            <h1>
                Provide Wide Range of<br>
                Digital Services
            </h1>
            <div class="exp">
                <div class="service-inner-con position-relative">

                    <div class="service-box">
                        <div class="row">
                            <div class="hvr-rotate">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-box-item">
                                        <figure class="mb-0">
                                            <img src="{{ URL::asset('/images/ui.png') }}" alt="service-icon"
                                                class="img-fluid" height="60px">
                                        </figure>
                                        <div class="service-box-item-content">
                                            <h4>Ui/Ux Design</h4>
                                            <p>UI design is all about creating intuitive, aesthetically-pleasing,
                                                interactive interfaces.
                                            </p>
                                            <div class="hvr-underline-from-left">
                                                <a href="#" data-toggle="modal" data-target="#Ui-Design"
                                                    id="ux">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hvr-rotate">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-box-item">
                                        <figure class="mb-0">
                                            <img src="{{ URL::asset('/images/ux.png') }}" alt="service-icon"
                                                class="img-fluid" height="60px">
                                        </figure>
                                        <div class="service-box-item-content">
                                            <h4>Web Design</h4>
                                            <p>Web development is the work involved in developing a website for the
                                                Internet or an intranet.
                                            </p>
                                            <a href="#" data-toggle="modal" data-target="#web-design" id="wdes">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="hvr-rotate">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-box-item">
                                        <figure class="mb-0">
                                            <img src="{{ URL::asset('/images/coding.png') }}" alt="service-icon"
                                                class="img-fluid" height="60px">
                                        </figure>
                                        <div class="service-box-item-content">
                                            <h4>Web Development</h4>
                                            <p>Web development is the work involved in developing a website for the
                                                Internet or an intranet.
                                            </p>
                                            <a href="#" data-toggle="modal" data-target="#web-development" id="wdev">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hvr-rotate">
                                <div class="col-lg-6 col-md-6">
                                    <div class="service-box-item mb-0">
                                        <figure class="mb-0">
                                            <img src="{{ URL::asset('/images/mobile-app.png') }}" alt="service-icon"
                                                class="img-fluid" height="60px">
                                        </figure>
                                        <div class="service-box-item-content">
                                            <h4>App Development</h4>
                                            <p>Web development is the work involved in developing a website for the
                                                Internet or an intranet.
                                            </p>
                                            <a href="#" data-toggle="modal" data-target="#app-development" id="adev">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hcfloat">
                    <div class="hc2">
                        <img src="{{ URL::asset('/images/hc.png') }}" height="80px">
                    </div>
                </div>
                <div class="hcfloat">
                    <div class="tri2">
                        <img src="{{ URL::asset('/images/tri.png') }}" height="80px">
                    </div>
                </div>
                <div class="float">
                    <div class="bigc2">
                        <img src="{{ URL::asset('/images/bigc.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="divthree" id="3">
        <div class="w3-center w3-animate-left">
            <div class="divthree-left" >
                <div class="container" style="width: 680px" id="d3c">
                    <div class="row">
                        <div class="col-lg-6 order-lg-0 order-2">
                            <div class="leftcard">
                                <div class="single-chart">
                                    <svg viewBox="0 0 36 36" class="circular-chart orange">
                                      <path class="circle-bg"
                                        d="M18 2.0845
                                          a 15.9155 15.9155 0 0 1 0 31.831
                                          a 15.9155 15.9155 0 0 1 0 -31.831"
                                      />
                                      <path class="circle"
                                        stroke-dasharray="75, 100"
                                        d="M18 2.0845
                                          a 15.9155 15.9155 0 0 1 0 31.831
                                          a 15.9155 15.9155 0 0 1 0 -31.831"
                                      />
                                      
                                      <text x="18" y="20.35" class="percentageO" id="value1"></text>
                                     
                                    </svg>
                                  </div>
                                <h3
                                    style="font-size:1.4em;font-family: 'Trebuchet MS', sans-serif;text-align:center;font-weight: 600;padding-top:10px;">
                                    Graphics Design</h3>
                            </div>
                            <div class="leftcard">
                                <div class="single-chart">
                                    <svg viewBox="0 0 36 36" class="circular-chart blue">
                                      <path class="circle-bg"
                                        d="M18 2.0845
                                          a 15.9155 15.9155 0 0 1 0 31.831
                                          a 15.9155 15.9155 0 0 1 0 -31.831"
                                      />
                                      <path class="circle"
                                        stroke-dasharray="85, 100"
                                        d="M18 2.0845
                                          a 15.9155 15.9155 0 0 1 0 31.831
                                          a 15.9155 15.9155 0 0 1 0 -31.831"
                                      />
                                      
                                      <text x="18" y="20.35" class="percentageB" id="value2"></text>
                                     
                                    </svg>
                                  </div>
                                <h3
                                    style="font-size:1.4em;font-family: 'Trebuchet MS', sans-serif;text-align:center;font-weight: 600;">
                                    Branding Design</h3>

                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-0 order-2">
                            <div class="rightcard" id="s3rc1">
                                <div class="single-chart">
                                    <svg viewBox="0 0 36 36" class="circular-chart dark">
                                      <path class="circle-bg"
                                        d="M18 2.0845
                                          a 15.9155 15.9155 0 0 1 0 31.831
                                          a 15.9155 15.9155 0 0 1 0 -31.831"
                                      />
                                      <path class="circle"
                                        stroke-dasharray="80, 100"
                                        d="M18 2.0845
                                          a 15.9155 15.9155 0 0 1 0 31.831
                                          a 15.9155 15.9155 0 0 1 0 -31.831"
                                      />
                                      
                                      <text x="18" y="20.35" class="percentageD" id="value4"></text>
                                     
                                    </svg>
                                  </div>
                                <h3
                                    style="font-size:1.4em;font-family: 'Trebuchet MS', sans-serif;text-align:center;font-weight: 600;">
                                    Web Designing</h3>

                            </div>
                            <div class="rightcard">
                                <div class="single-chart">
                                    <svg viewBox="0 0 36 36" class="circular-chart purple">
                                      <path class="circle-bg"
                                        d="M18 2.0845
                                          a 15.9155 15.9155 0 0 1 0 31.831
                                          a 15.9155 15.9155 0 0 1 0 -31.831"
                                      />
                                      <path class="circle"
                                        stroke-dasharray="95, 100"
                                        d="M18 2.0845
                                          a 15.9155 15.9155 0 0 1 0 31.831
                                          a 15.9155 15.9155 0 0 1 0 -31.831"
                                      />
                                      
                                      <text x="18" y="20.35" class="percentageP" id="value3"></text>
                                     
                                    </svg>
                                  </div>
                                <h3
                                    style="font-size:1.4em;font-family: 'Trebuchet MS', sans-serif;text-align:center;font-weight: 600;">
                                    Web Development</h3>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="hcfloat">
                    <div class="tri3">
                        <img src="{{ URL::asset('/images/tri.png') }}" height="80px">
                    </div>
                </div>
            </div>
        </div>
        <div class="w3-center w3-animate-right">
            <div class="divthree-right" >
                <h3>
                    My Skills</h3>
                <h1>
                    Beautiful & Unique <br> Digital Experiences
                </h1>
                <p style="padding-bottom:15px;">Nostrum exercitationem ullam corporis suscipit laborioa
                    nisi ut aliquid exrea commodi consequatur magni dolores
                    aos qui ratione voluptatem nesciunt.
                </p>
                <p style="padding-bottom:10px;">Quia voluptas sit aspernatur aut odit aut fugit, sed ruiano
                    consequntar magni dolores.
                </p>
                <a role="button" href="{{ URL::asset('/cv/cv.pdf') }}" download="Badhon_Rahman_CV">
                    <button class="contact-btn"
                        style="font-size:1.2em;margin-top:15px; width: 170px;height: 55px;float:left">
                        Download CV</button>
                </a>
                <div class="hcfloat">
                    <div class="hc3">
                        <img src="{{ URL::asset('/images/hcr.png') }}" height="80px">
                    </div>
                </div>
                <div class="float">
                    <div class="bigc3">
                        <img src="{{ URL::asset('/images/bigcr.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="divfour" id="4">
        <h3>
            Creative Works</h3>
        <h1>
            Check My Portfolio
        </h1>
        <div id="divfournav" class="text-center">
            <button class="current" id="all"> All </button>
            <button class="" id="products">Products </button>
            <button class="" id="web" >Web App</button>
            <button class="" id="inter"> Inetraction </button>
            <button class="" id="brand">Brand Identity</button>
        </div>
    </div>

    <div class="divfour1">
        <div class="w3-center w3-animate-bottom">
            <div class="divfour1left">
                <div class="container" style="margin-top: 25px">
                    <div class="row" style="width:100%;">
                        <div class="col-lg-6" style="width:700px;float:left;">
                            <div class="pleftcard" id="caud">
                                <div style="margin-top: 220px;">
                                    <h3>
                                        Application UI Design</h3>
                                    <p>Dolar
                                        repellendus temporibus...</p>
                                </div>
                                <button id="aud"><img src="{{ URL::asset('/images/arrowr.png') }}"> </button>
                            </div>
                            <div class="pleftcardb1" style="margin-right: 20px;background: url(../images/p3.png);background-size: cover;" id="cmud">
                                <div style="margin-top: 220px;">
                                    <h3>
                                        Mobile UI Design</h3>
                                    <p>Dolar
                                        repellendus temporibus...</p>
                                </div>
                                <button id="mud"><img src="{{ URL::asset('/images/arrowr.png') }}"> </button>
                            </div>
                            <div class="pleftcardb1" style="margin-left: 10px;background: url(../images/p4.png);background-size: cover;" id="cbud">
                                <div style="margin-top: 220px;">
                                    <h3>
                                        Businesscard UI Design</h3>
                                    <p>Dolar
                                        repellendus temporibus...</p>
                                    <button id="bud"><img src="{{ URL::asset('/images/arrowr.png') }}"> </button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <div class="divfour1right">
                <div class="col-lg-6 " style="margin-left: 25px;margin-top: 20px;">
                    <div class="prightcard" style="background: url(../images/p2.png)" id="cfud">
                        <div style="margin-top: 220px;">
                            <h3>
                                Furni furniture UI Design</h3>
                            <p>Dolar
                                repellendus temporibus...</p>
                            <button id="fud"><img src="{{ URL::asset('/images/arrowr.png') }}"> </button>
                        </div>

                    </div>
                    <div class="prightcard" style="background: url(../images/p5.png)" id="crud">
                        <div style="margin-top: 220px;">
                            <h3>
                                Real estate UI Design</h3>
                            <p>Dolar
                                repellendus temporibus...</p>
                            <button id="rud"><img src="{{ URL::asset('/images/arrowr.png') }}"> </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="divfour2" id="5">
        <div class="w3-center w3-animate-left">
            <div class="divfour2left">
                <img src="{{ URL::asset('/images/people.png') }}" height="400px">

                <div class="hcfloat">
                    <div class="hc42l">
                        <img src="{{ URL::asset('/images/hc.png') }}" height="80px">
                    </div>
                </div>
                <div class="float">
                    <div class="bigc42l">
                        <img src="{{ URL::asset('/images/bigc.png') }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="w3-center w3-animate-right">
            <div class="divfour2right" >
                <div class="carousel">
                    <div class="sliders">
                        <div class="slide active">
                            <h3>
                            Testimonials</h3>
                        <h1>
                            Happy Clients Feedback
                        </h1>
                        <img src="{{ URL::asset('/images/comma.png') }}" style="margin-left: -500px;">
                        <p>
                            Quisruam est, qui dolorem ipsum quia dolor sit amet, consecteaur
                            aeci velit, sed quia non numquam eius modi tempora incidunt ut lao
                            magnam aliquam quaerat voluptatem reprehenderit in voluptate
                            cillum dolore eu fugiat nulla pariatur maxime...
                        </p>
                        <h4>
                            Kevin Andrew</h4>
                        <p>
                            CEO of the company
                        </p>
                        </div>
                        <div class="slide">
                            <h3>
                            Testimonials 2 </h3>
                        <h1>
                            Happy Clients Feedback 
                        </h1>
                        <img src="{{ URL::asset('/images/comma.png') }}" style="margin-left: -500px;">
                        <p>
                            Quisruam est, qui dolorem ipsum quia dolor sit amet, consecteaur
                            aeci velit, sed quia non numquam eius modi tempora incidunt ut lao
                            magnam aliquam quaerat voluptatem reprehenderit in voluptate
                            cillum dolore eu fugiat nulla pariatur maxime...
                        </p>
                        <h4>
                            Kevin Andrew</h4>
                        <p>
                            CEO of the company
                        </p>
                        </div>
                        <div class="slide">
                            <h3>
                            Testimonials 3</h3>
                        <h1>
                            Happy Clients Feedback 
                        </h1>
                        <img src="{{ URL::asset('/images/comma.png') }}" style="margin-left: -500px;">
                        <p>
                            Quisruam est, qui dolorem ipsum quia dolor sit amet, consecteaur
                            aeci velit, sed quia non numquam eius modi tempora incidunt ut lao
                            magnam aliquam quaerat voluptatem reprehenderit in voluptate
                            cillum dolore eu fugiat nulla pariatur maxime...
                        </p>
                        <h4>
                            Kevin Andrew</h4>
                        <p>
                            CEO of the company
                        </p>
                        </div>
                    
                    </div>
                </div>
<div class="divfour2rightbottom">
    <button id="carousel__controls__prev" class="divfour2rightbtnleft"><img src="{{ URL::asset('/images/arrowl.png') }}"> </button>

    <button class="divfour2rightbtnright" id="carousel__controls__next"><img src="{{ URL::asset('/images/arrowr.png') }}"> </button>

</div>
               
                </div>
        
            </div>
        </div>

    </div>

    <div class="divfive" id="6">
        <h3>
            Latest News</h3>
        <h1>
            Blog & Articles
        </h1>

        <div class="row">
            <div class="col-lg-4" style="margin-left: 80px" id="blog1">
                <div class="blog-box-item">
                    <div class="blog-img">
                        <a href="#" data-toggle="modal" data-target="#blog-model-1">
                            <figure class="mb-0">
                                <img src="{{ URL::asset('/images/b1.png') }}">
                            </figure>
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-auteher-title">
                            <span style="font-size:1.2em;color:#7f51c9;text-align:left;">By David William</span>
                            <span class="" style="font-size:1.2em;color:grey;float:right;">Mar 8, 2022</span>
                        </div>
                        <a href="#" data-toggle="modal" data-target="#blog-model-1" >
                            <h4>Quis autem vea eum <br>
                                iure reprehenderit
                            </h4>
                        </a>
                        <p>Dolor repellendus temporibus autem
                            quibusdam officiis debitis rerum nece
                            aibus minima veniam.
                        </p>
                        <a href="#" data-toggle="modal" data-target="#blog-model-1" id="bm1">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="margin-left: -80px" >
                <div class="blog-box-item" id="blog2">
                    <div class="blog-img">
                        <a href="#" data-toggle="modal" data-target="#blog-model-1" >
                            <figure class="mb-0">
                                <img src="{{ URL::asset('/images/b2.png') }}">
                            </figure>
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-auteher-title">
                            <span style="font-size:1.2em;color:#7f51c9;text-align:left;">By John Doe</span>
                            <span class="" style="font-size:1.2em;color:grey;float:right;">Mar 9, 2022</span>
                        </div>
                        <a href="#" data-toggle="modal" data-target="#blog-model-2">
                            <h4>Reprehenderit in vouta <br>
                                velit esse cillum
                            </h4>
                        </a>
                        <p>Dolor repellendus temporibus autem
                            quibusdam officiis debitis rerum nece
                            aibus minima veniam.
                        </p>
                        <a href="#" data-toggle="modal" data-target="#blog-model-2" id="bm2">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="margin-left: -80px">
                <div class="blog-box-item" id="blog3">
                    <div class="blog-img">
                        <a href="#" data-toggle="modal" data-target="#blog-model-3" >
                            <figure class="mb-0">
                                <img src="{{ URL::asset('/images/b3.png') }}">
                            </figure>
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-auteher-title">
                            <span style="font-size:1.2em;color:#7f51c9;text-align:left;">By Elina Parker</span>
                            <span class="" style="font-size:1.2em;color:grey;float:right;">Mar 11, 2022</span>
                        </div>
                        <a href="#" data-toggle="modal" data-target="#blog-model-3" >
                            <h4>Soluta nobis ose aligen <br>
                                optio cumue
                            </h4>
                        </a>
                        <p>Dolor repellendus temporibus autem
                            quibusdam officiis debitis rerum nece
                            aibus minima veniam.
                        </p>
                        
                        <a href="#" data-toggle="modal" data-target="#blog-model-3" id="bm3">Read More</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="hcfloat">
            <div class="tri5">
                <img src="{{ URL::asset('/images/tri.png') }}" height="80px">
            </div>
        </div>
        <div class="hcfloat">
            <div class="hc5">
                <img src="{{ URL::asset('/images/hcr.png') }}" height="80px">
            </div>
        </div>
        <div class="float">
            <div class="bigc5">
                <img src="{{ URL::asset('/images/bigcr.png') }}">
            </div>
        </div>
    </div>

    <section class="divsix" id="7">
        <h3>
            Get in Touch</h3>
        <h1>
            Any Questions? <br>
            Feel Free to Contact
        </h1>
        <div class="w3-center w3-animate-left">
            <div class="col-lg-4 order-lg-0 order-2">
                <div class="contact-information">
                    <ul class="list-unstyled" style="text-align:left">
                        <li>
                            <figure class="mb-0 d-flex align-items-center justify-content-center">
                                <img src="{{ URL::asset('/images/location.png') }}"
                                    style="margin-left: 10px;margin-top: 10px;">
                            </figure>
                            <div class="contact-information-content">
                                <h5>Address:</h5>
                                <p class="mb-0">Plot: 10, Road: 12, Block: F,
                                    Niketon, Gulshan-1, Dhaka.
                                </p>
                            </div>
                        </li>
                        <li>
                            <figure class="mb-0 d-flex align-items-center justify-content-center">
                                <img src="{{ URL::asset('/images/mail.png') }}"
                                    style="margin-left: 10px;margin-top: 10px;">
                            </figure>
                            <div class="contact-information-content">
                                <h5>Email:</h5>
                                <p class="mb-0">badhon.rahman184@gmail.com</p>
                                <p class="mb-0">badhon.rahman418@gmail.com</p>
                            </div>
                        </li>
                        <li class="mb-0">
                            <figure class="mb-0 d-flex align-items-center justify-content-center">
                                <img src="{{ URL::asset('/images/phone.png') }}"
                                    style="margin-left: 10px;margin-top: 10px;">
                            </figure>
                            <div class="contact-information-content">
                                <h5>Phone:</h5>
                                <p class="mb-0">+8801950498055</p>
                                <p class="mb-0">+8801868007530</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="w3-center w3-animate-right">
            <div class="col-lg-8">
                <form id="contactpage" action="{{ route('queries.store') }}" method="POST" class="contact-form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-0">
                                <input type="text" placeholder="Name" name="name" id="name"
                                    autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-0">
                                <input type="email" id="emailHelp" name="email" placeholder="Email"
                                    autocomplete="off" required>
                                <small class="form-text text-muted"></small>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-0">
                                <input type="tel" placeholder="Phone" name="phone" id="phone" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-0">
                                <input type="text" name="subject" placeholder="Subject" id="subject">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class=" form-group mb-0">
                                <textarea placeholder="Message" rows="3" name="message" id="message"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="submit" class="contact-btn"
                        style="width: 180px;font-weight:700;font-size:1.4em;float:left;">Submit</button>
                </form>


            </div>
        </div>

    </section>
    <button class="upbtn" id="upbtn" onclick="topFunction()"><img src="{{ URL::asset('/images/up.png') }}">
    </button>

    <section class="divfooter">
        <h1 class="logo" style="text-align: center"><img src="{{ URL::asset('/images/badhonlogo2.png') }}"
                alt="Badhon_Rahman" height="60">
        </h1>
        <ul>
            <li style="padding: 0 15px; border-right:2px solid #ff8400;"><a href="#1">Home</a></li>
            <li style="padding: 0 15px; border-right:2px solid #ff8400;"><a href="#2">Services</a></li>
            <li style="padding: 0 15px; border-right:2px solid #ff8400;"><a href="#3">About</a></li>
            <li style="padding: 0 15px; border-right:2px solid #ff8400;"><a href="#4">Portfolio</a></li>
            <li style="padding: 0 15px; border-right:2px solid #ff8400;"><a href="#5">Testimonials</a></li>
            <li style="padding: 0 15px; "><a href="#6">Blog</a></li>
        </ul>

        <div style="margin: 20px;text-align: center;">
            <ul class="footer-icons">
                <li><a class="facebook" href="https://www.facebook.com/rahman.badhan/"><i
                            class="fa fa-facebook"></i></a></li>
                <li><a class="github" href="https://github.com/BadhonRahman01"><i class="fa fa-github"></i></a></li>
                <li><a class="linkedin" href="https://www.linkedin.com/in/badhon-rahman/"><i
                            class="fa fa-linkedin"></i></a></li>
            </ul>

        </div>
        <div style="margin-top:60px;">
            <hr id="footerhr">
        </div>

        <div style="text-align: center;margin:40px;">
            <p class="mb-0" style="color: grey">Copyright &#169 BadhonRahman.com 2023 | All Rights Reserved.</p>
        </div>
    </section>
    {{-- page contents ends here --}}
    {{-- modals start --}}
    <div id="uxmodal" class="modal">
        <div class="modal-content">
            <div class="modal-close">
                <p><strong>X</strong></p>
            </div>
            <img src="{{ URL::asset('/images/ux1.jpg') }}" alt="UI/UX" height="350" width="100%">
            <div class="modal-body">
                <h3
                    style="font-size:1.4em;font-family: 'Trebuchet MS', sans-serif;text-align:left;font-weight: bold;color:#290066">
                    UI/UX Design</h3>
                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>

                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br> 
                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br>
                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br>   
                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.</p>
            </div>

        </div>

    </div>

    <div id="wdesmodal" class="modal">
        <div class="modal-content">
            <div class="modal-close">
                <p><strong>X</strong></p>
            </div>
            <img src="{{ URL::asset('/images/wd.png') }}" alt="UI/UX" height="350" width="100%">
            <div class="modal-body">
                <h3
                    style="font-size:1.4em;font-family: 'Trebuchet MS', sans-serif;text-align:left;font-weight: bold;color:#290066">
                    Web Design</h3>
                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>

                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br> 
                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br>
                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br>   
                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.</p>
            </div>

        </div>

    </div>

    <div id="wdevmodal" class="modal">
        <div class="modal-content">
            <div class="modal-close">
                <p><strong>X</strong></p>
            </div>
            <img src="{{ URL::asset('/images/wdev.jpg') }}" alt="UI/UX" height="350" width="100%">
            <div class="modal-body">
                <h3
                    style="font-size:1.4em;font-family: 'Trebuchet MS', sans-serif;text-align:left;font-weight: bold;color:#290066">
                    Web Development</h3>
                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>

                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br> 
                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br>
                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br>   
                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.</p>
            </div>

        </div>

    </div>

    <div id="adevmodal" class="modal">
        <div class="modal-content">
            <div class="modal-close">
                <p><strong>X</strong></p>
            </div>
            <img src="{{ URL::asset('/images/ad.jpeg') }}" alt="UI/UX" height="350" width="100%">
            <div class="modal-body">
                <h3
                    style="font-size:1.4em;font-family: 'Trebuchet MS', sans-serif;text-align:left;font-weight: bold;color:#290066">
                    App Development</h3>
                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>

                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br> 
                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br>
                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br>   
                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.</p>
            </div>

        </div>

    </div>

    <div id="audmodal" class="modal">
        <div class="modal-content">
            <div class="modal-close">
                <p><strong>X</strong></p>
            </div>
            <img src="{{ URL::asset('/images/pm1.png') }}" alt="UI/UX" height="400" width="100%">
            <div class="modal-body">
                <h3
                    style="font-size:1.4em;font-family: 'Trebuchet MS', sans-serif;text-align:left;font-weight: bold;color:#290066">
                    Application UI Design</h3>
                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>

                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br> 
                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br>
                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br>   
                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.</p>
            </div>

        </div>

    </div>

    <div id="mudmodal" class="modal">
        <div class="modal-content">
            <div class="modal-close">
                <p><strong>X</strong></p>
            </div>
            <img src="{{ URL::asset('/images/pm2.png') }}" alt="UI/UX" height="400" width="100%">
            <div class="modal-body">
                <h3
                    style="font-size:1.4em;font-family: 'Trebuchet MS', sans-serif;text-align:left;font-weight: bold;color:#290066">
                    Mobile UI Design</h3>
                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>

                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br> 
                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br>
                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br>   
                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.</p>
            </div>

        </div>

    </div>


    <div id="budmodal" class="modal">
        <div class="modal-content">
            <div class="modal-close">
                <p><strong>X</strong></p>
            </div>
            <img src="{{ URL::asset('/images/pm4.png') }}" alt="UI/UX" height="400" width="100%">
            <div class="modal-body">
                <h3
                    style="font-size:1.4em;font-family: 'Trebuchet MS', sans-serif;text-align:left;font-weight: bold;color:#290066">
                    Businesscard UI Design</h3>
                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>

                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br> 
                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br>
                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br>   
                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.</p>
            </div>

        </div>

    </div>

    <div id="fudmodal" class="modal">
        <div class="modal-content">
            <div class="modal-close">
                <p><strong>X</strong></p>
            </div>
            <img src="{{ URL::asset('/images/pm3.png') }}" alt="UI/UX" height="400" width="100%">
            <div class="modal-body">
                <h3
                    style="font-size:1.4em;font-family: 'Trebuchet MS', sans-serif;text-align:left;font-weight: bold;color:#290066">
                    Furni furniture UI Design</h3>
                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>

                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br> 
                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br>
                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br>   
                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.</p>
            </div>

        </div>

    </div>

    <div id="rudmodal" class="modal">
        <div class="modal-content">
            <div class="modal-close">
                <p><strong>X</strong></p>
            </div>
            <img src="{{ URL::asset('/images/pm5.png') }}" alt="UI/UX" height="400" width="100%">
            <div class="modal-body">
                <h3
                    style="font-size:1.4em;font-family: 'Trebuchet MS', sans-serif;text-align:left;font-weight: bold;color:#290066">
                    Real estate UI Design</h3>
                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>

                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br> 
                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br>
                <p style="text-align: left;font-size: 16px;font-family: 'Lato', sans-serif;color:rgb(52, 1, 97);font-weight:300"><img src="{{ URL::asset('/images/check.png') }}" alt="check" height="20px" style="margin-right:8px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry </p> <br>   
                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book.</p>
            </div>

        </div>

    </div>

    <div id="bm1modal" class="modal">
        <div class="modal-content">
            <div class="modal-close">
                <p><strong>X</strong></p>
            </div>
            <img src="{{ URL::asset('/images/bm1.png') }}" alt="UI/UX" height="400" width="100%">
            <div class="modal-body">
                <div class="blog-auteher-title">
                    <span style="font-size:1.2em;color:#7f51c9;text-align:left;">By David William</span>
                    <span class="" style="font-size:1.2em;color:grey;float:right;">Mar 8, 2022</span>
                </div>
                    <h4 style="font-size:1.7em;font-family: 'Trebuchet MS', sans-serif;text-align:left;font-weight: bold;color:#3d137c">Quis autem vea eum iure reprehenderit
                    </h4>
                
                    <div style="margin: 20px;text-align: left;">
                        <ul class="footer-icons">
                            <li ><a class="facebook" href="https://www.facebook.com/rahman.badhan/" ><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a class="github" href="https://github.com/BadhonRahman01"><i class="fa fa-github"></i></a></li>
                            <li><a class="linkedin" href="https://www.linkedin.com/in/badhon-rahman/"><i
                                        class="fa fa-linkedin"></i></a></li>
                        </ul>
            
                    </div>

                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
                    <h4 style="font-size:1.7em;font-family: 'Trebuchet MS', sans-serif;text-align:left;font-weight: bold;color:#3d137c">LEAVE A COMMENT
                    </h4>

                    <div class="blog-form">
                        <form id="contactpage" action="{{ route('queries.store') }}" method="POST" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-0">
                                        <input type="text" placeholder="Name" name="name" id="name"
                                            autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-0">
                                        <input type="email" id="emailHelp" name="email" placeholder="Email"
                                            autocomplete="off" required>
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-0">
                                        <input type="tel" placeholder="Phone" name="phone" id="phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-0">
                                        <input type="text" name="subject" placeholder="Subject" id="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class=" form-group mb-0">
                                        <textarea placeholder="Message" rows="3" name="message" id="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="submit" class="contact-btn"
                                style="width: 180px;font-weight:700;font-size:1.4em;float:left;">Submit</button>
                        </form>
                    </div>
        
        
                    
            </div>

        </div>

    </div>

    <div id="bm2modal" class="modal">
        <div class="modal-content">
            <div class="modal-close">
                <p><strong>X</strong></p>
            </div>
            <img src="{{ URL::asset('/images/bm2.png') }}" alt="UI/UX" height="400" width="100%">
            <div class="modal-body">
                <div class="blog-auteher-title">
                    <span style="font-size:1.2em;color:#7f51c9;text-align:left;">By John Doe</span>
                    <span class="" style="font-size:1.2em;color:grey;float:right;">Mar 9, 2022</span>
                </div>
                    <h4 style="font-size:1.7em;font-family: 'Trebuchet MS', sans-serif;text-align:left;font-weight: bold;color:#3d137c">Reprehenderit in vouta velit esse cillum
                    </h4>
                
                    <div style="margin: 20px;text-align: left;">
                        <ul class="footer-icons">
                            <li ><a class="facebook" href="https://www.facebook.com/rahman.badhan/" ><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a class="github" href="https://github.com/BadhonRahman01"><i class="fa fa-github"></i></a></li>
                            <li><a class="linkedin" href="https://www.linkedin.com/in/badhon-rahman/"><i
                                        class="fa fa-linkedin"></i></a></li>
                        </ul>
            
                    </div>

                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
                    <h4 style="font-size:1.7em;font-family: 'Trebuchet MS', sans-serif;text-align:left;font-weight: bold;color:#3d137c">LEAVE A COMMENT
                    </h4>

                    <div class="blog-form">
                        <form id="contactpage" action="{{ route('queries.store') }}" method="POST" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-0">
                                        <input type="text" placeholder="Name" name="name" id="name"
                                            autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-0">
                                        <input type="email" id="emailHelp" name="email" placeholder="Email"
                                            autocomplete="off" required>
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-0">
                                        <input type="tel" placeholder="Phone" name="phone" id="phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-0">
                                        <input type="text" name="subject" placeholder="Subject" id="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class=" form-group mb-0">
                                        <textarea placeholder="Message" rows="3" name="message" id="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="submit" class="contact-btn"
                                style="width: 180px;font-weight:700;font-size:1.4em;float:left;">Submit</button>
                        </form>
                    </div>
        
        
                    
            </div>

        </div>

    </div>

    <div id="bm3modal" class="modal">
        <div class="modal-content">
            <div class="modal-close">
                <p><strong>X</strong></p>
            </div>
            <img src="{{ URL::asset('/images/b3.png') }}" alt="UI/UX" height="400" width="100%">
            <div class="modal-body">
                <div class="blog-auteher-title">
                    <span style="font-size:1.2em;color:#7f51c9;text-align:left;">By Elina Parker</span>
                    <span class="" style="font-size:1.2em;color:grey;float:right;">Mar 11, 2022</span>
                </div>
                    <h4 style="font-size:1.7em;font-family: 'Trebuchet MS', sans-serif;text-align:left;font-weight: bold;color:#3d137c">Soluta nobis ose aligen optio cumue
                    </h4>
                
                    <div style="margin: 20px;text-align: left;">
                        <ul class="footer-icons">
                            <li ><a class="facebook" href="https://www.facebook.com/rahman.badhan/" ><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a class="github" href="https://github.com/BadhonRahman01"><i class="fa fa-github"></i></a></li>
                            <li><a class="linkedin" href="https://www.linkedin.com/in/badhon-rahman/"><i
                                        class="fa fa-linkedin"></i></a></li>
                        </ul>
            
                    </div>

                <p style="text-align: left;font-size: 18px;font-family: 'Lato', sans-serif;color:grey">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
                    <h4 style="font-size:1.7em;font-family: 'Trebuchet MS', sans-serif;text-align:left;font-weight: bold;color:#3d137c">LEAVE A COMMENT
                    </h4>

                    <div class="blog-form">
                        <form id="contactpage" action="{{ route('queries.store') }}" method="POST" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-0">
                                        <input type="text" placeholder="Name" name="name" id="name"
                                            autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-0">
                                        <input type="email" id="emailHelp" name="email" placeholder="Email"
                                            autocomplete="off" required>
                                        <small class="form-text text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-0">
                                        <input type="tel" placeholder="Phone" name="phone" id="phone" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group mb-0">
                                        <input type="text" name="subject" placeholder="Subject" id="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class=" form-group mb-0">
                                        <textarea placeholder="Message" rows="3" name="message" id="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="submit" class="contact-btn"
                                style="width: 180px;font-weight:700;font-size:1.4em;float:left;">Submit</button>
                        </form>
                    </div>
        
        
                    
            </div>

        </div>

    </div>


    <script src=" https://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/circletype@2.3.0/dist/circletype.min.js'></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</body>

</html>
