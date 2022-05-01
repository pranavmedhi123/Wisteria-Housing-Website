<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('HomePage')</title>
  <style type="text/css">
      /*Student Name:  Medhi, Pranav Student ID:1001756326;
Student Name: Uppuluri, Sai Sreekar Student ID:1001828077;
Student Name: Podili, Sai Sravanthi Student ID:1001878747;*/

/* font-family: Garamond, 'Akaya Telivigala', cursive;
colors : #F6C90E, #ffffff, #06224A, #000000, whitesmoke*/


/************************HEADER NAV START*****************************/
html,body{
    height : 100%;
    font-family: Garamond;
    font-size: 20px;
}

.topnav {
    background-color: #F6C90E;
    overflow: hidden;
    width: 100%;
    font-family: 'Akaya Telivigala', cursive;
    top: 0;
}


.topnav a {
    float: left;
    display: block;
    color: #ffffff;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

.topnav a:not(.icon):hover {
    background-color: #ffffff;
    color: black;
    opacity:0.6;
}


.topnav a.active {
    background-color: #06224A;
    color: white;
}


.topnav .icon {
    display: none;
}

@media screen and (max-width: 600px) {
    .topnav a:not(:first-child) {display: none;}
    .topnav a.icon {
        float: right;
        display: block;
    }
    .topnav{
        background-color: #06224A;;
    }
}


@media screen and (max-width: 600px) {
    .topnav.responsive {position: relative;}
    .topnav.responsive a.icon {
        position: absolute;
        right: 0;
        top: 0;
    }
    .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
    }
}

/******************************************HEADER NAV END****************************/

.container-fluid .bg>img{
    width: 100%;
    height : auto;
    position: relative;

}
.container-fluid p {
    text-align: justify;
}

.text-block {
    background-color: #F6C90E;
    color: black;
    font-weight: bold;
    margin: 0 auto;
    padding: 30px;
    width: 50%;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -0%);
    mix-blend-mode: screen;

}

.text-block p{
    text-align: center;
    font-size: 20px;
}

.cards-text{

    display: grid;

}
.card{
    padding: 20px;
    margin: 50px;
}

.cards-text .card .img-left{
    float: left;
    width: 30%;
    text-align: center;

}

.cards-text .card .img-right{
    float: right;
    width: 30%;
    text-align: center;

}
.cards-text .card .text-left{
    float: left;
    width: 70%;
    text-align: justify;
    font-size: 20px;
    padding: 65px;
    border: 2px solid #F6C90E;
    margin-top: 50px;
}
.cards-text .card .text-right{
    width: 70%;
    float: right;
    text-align: justify;
    font-size: 20px;
    padding: 65px;
    border: 2px solid #F6C90E;
    margin-top: 50px;
}
.cards-text .card .arrow-link{
    color: #000000;
    text-decoration-line: none;
}

.cards-text .card .arrow-link:hover{
    color: #F6C90E;

}

.cards-text .card img{
    width: 70%;
}



* {
    box-sizing: border-box;
}

.row {
    display: flex;
    flex-wrap: wrap;
    padding: 0 4px;
}


.column {
    flex: 25%;
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
    width:100%
}


@media only screen and (min-device-width : 924px) and (max-device-width : 1300px) {
    .text-block {

        transform: translate(-50%, -50%);


    }
}


@media (max-width: 1660px) {
    .card{
        padding: 10px;
        margin: 30px;
    }
    .cards-text .card .img-left{
        float: left;
        width: 25%;
        text-align: center;

    }
    .cards-text .card .text-right{
        width: 75%;
        float: right;
        text-align: justify;
        font-size: 18px;
        padding: 45px;
        border: 2px solid #F6C90E;
    }
}
@media (max-width: 1480px) {
    .card{
        padding: 10px;
        margin: 30px;
    }
    .cards-text .card .img-left{
        float: left;
        width: 20%;
        text-align: center;

    }
    .cards-text .card .text-right{
        width: 80%;
        float: right;
        text-align: justify;
        font-size: 17px;
        padding: 15px;
        border: 2px solid #F6C90E;
        margin-top: 30px;


    }
}
@media (max-width: 1300px) {

    .card{
        padding: 5px;
        margin: 20px;
    }
    .cards-text .card .img-left{
        float: left;
        width: 20%;
        text-align: center;

    }
    .cards-text .card .text-right{
        width: 80%;
        float: right;
        text-align: justify;
        font-size: 14px;
        padding: 15px;
        border: 2px solid #F6C90E;

    }
}

@media (max-width: 1080px) {

    .card{
        padding: 5px;
        margin: 20px;
    }
    .cards-text .card .img-left{
        float: left;
        width: 20%;
        text-align: center;

    }
    .cards-text .card .text-right{
        width: 80%;
        float: right;
        text-align: justify;
        font-size: 12px;
        padding: 10px;
        border: 2px solid #F6C90E;

    }

}


