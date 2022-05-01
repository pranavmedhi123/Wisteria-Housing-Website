

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ContactUs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/main.css">
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
    <a href="/subdivisionhome">HOME</a>
    <!--<a href="subdivcontactus.html">CONTACT US</a>-->
    <a href="http://sxu8077.uta.cloud/" target="_blank">BLOG</a>
    <a href="/subdivisiondashboard"  >DASHBOARD</a>
    <a href="/subdivision_resident_details">RESIDENT DETAILS</a>
    <a href="/subdivision_create_reports">CREATE REPORTS</a>
    <a href="/Subdivision_contact_superuser" class="active">CONTACT ADMIN</a>
    <a href="http://localhost:8000" target="_blank">CHAT</a>
    <a href="/">LOGOUT</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<div class="container-fluid">

<div class="bg">
    <img src="images/365706.jpg">
    <div class="form-block">


        <form action="Subdivision_contact_superuser" method="POST">
            <div class="row">
                <div>
                @if($message != '')
            <h3>{{$message}}</h3>
          @endif
            </div>
                <div class="col-25">
                    <h3>Logged in as , Subdivision Owner</h3>
                    <h4>Contact the Admin Superuser through the form given below</h4>
                    <label for="fname">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Your first name">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Your last name">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="email">Email</label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="Your email id">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="phone">Phone</label>
                </div>
                <div class="col-75">
                    <input type="tel" id="phone" name="phone" placeholder="Your phone number">
                </div>
            </div>
            
            <div class="row">
                
                    <div class="col-25">
                    <label for="phone">Role</label>
                </div>
                <div class="col-75">
            <select name="Roles" required>
                <option value="">None</option>
                <option value="Subdivision">Subdivision</option>
              </select>
              </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="comment">Message for the Admin</label>
                </div>
                <div class="col-75">
                    <textarea id="comment" name="comment" placeholder="Write your message here and the admin will get back with you!.." style="height:200px"></textarea>
                </div>
            </div>
            @csrf
            <div class="row">
                <button class="btn-btn-success"  class="form-control" name="btn-submit">SUBMIT</button>
            </div>
        </form>




</div>
</div>




<footer class="footer-distributed">

    <div class="footer-left">

        <h3>Wisteria<span> Housing</span></h3>

        <p class="footer-links">
            <a href="home.html">Home</a>
            |
            <a href="contactus.html">Contact Us</a>
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


<script>
    var x = document.getElementById("demo");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        var latlon = position.coords.latitude + "," + position.coords.longitude;

        var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&zoom=14&size=400x300&sensor=false&key=YOUR_KEY";

        document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
    }
</script>


</body>

</html>

