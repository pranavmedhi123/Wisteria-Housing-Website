<?php
session_start();
session_destroy();
$errors=array();
$uname_req_err = "";
$pass_req_err = "";
$role_req_err = "";
$val_creds_err = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/phperrorvals.css')}}">
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
    <a href="/aboutus" >WHY US</a>
    <a href="/contactus" >CONTACT US</a>
    <a href="http://sxu8077.uta.cloud/" target="_blank">BLOG</a>
    <a href="/login" class="active">LOGIN/SIGN UP</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<div class="container-fluid">

<div class="bg">
    <img src="images/365706.jpg">
    <div class="form-block">


        <form name="roles_form" action="logininsert" method="post">
            @csrf
            <div class="row">
                <div>
                @if(!empty($errors_login))
                @foreach($errors_login as $key => $value)
                <h4 style="color:red;">{{$value}}</h4>
                @endforeach
                @endif

                </div>
                <div class="col-25">
                    <label for="username">Username</label>
                </div>
                <div class="col-75">
                    <input type="text" id="username" name="Username" placeholder="Username" />
                    <?php echo $uname_req_err; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="password">Password</label>
                </div>
                <div class="col-75">
                    <input type="password" name="Password" placeholder="Password" />
                    <?php echo $pass_req_err; ?>
                </div>
            </div>
            <div>
                <label for="roles">Choose a Role:</label>
                <select name="roles" id="roles"  >
                    <option value="" selected="selected" disabled>None</option>
                    <option value="Admin">Admin</option>
                    <option value="Subdivision">Subdivision</option>
                    <option value="Building" >Building</option>
                    <option value="Apartment">Apartment</option>
                </select>
                <?php echo $role_req_err; ?>
            </div>

            <div class="row">
                <!-- <input type="submit" value="LOGIN"> -->
                <input type="submit" class = "login-button" value="LOGIN" name="login_button">
                <?php echo $val_creds_err; ?>
            </div>
        </form>

</div>
</div>



<footer class="footer-distributed">

    <div class="footer-left">

        <h3>Wisteria<span> Housing</span></h3>

        <p class="footer-links">
            <a href="/home">Home</a>
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
<script>
    function role_checker(roles){
        if (document.roles_form.roles.value!=""){
            location.href=document.roles_form.roles.value;

        }

    }
</script>
</html>