<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Complaints</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/superuserdetails.css">
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
    <a href="/buildinghome" >HOME</a>
    <a href="/buildingcontactus" >CONTACT US</a>
    <a href="http://sxu8077.uta.cloud/" target="_blank">BLOG</a>
    <a href="/buildingdashboard">DASHBOARD</a>
    <a href="/Building_owner_apartmentdetails">APARTMENT OWNER DETAILS</a>
    <a href="/buildingviewcomplaints" class="active">VIEW COMPLAINTS</a>
    <a href="http://localhost:8000" target="_blank">CHAT</a>
    <a href="/">LOGOUT</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>
<!-- NAVBAR ENDS HERE-->
<div class="container-fluid">
<div class="user-section">
    <h4> Logged in as , a <strong>Building Owner.</strong></h4>
    <h4> <strong>View Complaints</strong></h4>
    <table cellspacing="0" rules="all" border="1" id="userInfo" style="border-collapse: collapse; width:100%;border-color:white">
        <thead>
        <tr>
            <th style="width:80px">Name</th>
            <th style="width:120px">Building</th>
            <th style="width:120px">ApartNo</th>
            <th style="width:120px">EmailId</th>
            <th style="width:120px">Phone Number</th>
            <th style="width:500px">Message</th>
            <th style="width:80px">REPLY</th>
        </tr>
        </thead>
        <tbody>
            
            @foreach ($complaints as $key => $value)   
        <tr>
            <td>{{$value->Firstname}}</td>
            <td>{{$value->Building_Name}}</td>
            <td>{{$value->Apartment_Number}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->Phone_Number}}</td>
            <td>{{$value->Issue}}</td>
            <td>
                <form action="viewcomplaintsresponse" method="POST">
                <input type="checkbox" name="complaints[]" value="{{$value->email}}"  id="Message_id" onclick="sendMessage()"></td>
            
        </tr>
        @endforeach
        
        </tbody>
    </table>
    <br />
    @csrf
    
    <div id="form_submit" class="dynamic-text" style="display:none">
        
            
            
            <textarea placeholder="Type your Reply here!"  name="Reply" rows="4" cols="50" required></textarea>
            <button  name="Send_Response_Button" class="Button_for_deleting" type="submit" > Send Response</button>
            
        
    </div>
    
    </form>
    
    
</div>

<script>
function sendMessage(){
    
    document.getElementById('form_submit').style.display='block';
    
    
}



function Email_details(){
    var x= document.getElementById("Message_id");
    
    
    
}
</script>













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


