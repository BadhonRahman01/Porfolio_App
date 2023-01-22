<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio-Homepage </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.container {
  	margin: 0 auto;
  	max-width: 1200px;
}

.nav {
  	background-color: #99ddff;
  	left: 0;
  	position: absolute;
  	right: 0;
  	top: 0;
  	transition: all 0.3s ease-in-out;
}

.nav .container {
  	align-items: center;
    font-size:larger;
    font-family: 'Josefin Sans', sans-serif;;
  	display: flex;
  	justify-content: space-between;
  	padding: 20px 0;
  	transition: all 0.3s ease-in-out;
}

.nav ul {
  	align-items: center;
  	display: flex;
  	justify-content: center;
  	list-style-type: none;
}
.active {
  font-weight: bold;
  color: #ff6600;
}
.nav a {
    color: #000000;
  	text-decoration: none;
}
.nav a.current,
.nav a:hover {
  color: #ff6600;
  font-weight:normal;
}
.nav li:hover {
    color: #ff6600;
}
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
.contact-btn{
    background: #ff6600;
    color: white;
    font-weight: bold;
    text-align: center;
    border-radius: 25px;
    width: 140px;
    height: 50px;
    border: 1px solid #ff8400;
}
.contact-btn:hover{
    background: rgb(115, 0, 255);
    font-weight: bold;
    margin-bottom: 10px;
    transition: all 0.3s ease-in-out;
}
.divone{
  position: absolute; 
            top: 120px; 
            width: 100%; 
            height: 700px; 
            background-color: rgb(128, 11, 11)
}
.divone-social{
  position: absolute; 
  top: 200px;
  left: 80px; 
  width: 75px; 
  height: 700px; 
  /* background-color: #666 */
}
.divone-left{
  position: absolute; 
  left: 155px; 
  width: 700px; 
  height: 700px; 
  background-color: rgb(11, 7, 119)
}
.divone-right{
  position: absolute; 
  left: 855px; 
  width: 100%; 
  height: 700px; 
  background-color: rgb(84, 4, 90)
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#048af1;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin:12px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
</style>
<body style="background-color:#99ddff">
<nav class="nav">
    <div class="container">
        <h1 class="logo"><img src="{{URL::asset('/images/badhonlogo.png')}}" alt="Badhon_Rahman" height="60" ></h1>
        <ul>
            <li style="padding: 0 30px;"><a href="" class="current">Home</a></li>
            <li style="padding: 0 30px;"><a href="">Services</a></li>
            <li style="padding: 0 30px;"><a href="">About</a></li>
            <li style="padding: 0 30px;"><a href="">Portfolio</a></li>
            <li style="padding: 0 30px;"><a href="">Testimonials</a></li>
            <li style="padding: 0 30px;"><a href="">Blog</a></li>
            <li style="padding: 0 30px;"><a href=""><button class="contact-btn"> Contact </button></a></li>
        </ul>

    </div>
</nav>

<div class="divone">
  <div class="divone-social">
    <div class="col-md-4 col-sm-6 col-xs-12">
      <ul class="social-icons">
        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
      </ul>
    </div>
  </div>
  <div class="divone-left"></div>
  <div class="divone-right"></div>


</div>



</body>
</html>