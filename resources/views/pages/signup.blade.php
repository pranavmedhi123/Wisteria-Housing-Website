
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" href="{{asset('css/sign_up.css')}}">
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
    <a href="/aboutus" >WHY US?</a>
    <a href="/contactus" >CONTACT US</a>
    <a href="http://sxu8077.uta.cloud/" target="_blank">BLOG</a>
    <a href="/signup" class="active">LOGIN/SIGN UP</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <div class="container-fluid">

    <div>
                @if(!empty($emailexists))
            
            <h1 style="color:red;">{{$emailexists}}</h3>
            
          @endif
            </div>
            <div text-align: center>
                @if(!empty($errormessage))
            @foreach($errormessage as $key => $value)
            <h4 style="color:red;">{{$value}}</h4>
            @endforeach
            
          @endif
            </div>
            <div>
                @if(!empty($returnmessage))
            
            <h4>{{$returnmessage}}</h4>
            
          @endif
            </div>


        <div class='my_form'>
          <form  action="signupinsert" method="post">
            @csrf
            <div class="form-left">

            <section class="copy">
            <h2>Welcome to Sign Up Page</h2>
              <div class="login_container">
                <p>Already have an account?<a href="login"><b>Login</b></a></p>
              </div>
              <hr>
            </section>

             <div class="form_inputs_Fullname">
              <h4>Your Information</h4>
              <label for="fname"><b>Full Name</b></label><br>
              <input type="text" name="fname" id="fname" onchange="fnameCheck()" placeholder="First Name" >
              
              <input type="text" name="lname" id="lname" onchange="lnameCheck()" placeholder="Last Name" >
              
            </div>
            <div class="form_inputs_Email">
              <label for="email"><b>Email</b></label><br>
              <input type="email" name="email" id="email" placeholder="e.g abc@gmail.com" >
              

            </div>
            <div class="form_inputs_Password">
              <label for="my_password"><b>Password</b></label><br>
              <input type="password" name="my_password" id="my_password" onchange="pass_Check()"  placeholder="Type Password here" >
              



              <input type="checkbox" onclick="my_password_visibility()">Show Password
            </div>
            <div class="form_inputs__retype_Password">
              <label for="retype_password"><b>Retype Password</b></label><br>
              <input type="password" name="retype_password" id="retype_password" onchange="retype_Check()"  placeholder="Confirm Password"  >
              <input type="checkbox" onclick="retype_password_visibility()">Show Password
              
            </div>
            <div class="form_inputs_Address">
              <label for="address"><b>Address</b></label><br>
              <input type="text" name="addressline1" id="addressline1" onchange="addressline1_Check()"  placeholder="Address Line 1" >
              
                <br>
              Street Address<br>
              <input type="text" name="addressline2" id="addressline2" onchange="addressline2_Check()" placeholder="Address Line 2" >
              
              <br>
              Apartment, Building No. etc<br>
              Country
              <select name="Country" required>
                <option value="">None</option>
                <option value="USA">USA</option>
              </select><br>
              State
              <select name="State" required>
                <option value=""> None</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>


              </select>
              Postal/Zip Code
              <input type="number" name="zip_code" id="zip_code" onchange="zipcode_Check()" placeholder="Postal/Zip Code" >
              
              
               <br>
              <div class="form_inputs_PhoneNo">
                <label for="phone_number"><b>Phone-No</b></label><br>
                <input type="number" name="phone_number" id="phone_number" data-limit="10"  onchange="phoneno_Check()" placeholder="Phone Number here" >
                

                

              </div>



            </div>
