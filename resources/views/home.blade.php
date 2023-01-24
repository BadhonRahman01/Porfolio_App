<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio | Home </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('css/style.css') }}>

</head>

<body style="background-color:#99ddff">
    <nav class="nav">
        <div class="container">
            <h1 class="logo"><img src="{{ URL::asset('/images/badhonlogo.png') }}" alt="Badhon_Rahman" height="60">
            </h1>
            <ul>
                <li style="padding: 0 30px;"><a href="" class="current">Home</a></li>
                <li style="padding: 0 30px;"><a href="">Services</a></li>
                <li style="padding: 0 30px;"><a href="">About</a></li>
                <li style="padding: 0 30px;"><a href="">Portfolio</a></li>
                <li style="padding: 0 30px;"><a href="">Testimonials</a></li>
                <li style="padding: 0 30px;"><a href="">Blog</a></li>
                <li style="padding: 0 30px;"><a href=""><button class="contact-btn" style="font-size:1.0em;">
                            Contact </button></a></li>
            </ul>

        </div>
    </nav>

    <div class="divone">
        <div class="divone-social">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a class="facebook" href="https://www.facebook.com/rahman.badhan/"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="github" href="https://github.com/BadhonRahman01"><i class="fa fa-github"></i></a></li>
                    <li><a class="linkedin" href="https://www.linkedin.com/in/badhon-rahman/"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="w3-center w3-animate-left">
            <div class="divone-left">
                <div style="position: absolute;top: 200px;left: 25px;width: 700px;height: 450px; text-align:left">
                    <h2 style="font-size:3.1em;font-family: 'Josefin Sans', sans-serif; color:#290066;">Hello, I Am
                    </h2>
                    <h1 class="typewrite" style="font-size:4.5em;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:#6600cc;font-weight: bold;" data-period="2000" data-type='[ "Badhon Rahman"]'>
                      <span class="wrap"></span>
                  </h1>

                    <p
                        style="font-size:1.7em;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                        A Software Engineer. I work with: PHP, Laravel, JavaScript, MySQL.</p>
                    <button class="contact-btn" style="font-size:1.2em;margin: 30px; width: 170px;height: 55px;"> Hire
                        Me! </button>
                    <a href="#" class="work" style="font-size:1.4em;">See My Works</a>
                </div>
            </div>
        </div>
        <div class="w3-center w3-animate-right">
            <div class="divone-right">
              <div class="w3-center w3-animate-bottom">
                <div class="float">
                  <img src="{{ URL::asset('/images/anipicpng.png') }}" height="600" >
                </div>
                <div class="cup">
                  <div class="class" style="display: flex">
                    <figure >
                      <img src="{{ URL::asset('/images/trophy.png') }}" alt="cup-img" class="img-fluid" height="30px">
                   </figure>
                   
                  <div class="cup-title">
                    <p style="font-size:1.2em;">Best Design<br>
                       Award.
                    </p>
                 </div>
                  </div>
  
               </div>
               <div class="admin text-center">
                <figure>
                   <img src="{{ URL::asset('/images/cus.png') }}" alt="admin-icon" class="img-fluid" height="30px">
                </figure>
                <div class="admin-title d-inline-block ml-0">
                  <strong>4k+</strong><br>
                   <span class="d-block">Happy<br>
                   Customers</span>
                </div>
             </div>
             <div class="hcfloat">
                <div class="hc">
                  <img src="{{ URL::asset('/images/hc.png') }}" height="80px" >
                  </div>
                </div>
                <div class="hcfloat">
                    <div class="tri">
                      <img src="{{ URL::asset('/images/tri.png') }}" height="80px" >
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
        </div>

        <div class="divtwo" >
            <div class="class" style="padding:120px">
                <h3 style="font-size:1.7em;font-family: 'Josefin Sans', sans-serif; color:#5212b2;text-align:center;font-weight: bold;">My Expertise</h3>
                <h1 class="typewrite" style="font-size:3.5em;font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;color:#3b0472;font-weight: bold;text-align:center">
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
                       <img src="{{ URL::asset('/images/ui.png') }}" alt="service-icon" class="img-fluid" height="60px">
                    </figure>
                    <div class="service-box-item-content">
                       <h4 >Ui/Ux Design</h4>
                       <p>UI design is all about creating intuitive, aesthetically-pleasing, interactive interfaces.
                       </p>
                       <div class="hvr-underline-from-left">
                       <a href="#" data-toggle="modal" data-target="#Ui-Design">Read More</a>
                    </div>
                    </div>
                 </div>
              </div>
            </div>
            <div class="hvr-rotate">
              <div class="col-lg-6 col-md-6">
                 <div class="service-box-item">
                    <figure class="mb-0">
                       <img src="{{ URL::asset('/images/ux.png') }}" alt="service-icon" class="img-fluid" height="60px">
                    </figure>
                    <div class="service-box-item-content">
                       <h4>Web Design</h4>
                       <p>Web development is the work involved in developing a website for the Internet or an intranet.
                       </p>
                       <a href="#" data-toggle="modal" data-target="#web-design">Read More</a>
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
                       <img src="{{ URL::asset('/images/coding.png') }}" alt="service-icon" class="img-fluid" height="60px">
                    </figure>
                    <div class="service-box-item-content">
                       <h4 >Web Development</h4>
                       <p>Web development is the work involved in developing a website for the Internet or an intranet.
                       </p>
                       <a href="#" data-toggle="modal" data-target="#web-development">Read More</a>
                    </div>
                 </div>
              </div>
            </div>
              <div class="hvr-rotate">
              <div class="col-lg-6 col-md-6">
                 <div class="service-box-item mb-0">
                    <figure class="mb-0">
                       <img src="{{ URL::asset('/images/mobile-app.png') }}" alt="service-icon" class="img-fluid" height="60px">
                    </figure>
                    <div class="service-box-item-content">
                       <h4 >App Development</h4>
                       <p>Web development is the work involved in developing a website for the Internet or an intranet.
                       </p>
                       <a href="#" data-toggle="modal" data-target="#app-development">Read More</a>
                    </div>
                 </div>
              </div>
            </div>
           </div>
        </div>
</div>




            </div>
        </div>


    </div>

    {{-- <div class="pulser"><</div> --}}
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/circletype@2.3.0/dist/circletype.min.js'></script>
    <script src="{{ asset('js/script.js') }}"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
