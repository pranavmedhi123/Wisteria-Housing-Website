<!DOCTYPE html>
<html lang="en">
<head>
    <title>Apartment OwnerFileComplaint</title>
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
    <a href="/apartmenthome" >HOME</a>
    <!--<a href="apartmentcontactus.html">CONTACT US</a>-->
    <a href="http://sxu8077.uta.cloud/" target="_blank">BLOG</a>
    <a href="/apartmentdashboard">DASHBOARD</a>
    <a href="/Apartment_owner_file_complaint">FILE COMPLAINT</a>
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


        <form action="Apartment_owner_file_complaint" method="POST">
            @csrf
            <div class="row">
                <div>
                @if($message != '')
            <h3>{{$message}}</h3>
          @endif
            </div>
                <div class="col-25">
                    <h3>Logged in as , Apartment Owner</h3>
                    <h4>File your Complaint Below</h4>
                    <label for="fname">First Name</label>
                </div>
                
                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Your first name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Your last name" required>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="email">Email</label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="Your email id" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="phone">Phone</label>
                </div>
                <div class="col-75">
                    <input type="tel" id="phone" name="phone" placeholder="Your phone number" required>
                </div>
            </div>
            <div class="row">
                
                    <div class="col-25">
                    <label for="phone">Building Name</label>
                </div>
                <div class="col-75">
            <select name="Buildings" required>
                <option value="">None</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
              </select>
              </div>
            </div>
            <div class="row">
                
                    <div class="col-25">
                    <label for="phone">Apartment Number</label>
                </div>
                <div class="col-75">
            <select name="Apartments" required>
                <option value="">None</option>
                <option value="101">101</option>
                <option value="102">102</option>
                <option value="103">103</option>
                <option value="104">104</option>
                <option value="201">201</option>
                <option value="202">202</option>
                <option value="203">203</option>
                <option value="204">204</option>
                <option value="301">301</option>
                <option value="302">302</option>
                <option value="303">303</option>
                <option value="304">304</option>
                <option value="401">401</option>
                <option value="402">402</option>
                <option value="403">403</option>
                <option value="404">404</option>
              </select>
              </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="comment">Issue</label>
                </div>
                <div class="col-75">
                    <textarea id="comment" name="comment" placeholder="Write your issue here and we will get back with you!.." style="height:50px" required></textarea>
                </div>
            </div>
            @csrf
            <div class="row">
                <input type="submit" name="btn-submit" value="SUBMIT">
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

