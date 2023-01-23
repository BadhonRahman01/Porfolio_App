<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio-Homepage </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="github" href="#"><i class="fa fa-github"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
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
                    <p class="mb-0">Best Design<br>
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
              </div>

            </div>
        </div>



    </div>

    {{-- <div class="pulser"><</div> --}}

<script type="text/javascript">
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.05em solid orange}";
        document.body.appendChild(css);
    };

</script>

</body>

</html>
