<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resident Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/superuserdetails.css')}}">
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
<body>
<!-- NAVBAR STARTS HERE-->
<div class="topnav" id="myTopnav">
    <a href="/subdivisionhome">HOME</a>
    <!--<a href="subdivcontactus.php">CONTACT US</a>-->
    <a href="http://sxu8077.uta.cloud/" target="_blank">BLOG</a>
    <a href="/subdivisiondashboard"  >DASHBOARD</a>
    <a href="/subdivision_resident_details" class="active">RESIDENT DETAILS</a>
    <a href="/subdivision_create_reports">CREATE REPORTS</a>
    <a href="/Subdivision_contact_superuser">CONTACT ADMIN</a>
    <a href="http://localhost:8000" target="_blank">CHAT</a>
    <a href="/">LOGOUT</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<!-- NAVBAR ENDS HERE-->
<div class="container-fluid">
    <h4> Logged in as , a <strong>Subdivision User.</strong></h4>
    <div class="my_userdetails">
        <div class="user_details_table">
            <h2><b>Resident Details</b></h2>
            <div style="overflow-x:auto;">
            <table style="width: 100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Phone No.</th>
                    <th>Subdivision Name</th>
                    <th>Building Name</th>
                    <th>Apartment No.</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($records as $key => $value)
                <tr>
                    <td>{{$value->Name}}</td>
                    <td>{{$value->EmailId}}</td>
                    <td>{{$value->Role}}</td>
                    <td>{{$value->MobileNo}}</td>
                    <td>{{$value->SubDivName}}</td>
                    <td>{{$value->BuildName}}</td>
                    <td>{{$value->ApartNo}}</td>

                </tr>
                @endforeach
            
                
            </tbody>
            </table>
        </div>
        </div>

    </div>






    <!-- FOOTER STARTS HERE-->

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
    <!-- FOOTER ENDS HERE-->

</div>



</body>
</html>


