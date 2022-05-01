<!DOCTYPE html>
<html lang="en">
<head>
  <title>Why US</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap');
    </style>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</head>
<body >
    <div class="topnav" id="myTopnav">
    <a href="/">HOME</a>
    <a href="/aboutus"class="active">WHY US?</a>
    <a href="/contactus">CONTACT US</a>
    <a href="http://sxu8077.uta.cloud/" target="_blank">BLOG</a>
    <a href="/signup">LOGIN/ SIGN UP</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<html lang="en">
  <head>
    <meta charset ="UTF-8" name="viewport" content="width=device-width, initial-scale-1">
    <link rel="stylesheet" href= "{{asset('css/whyus.css')}}">
    <title>about us</title>
  </head>
  <body>
    <div class="about-section">
	  <!--<style>
	  div {
	  background-image: url('D:\aboutus\src\dreamhouse.jpg');
	  }
	  </style>-->
	  <h1>ABOUT US</h1>
      <p>Come live with us for new experiences</p>
    </div>
	<br>
	<h2 style="text-align:center"> Our Plans </h2><br>
	<div class="row">
  <div class="column">
    <div class="card">
      <img src="{{asset('images/onebedroom.png')}}" alt="1bhk" width="500" height="300" >
      <div class="container">
        <h2>One Bedroom</h2>
        <p class="title">1500 sqt</p>
        <p>$1000 per month / $200 down payment</p>
        <p> for more details contact jane@example.com</p>
        </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="{{asset('images/twobedroom2.jpg')}}" alt="2bhk" width="500" height="300" >
      <div class="container">
        <h2>Two Bedroom</h2>
        <p class="title">2000 sqt</p>
        <p>$2000 per month / $200 down payment</p>
        <p>for more details mike@example.com</p>
       </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="{{asset('images/vipbedroom1.jpg')}}" alt="v2bhk" width="500" height="300" >
      <div class="container">
        <h2>Vip Two Bedroom</h2>
        <p class="title">2500 sqt</p>
        <p>$2500 per month / $200 down payment</p>
        <p>for more details john@example.com</p>
       </div>
    </div>
  </div>
</div>

    <!-- The amneties section -->
    <div class="container">
      <div class="row">
        <div class ="column-50">
        <h1 class="xlarge-font"><b>Amenities</b></h1>
        <p><span style="font-size:40px">Come experience world class facilities</span><br>
          <h3>We provide you a healthy life style. It's important that everyone should have healthy lifestyle
		  irespective of the age that's why, we provide various places of getting fit. Additionally,
		  we think mental health is significant that's why we started yoga and gardening so that
		  you cab southe your soul when you come home.</p></h3>
      </div>
      <div class="column-50 text-css">
        <img src="{{asset('images/amen1.png')}}" width="1000" height="500" alt="/image">
      </div>
    </div>
  </div>
  <!-- The food section -->
  <div class="container" style="background-color:#f1f1f1">
    <div class="row">
      <div class="column-40">
        <img src="{{asset('images/fastfood.png')}}" width="500" height="300">
        </div>
    <div class="column-60">
      <h1 class="xlarge-font"><b>Food Nearby</b></h1>
        <p><span style="font-size:40px">Our community is also very Nearby to food chains</span><br>
          <h2>If you are someone can't cook you then this is definetly where you want to be</p></h2>
    </div>
    </div>
  </div>
  <!-- The entertainment section -->
  <div class="container">
    <div class="row">
      <div class="column-50">
      <h1 class="xlarge-font"><b>Entertainment</b></h1>
        <p><span style="font-size:40px">We believe weekend should be amazing</span><br>
          <h3>Conveniently located between Forth Worth and Dallas, you will be able to access
		  to many high ways. Minutes away from Six Flags and AT&T stadium. Residents also
		  enjoy shopping, dining and the nature.</p></h3>
    </div>
	 <div class="column-50">
        <img src="{{asset('images/entertainment.jpg')}}" width="700" height="200">
        </div>
    </div>
  </div>


      <div class="row">
        <div class="column">
            <img src="images/grid/download.jfif" >
            <img src="images/grid/download (4).jfif" >
            <img src="images/grid/images (3).jfif" >

            <img src="images/grid/images (9).jfif" >




        </div>
        <div class="column">
            <img src="images/grid/download (2).jfif" >
            <img src="images/grid/images (4).jfif" >
            <img src="images/grid/images (11).jfif" >
            <img src="images/grid/images (12).jfif" >
            <img src="images/grid/images (8).jfif" >




        </div>
        <div class="column">
            <img src="images/grid/images (5).jfif" >
            <img src="images/grid/download (3).jfif" >

            <img src="images/grid/images (10).jfif" >

            <img src="images/grid/images (2).jfif" >

        </div>
        <div class="column">
            <img src="images/grid/images (6).jfif">
            <img src="images/grid/download (1).jfif">
            <img src="images/grid/images (1).jfif">
            <img src="images/grid/images (7).jfif">
            <img src="images/grid/download (5).jfif" >

        </div>
    </div>



    <footer class="footer-distributed">

      <div class="footer-left">

          <h3>Wisteria<span> Housing</span></h3>

          <p class="footer-links">
              <a href="/homepage">Home</a>
              |
              <a href="/contactus">Contact Us</a>
              |
              <a href="http://sxu8077.uta.cloud/">Blog</a>
          </p>

          <p class="footer-company-name">wisteriahousing &copy; 2021</p>
      </div>

      <div class="footer-center">

          <div>
              <i class="fa fa-map-marker"></i>
              <p><span>1327 S Oak St</span> Arlington,Texas</p>
          </div>

          <div>
              <i class="fa fa-phone"></i>
              <p>+1 (641)-861-8825</p>
          </div>

          <div>
              <i class="fa fa-envelope"></i>
              <p><a href="mailto:support@company.com">contactadmin@wisteriahousing.com</a></p>
          </div>

      </div>

      <div class="footer-right">

          <p class="footer-company-about">
              <span>About the company</span>
              Our company provides top notch services for Wisteria Housing.
          </p>

          <div class="footer-icons">

              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>

          </div>

      </div>

  </footer>

</div>


</body>
</html>