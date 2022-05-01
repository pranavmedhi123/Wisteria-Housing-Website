<!DOCTYPE html>
<html lang="en">
<head>
    <title>Apartment Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/admin.css">
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
    <a href="/apartmenthome" >HOME</a>
    <!--<a href="apartmentcontactus.html" >CONTACT US</a>-->
    <a href="http://sxu8077.uta.cloud/" target="_blank">BLOG</a>
    <a href="/apartmentdashboard" class="active">DASHBOARD</a>
    <a href="Apartment_owner_file_complaint">FILE COMPLAINT</a>
    <a href="http://localhost:8000" target="_blank">CHAT</a>
    <a href="/">LOGOUT</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<!-- NAVBAR ENDS HERE-->
<div class="container-fluid dashboard-admin">
<!--    <div id="chartContainer" style="height: 370px; width: 100%;"></div>-->
<!--    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script></div>-->
    <div class="maincards">

        <div class="card">
            <i class="fa fa-university fa-2x text-yellow" aria-hidden="true"></i>
            <div class="card_inner">
                <span class="font-bold text-title subdivision-name">Wisteria Housing</span>
            </div>
        </div>

        <div class="card">
            <i class="fa fa-building fa-2x text-blue" aria-hidden="true"></i>
            <div class="card_inner">
                
                <span class="font-bold text-title building-name">&nbsp; {{$buildName}}</span>
            </div>
        </div>

        <div class="card">
            <i class="fa fa-home fa-2x text-yellow" aria-hidden="true"></i>
            <div class="card_inner">
                <span class="font-bold text-title apartment-name">{{$apartNo}}</span>
            </div>
        </div>

        <div class="card">
            <i class="fa fa-plus fa-2x text-blue" aria-hidden="true"></i>
            <div class="card_inner">
                <p class="text-primary-p">Your Monthly Share</p>
                <span class="font-bold text-title">{{$resultantShare}}</span>
            </div>
        </div>
    </div>
   <div class="table">
       <p>SERVICES Vs USAGE</p>
    <table class="report">

        <thead>
        <tr>
            <th scope="col">Item</th>
            <th scope="col">Percent</th>
        </tr>
        </thead><tbody>
    <tr id="1" style="height:{{$buildTotElec}}%">
        <th scope="row">Electricity</th>
        <td><span>{{$buildTotElec}}%</span></td>
    </tr>
    <tr id="2" style="height:{{$buildTotWater}}%">
        <th scope="row">Water</th>
        <td><span>{{$buildTotWater}}%</span></td>
    </tr>
    <tr id="3" style="height:{{$buildTotGas}}%">
        <th scope="row">Gas</th>
        <td><span>{{$buildTotGas}}%</span></td>
    </tr>
    <tr id="4" style="height:{{$buildTotInt}}%">
        <th scope="row">Internet</th>
        <td><span>{{$buildTotInt}}%</span></td>
    </tr>

    </tbody>
    </table>

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

</body>
</html>


