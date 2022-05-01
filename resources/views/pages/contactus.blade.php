<!DOCTYPE html>
<html lang="en">
<head>
    <title>ContactUs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Akaya+Telivigala&display=swap');
    </style>
<!-- NAVBAR RESPONSIVE STARTS -->
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
    <!-- NAVBAR RESPONSIVE ENDS -->

</head>
<body>

<div class="topnav" id="myTopnav">
    <a href="/" >HOME</a>
    <a href="/aboutus" >WHY US?</a>
    <a href="/contactus" class="active">CONTACT US</a>
    <a href="http://sxu8077.uta.cloud/" target="_blank">BLOG</a>
    <a href="/signup">LOGIN/SIGN UP</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<div class="container-fluid">

<div class="bg">
    <img src="images/365706.jpg">
    
    <div class="form-block">
        <form action = "btnsubmit" method = "post">

            @csrf
            <div class="row">
                <div class="col-25">
                    <label for="fname">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" class="form-control" name="firstname" placeholder="Your first name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname"  class="form-control" name="lastname" placeholder="Your last name" required>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="email">Email</label>
                </div>
                <div class="col-75">
                    <input type="email" id="email"  class="form-control" name="email" placeholder="Your email id" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="phone">Phone</label>
                </div>
                <div class="col-75">
                    <input type="tel" id="phone"  class="form-control" name="phone_number" placeholder="Your phone number" required>
                </div>
            </div>
            <div class="row">
                
                    <div class="col-25">
                    <label for="phone">Role</label>
                </div>
                <div class="col-75">
            <select name="Roles" required>
                <option value="">None</option>
                <option value="N/A">N/A</option>
              </select>
              </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="comment">Comment</label>
                </div>
                <div class="col-75">
                    <textarea id="comment"  class="form-control" name="comment" placeholder="Write something.." style="height:200px" required></textarea>
                </div>
            </div>
            <div class="row">
                <button class="btn-btn-success"  class="form-control" name="btn-submit">SUBMIT</button>
            </div>
        </form>




</div>
</div>


<div class="mapouter">
    <div class="gmap_canvas" style="width:100%;">
        <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=1327%20S%20Oak%20St,%20Arlington,%20TX%2076010&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
        <style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style>
                <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
    </div>
</div>

<footer class="footer-distributed">

    <div class="footer-left">

        <h3>Wisteria<span> Housing</span></h3>

        <p class="footer-links">
            <a href="/">Home</a>
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

