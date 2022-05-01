
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Reports</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/superuserdetails.css')}}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
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
    <a href="/subdivisiondashboard" >DASHBOARD</a>
    <a href="/subdivision_resident_details">RESIDENT DETAILS</a>
    <a href="/subdivision_create_reports"  class="active">CREATE REPORTS</a>
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
            <h2><b>Generate Reports</b></h2>
            <div style="overflow-x:auto;">
            <table style="width: 100%">
                <thead>
                <tr>

                    <th>Building Name</th>
                    <th>Internet Usage(TBs)</th>
                    <th>Water Usage(MetricTonnes)</th>
                    <th>Electricity Usage(KWatts)</th>
                    <th>Gas Usage(Tons)</th>
                    <th>Total Expenditure</th>
                    <th>Select Report</th>


                </tr>
                </thead>
                @foreach ($reports as $key => $value)
                <tr>
                    <td>{{$value->Building_Name}}</td>
                    <td>{{$value->Internet_Usage}}</td>
                    <td>{{$value->Water_Usage}}</td>
                    <td>{{$value->Electricity_Usage}}</td>
                    <td>{{$value->Gas_Usage}}</td>
                    <td>{{$value->Total_Expenditure}}</td>
                    <td>
                        <form action="subdivision_create_reports_delete" method="post">
                        <input type="checkbox" name="new_records[]" value="<?php echo $value->Building_Name  ; ?>"></td>


                </tr>
                @endforeach

            </table>
        </div>
        </div>
    @csrf
    <div>
    <button name ="Delete_button" class="Button_for_Generating_Reports" type="submit"> DELETE REPORT</button>
    </div>
  </form>
</div>

















    <form action="subdivision_create_reports" method="post">
    <div class="Adding_new_reports">
        <label for="Building_name"><b>Building Name:</b></label>
        <select name="Building_name" required>
                    <option value="">None</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>

                </select>

                
        <label for="address"><b>Internet Usage(TBs)</b></label>
        <input type="number" name="Internet_use" id="address"  placeholder="Internet Usage here" required>
        
        <label for="address"><b>Water Usage(MetricTonnes)</b></label>
        <input type="number" name="Water_use" id="address"  placeholder="Water Usage here" required><br>
        
        <label for="address"><b>Electricity Usage(KWatts)</b></label>
        <input type="number" name="Electricity_use" id="address"  placeholder="Electricity Usage here" required>
        
        <label for="address"><b>Gas Usage(Tons)</b></label>
        <input type="number" name="Gas_use" id="address"  placeholder="Gas Usage here" required>
        @csrf
        <div>
            <button name="Add_Report" class="Button_for_Generating_Reports" type="submit"> ADD REPORT</button>
        </div>

    </form>
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


