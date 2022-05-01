<?php
session_start();
include "connection.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Building Home</title>
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
<body>

    <div class="topnav" id="myTopnav">
        <a href="buildinghome.php" class="active">HOME</a>
    <a href="buildingcontactus.php" >CONTACT US</a>
    <a href="http://sxu8077.uta.cloud/" target="_blank">BLOG</a>
    <a href="buildingdashboard.php?username=<?php echo $_REQUEST['my_temp_Username'];?>">DASHBOARD</a>
    <a href="Building_owner_apartmentdetails.php?username=<?php echo $_REQUEST['my_temp_Username'];?>">APARTMENT OWNER DETAILS</a>
    <a href="buildingviewcomplaints.php?username=<?php echo $_REQUEST['my_temp_Username'];?>">VIEW COMPLAINTS</a>
    <a href="home.php?logout='yes'">LOGOUT</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
    </div>
<div class="container-fluid">

    <div class="bg">
        <img src="images/housing.jpg">
        <div class="text-block">
            <h1>WISTERIA HOUSING</h1>
            <p>Housing is absolutely essential to human flourishing. <br/>Without stable shelter, it all falls apart.</p>
        </div>
    </div>

    <div class="cards-text">

        <div class="card">
            <div class="img-left">
                <img src="images/grid/images (5).jfif" alt="ImageHousing">
            </div>
            <div class="text-right"> <p>Our fully furnished apartments in Arlington offer a convenient, all-inclusive lifestyle tailored to students. Near the University of Arlington, we have pet-friendly one- and two-bedroom apartments. Private rooms, included internet and television, in-home laundry, and even a completely fitted kitchen await you at home. Enjoy workouts in our 24-hour fitness center when you want to socialize.<a class="arrow-link" href="#">&rarr;</a></p></div>
        </div>

    

        <div class="card">
            <div class="img-left">
                <img src="images/grid/download.jfif" alt="ImageHousing">
            </div>
            <div class="text-right"> <p>There's no better spot for mavericks than WISTERIA if you're hunting for the finest Arlington apartments. Residents not only find a place to sleep, but also a new home. Our apartments are custom-designed for classy and relaxed living, with hardwood-style flooring, vaulted ceilings, built-in bookcases, wood plantation blinds, and more.<a class="arrow-link" href="#">&rarr;</a></p></div>
        </div>
        <div class="card">
            <div class="img-left">
                <img src="images/grid/images (4).jfif" alt="ImageHousing">
            </div>
            <div class="text-right"> <p>For you, individual leasing means peace of mind. Unlike several apartments or rental houses with joint leases, your financial obligation is limited to your student's rooms. That means you won't have to think about paying a roommate's portion if they move or leave for some reason. We will find a roommate for your student if they don't have one already. A Roommate Matching form will be completed by each roommate.<a class="arrow-link" href="#">&rarr;</a></p></div>
        </div>

    </div>
     <p>
        After a long day at work, relax in your WISTERIA apartment and take advantage of the many facilities available to you. At WISTERIA, you'll be a member of a vibrant and supportive culture.whoever you are, whatever your passion is choose from a diverse calendar of events, as well as services and programs to assist you.While you're a student, you can shine, and then move on to the next level.<br>

        If you are someone who likes feeding birds It's National Bird Feeding Month, and if you're looking for tips on how to feed, watch, and communicate with birds in Arlington, Texas, check out our community. You'll find a variety of birds, as well as people who are interested in the same things you are.<br>

        Welcome to the late winter month of March from the WISTERIA group in Arlington, Texas! It is usually a good idea to reward yourself from time to time because it offers a fun distraction from the pressures of life. If you are watching your pennies, however, splurging is a little more difficult, so we provide you with better budget choices.
     </p>
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