@media only screen and (min-device-width : 640px) and (max-device-width : 923px) {
    .text-block {

        transform: translate(-50%, -100%);
    }
    h1 {
        font-size: 20px;
    }
    .text-block p {
        font-size: 12px;
    }
    .row .column{
        flex: 50%;
    }
    .cards-text .card .text-right{

        margin-top: 15px;

    }

}

@media only screen and (max-device-width : 639px) {
    .text-block {
        position: relative;
        width: 100%;
        padding: 10px;
    }
    h1 {
        font-size: 14px;
    }
    .text-block p {
        font-size: 12px;
    }
    .row .column{
        flex: 75%;
    }
    .cards-text .card .img-left{
        /*float: left;*/
        width: 100%;
        text-align: center;

    }
    .cards-text .card .text-right{
        width: 100%;
        /*float: right;*/
        text-align: justify;
        font-size: 16px;

        border: 2px solid #F6C90E;
    }
    .container-fluid p{
        font-size: 16px;

    }
}






/****************************************CONTACT US FROM STARTS*****************************************/


.form-block {
    background-color: white;
    color: #06224A;
    font-weight: bold;
    margin: 0 auto;
    padding: 30px;
    width: 40%;

    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -25%);

}


/*.contactus{*/
/*    width:25%;*/
/*    left:25%;*/
/*}*/

input[type=text],input[type=email],input[type=tel], input[type=password], textarea{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}

input[type=password]{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}


input[type=submit], .login-button {
    background-color: #06224A;
    color: white;
    padding: 12px 20px;
    border: none;
    float: right;
    font-family: 'Akaya Telivigala', cursive;
    font-size: 17px;
}




/*.col-25 {*/
/*    float: left;*/
/*    width: 25%;*/
/*    margin-top: 6px;*/
/*}*/

/*.col-75 {*/
/*    float: left;*/
/*    width: 75%;*/
/*    margin-top: 6px;*/
/*}*/
.col-25, .col-75{
    width :100%;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}


@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}





/*************************************CONTACT US FROM ENDS**********************************************/



 /********************************************FOOTER START************************************************/
footer{
    bottom: 0;
}
.footer-distributed{
    background-color: #06224A;
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 55px 50px;
    margin-top: 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
    display: inline-block;
    vertical-align: top;
}

.footer-distributed .footer-left{
    width: 40%;
}

.footer-distributed h3{
    color:  #ffffff;
    font-weight: normal;
    font-size : 36px;
    margin: 0;
}

.footer-distributed h3 span{
    color: #F6C90E;
}


.footer-distributed .footer-links{
    color:  #ffffff;
    margin: 20px 0 12px;
    padding: 0;
}

.footer-distributed .footer-links a{
    display:inline-block;
    line-height: 1.8;
    text-decoration: none;
    color:  inherit;
}

.footer-distributed .footer-company-name{
    color:  #8f9296;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
}


.footer-distributed .footer-center{
    width: 35%;
}

.footer-distributed .footer-center i{
    background-color:  #06224A;
    color: #ffffff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
    font-size: 17px;
    line-height: 38px;
}

.footer-distributed .footer-center p{
    display: inline-block;
    color: #ffffff;
    vertical-align: middle;
    margin:0;
}

.footer-distributed .footer-center p span{
    display:block;
    font-weight: normal;
    font-size:14px;
    line-height:2;
}

.footer-distributed .footer-center p a{
    color: #F6C90E;
    text-decoration: none;;
}

.footer-distributed .footer-right{
    width: 20%;
}

.footer-distributed .footer-company-about{
    line-height: 20px;
    color:  #92999f;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
}

.footer-distributed .footer-company-about span{
    display: block;
    color:  #ffffff;
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 20px;
}

.footer-distributed .footer-icons{
    margin-top: 25px;
}

.footer-distributed .footer-icons a{
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color:  #F6C90E;
    border-radius: 2px;
    font-size: 20px;
    color: #06224A;
    text-align: center;
    line-height: 35px;
    margin-right: 3px;
    margin-bottom: 5px;
}


@media (max-width: 880px) {

    .footer-distributed{
        font: bold 14px sans-serif;

    }

    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right{
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
    }

    .footer-distributed .footer-center i{
        margin-left: 0;
    }
    .footer-distributed p{
        text-align: center;
    }


}
/********************************************FOOTER END****************************/



/****************************************RESET USER STARTS***************************************/

/****************************************RESET USER STARTS***************************************/

#roles{
        width: 110px;
        height: 30px;
        border: 1px solid #ccc;
        border-radius: 4px;

}
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/main.css">
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
    <a href="/homepage" class="active">HOME</a>
    <a href="/aboutus">WHY US?</a>
    <a href="contactus1.php">CONTACT US</a>
    <a href="http://sxu8077.uta.cloud/" target="_blank">BLOG</a>
    <a href="signup.php">LOGIN/ SIGN UP</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
@yield('content')
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