<hr class="horizontal-line">
            </div>
            <div class="form-right">
            <section class="copy">
              <h4> Responsible Contact's Information</h4>
              <div>
                <div class="form_inputs_Fullname">
                  <label for="res_fname"><b>Full Name</b></label><br>
                  <input type="text" name="res_fname" id="res_fname" onchange="res_fname_Check()" placeholder="First Name" >
                  
                  


                  <input type="text" name="res_lname" id="res_lname"  onchange="res_lname_Check()" placeholder="Last Name" >
                  
                </div>



              </div>
              <div class="form_inputs_Address">
                <label for="res_address_line1"><b>Address</b></label><br>
                <input type="text" name="res_address_line1" id="res_address_line1" onchange="res_addressline1_Check()"  placeholder="Address Line 1" >
                
                
                
                <br>
                Street Address<br>
                <input type="text" name="res_address_line2" id="res_address_line2" onchange="res_addressline2_Check()" placeholder="Address Line 2" >
                
                <br>
                Apartment, Building No. etc<br>
                Country
                <select name="Country" required>
                  <option value="">None</option>
                  <option value="USA">USA</option>
                </select><br>
                State
                <select name="State" required>
                  <option value=""> None</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="DC">District Of Columbia</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>


                </select>
                Postal/Zip Code
                <input type="number" name="res_zip_code" id="res_zip_code" onchange="res_zipcode_Check()"  placeholder="Postal/Zip Code" > 
                

                
                <br>
                <div class="form_inputs_PhoneNo">
                  <label for="phone_number"><b> Responsible Contact's Phone-No</b></label><br>
                  <input type="number" name="res_phone_number" id="res_phone_number" onchange="res_phoneno_Check()"  placeholder="Phone Number here" >
                  
                  


                </div>
              </div>
              <hr>
            </section>





            <section class="copy">
              <h4> What's this Sign up for</h4>
              <div class="form_inputs_for">
                <label for="address"><b>Select the role you are signing up for</b></label>
                <select name="Role" >
                  <option value="">None</option>
                  <option value="Building">Building role</option>
                  <option value="Apartment">Apartment role</option>
                  <option value="Subdivision">Subdivision role</option>
                </select>
                
                
              </div>

            </section>
            <hr>





            <section class="copy">
              <div class="form_inputs_preferences">

              <label for="address"><b>Subdivision Name </b></label>
                <select name="Subdivisions" id="Subdivision_id"  >
                  <option value="" >None</option>
                  <option value="Wisteria" >Wisteria Housing</option>
                </select>
                


              <label for="address"><b>Building Name (If not applicable select N/A)</b></label>
                <select name="buildings" id="Building_id"  >
                  <option value="" selected="selected">None</option>
                  <option value="N/A" >N/A</option>
                  <option value="A" >A</option>
                  <option value="B" >B</option>
                  <option value="C" >C</option>
                  <option value="D" >D</option>
                  <option value="E" >E</option>
                  <option value="F" >F</option>
                  <option value="G" >G</option>
                </select>
                


              <label for="address"><b>Apartment Number (If not applicable select N/A)</b></label>
              <select name="apartments" id="Apartment_id"  >
              <option value="" selected="selected">None</option>
              <option value="N/A" >N/A</option>
              <option value="101" >101</option>
              <option value="102" >102</option>
              <option value="103" >103</option>
              <option value="104" >104</option>
              <option value="201" >201</option>
              <option value="202" >202</option>
              <option value="203" >203</option>
              <option value="204" >204</option>
              <option value="301" >301</option>
              <option value="302" >302</option>
              <option value="303" >303</option>
              <option value="304" >304</option>
              <option value="401" >401</option>
              <option value="402" >402</option>
              <option value="403" >403</option>
              <option value="404" >404</option>
            </select>
            



              <h4>Service Preference </h4>
              
                <label for="address"><b>Select the Service type you prefer (If not applicable select N/A)</b></label>
                <select name="Services" >
                  <option value="">None</option>
                  <option value="N/A" >N/A</option>

                  <option value="Building's services">Building's Service Plans</option>
                  <option value="Self-Service">Custom/Self Service Plan</option>

                </select>
                








              </div>
            </section>



            <div class="checkbox">
              <label class="checkbox_container"></label>
              <input type="checkbox" required >
              <span class="my_checkbox"></span>
              <span class="small">I agree to all the <a href="#">Terms</a> &amp;<a href="#"> Conditions</a></span>
            </div>
            <div>
              <button name="Sign_up_button"  class="signup-btn" type="submit"> Sign Up</button>
            </div>
          </div>
          </form>




        </div>





        <script>
          function fnameCheck(){

              var my_new_fname=document.getElementById("fname").value;
              //var my_new_fname_string=JSON.stringify(my_new_fname);
              var my_new_fname_string_length=my_new_fname.length;
              console.log("fname" + my_new_fname_string_length);

             if(my_new_fname_string_length> 20 ){

              alert("Your first name has to be no more than 20-letters" );
            }

          }




          function lnameCheck(){

              var my_new_lname=document.getElementById("lname").value;
              //var my_new_lname_string=JSON.stringify(my_new_lname);
              var my_new_lname_string_length=my_new_lname.length;
              console.log("lname" + my_new_lname_string_length);
            if(my_new_lname_string_length> 20 ){
              alert("Your last name has to be no more than 20-letters");
            }
          }




          function pass_Check(){

            var my_pass=document.getElementById("my_password").value;
            // var my_pass_string=JSON.stringify(my_pass);
            var my_pass_len=my_pass.length;

            if(my_pass_len<6 ){
              console.log("Came in heere"+my_pass_len);
              alert("The password has to be atleast 6 characters");
            }
          }


          function retype_Check(){
              var new_pass=document.getElementById("my_password").value;
            //console.log(typeof new_pass);
            //var new_pass_string=JSON.stringify(new_pass);
            //console.log(new_pass_string);
            var retyped_pass=document.getElementById("retype_password").value;
            //var retyped_pass_string=JSON.stringify(retyped_pass);
            if (new_pass != retyped_pass){
              alert("Passwords typed are not equal");
              return false;
            }
          }



          function addressline1_Check(){
              var my_new_addressline1=document.getElementById("addressline1").value;
            //var my_new_addressline1_string=JSON.stringify(my_new_addressline1);
            var my_new_addressline1_string_length=my_new_addressline1.length;
             if(my_new_addressline1_string_length> 20 ){
              alert("Your Address Line1 has to be no more than 20-letters" );
            }
          }


          function addressline2_Check(){
              var my_new_addressline2=document.getElementById("addressline2")
            //var my_new_addressline2_string=JSON.stringify(my_new_addressline2)
            var my_new_addressline2_string_length=my_new_addressline2.length;
             if(my_new_addressline2_string_length> 20 ){
              alert("Your Address Line1 has to be no more than 20-letters" );
            }
          }



          function zipcode_Check(){
            var my_new_zipcode=document.getElementById("zip_code").value;
            //var my_new_zipcode_string=JSON.stringify(my_new_zipcode);
            var my_new_zipcode_string_length=my_new_zipcode.length;

            if(my_new_zipcode_string_length!= 5 ){
              alert("The ZIP code has to be 5-digits" );
            }
          }
          function phoneno_Check(){
              var my_new_phoneno=document.getElementById("phone_number").value;
            //var my_phoneno_string=JSON.stringify(my_new_phoneno);
            var my_phoneno_string_length=my_new_phoneno.length;
            console.log("camer in here"+my_phoneno_string_length)
             if(my_phoneno_string_length!= 10 ){

              alert("The Phone-No has to be 10-digits " );
            }
          }


          function res_fname_Check(){
            var my_new_res_fname=document.getElementById("res_fname").value;
            //var my_new_res_fname_string=JSON.stringify(my_new_res_fname);
            var my_new_res_fname_string_length=my_new_res_fname.length;
             if(my_new_res_fname_string_length> 20 ){
              alert("The Responsible Contact's first name has to be no more than 20-letters" );
            }
          }


          function res_lname_Check(){
              var my_new_res_lname=document.getElementById("res_lname").value;
            //var my_new_res_lname_string=JSON.stringify(my_new_res_lname);
            var my_new_res_lname_string_length=my_new_res_lname.length;
             if(my_new_res_lname_string_length> 20 ){
              alert("The Responsible Contact's last name has to be no more than 20-letters" );
            }
          }




          function res_addressline1_Check(){
            var my_new_res_addressline1=document.getElementById("res_address_line1").value;
            //var my_new_res_addressline1_string=JSON.stringify(my_new_res_addressline1);
            var my_new_res_addressline1_string_length=my_new_res_addressline1.length;
             if(my_new_res_addressline1_string_length> 20 ){
              alert("The Responsible Contact's Address Line1 has to be no more than 20-letters" );
            }
          }




          function res_addressline2_Check(){
            var my_new_res_addressline2=document.getElementById("res_address_line2").value;
            //var my_new_res_addressline2_string=JSON.stringify(my_new_res_addressline2);
            var my_new_res_addressline2_string_length=my_new_res_addressline2.length;
              if(my_new_res_addressline2_string_length> 20 ){
              alert("The Responsible Contact's Address Line2 has to be no more than 20-letters" );
            }
          }



          function res_zipcode_Check(){
            var my_new_res_zipcode=document.getElementById("res_zip_code").value;
            //var my_new_res_zipcode_string=JSON.stringify(my_new_res_zipcode);
            var my_new_res_zipcode_string_length=my_new_res_zipcode.length;

            if(my_new_res_zipcode_string_length!= 5 ){
              alert("The  Responsible Contact's ZIP code has to be 5-digits" );
            }
          }


          function res_phoneno_Check(){
            var my_new_res_phoneno=document.getElementById("res_phone_number").value;
            //var my_phoneno_res_string=JSON.stringify(my_new_res_phoneno);
            var my_phoneno_res_string_length=my_new_res_phoneno.length;
              if(my_phoneno_res_string_length!= 10 ){
              alert("The Responsible Contact Phone-No has to be 10-digits " );
            }
          }




          function my_password_visibility() {
            var x = document.getElementById("my_password");
            if (x.type == "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }
        </script>

        <script>
          function retype_password_visibility() {
            var x = document.getElementById("retype_password");
            if (x.type == "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }
        </script>

        <script>
          function retype_password_visibility() {
            var x = document.getElementById("retype_password");
            if (x.type == "password") {
              x.type = "text";
            } else {
              x.type = "password";
            }
          }
        </script>







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
