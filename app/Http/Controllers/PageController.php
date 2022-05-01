<?php

namespace App\Http\Controllers;
use views\pages\homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class PageController extends Controller
{
    public function homepage(){
        return view('pages.homepage');
    }
    public function aboutus(){
        return view('pages.aboutus');
    }
public function contactus(){
        return view('pages.contactus');
    }
    public function btnsubmit(request $request)
    {
        $firstname = $request->input('firstname');
          $lastname = $request->input('lastname');
          $emailId = $request->input('email');
          $phoneNo = $request->input('phone_number');
          $roles = $request->input('Roles');
          $comment = $request->input('comment');
          



         DB::insert("INSERT INTO contactus (firstname, lastname,email,phone,comment,role) VALUES (?,?,?,?,?,?)",[$firstname,$lastname,$emailId,$phoneNo,$comment,$roles]);
         return redirect('contactus');
   }

   public function signup(){
        return view('pages.signup');
    }

    public function signupinsert(request $request){
      $errors = [];
        $my_result="";
        $fname_empt_err = "";
        $lname_empt_err = "";
        $fname_alpha_err = "";
        $lname_alpha_err = "";
        $res_fname_empt_err = "";
        $res_lname_empt_err = "";
        $res_fname_alpha_err = "";
        $res_lname_alpha_err = "";
        $email_empt_err = "";
        $email_exists_err = "";
        $email_invalid_err = "";
        $pass_req_err = "";
        $pass_len_err = "";
        $pass_num_err = "";
        $pass_capslet_err = "";
        $pass_lowerlet_err = "";
        $pass_dont_match_err = "";
        $phone_req_err = "";
        $phone_inv_err = "";
        $address1_req_err = "";
        $address2_req_err = "";
        $zipcode_req_err = "";
        $zipcode_invalid_err = "";
        $res_phone_req_err = "";
        $res_phone_inv_err = "";
        $res_address1_req_err = "";
        $res_address2_req_err = "";
        $res_zipcode_req_err = "";
        $res_zipcode_invalid_err = "";
        $role_req_err = "";
        $apartment_req_err = "";
        $building_req_err = "";
        $subdiv_req_err = "";
        $services_req_err = "";

          $firstname = $request->input('fname');
          $lastname = $request->input('lname');
          $emailId = $request->input('email');
          $password = $request->input('my_password');
          $retype_password = $request->input('retype_password');
          $addressline1 = $request->input('addressline1');
          $addressline2 = $request->input('addressline2');
          $Country = $request->input('Country');
          $State = $request->input('State');
          $zip_code = $request->input('zip_code');

          $phone_number = $request->input('phone_number');
          $res_fname = $request->input('res_fname');
          $res_lname = $request->input('res_lname');
          $res_address_line1 = $request->input('res_address_line1');
          $res_address_line2 = $request->input('res_address_line2');
          $res_zip_code = $request->input('res_zip_code');

          $res_phone_number = $request->input('res_phone_number');
          $Role = $request->input('Role');
          $Subdivisions = $request->input('Subdivisions');

          $buildings = $request->input('buildings');
          $apartments = $request->input('apartments');
          $Services = $request->input('Services');

        
        
        
        $user_exists = DB::select('SELECT * FROM users_info_table WHERE EmailId=?',[$emailId]);
        
        
        
      
      if ($user_exists)
      { 
          $email_exists_err = 'Email already exists ';
          return view('pages.signup', ['emailexists'=> $email_exists_err]);
      }
      else{
      if (empty($firstname))
      { 
          
          $fname_empt_err = '<div class = "errors"> First Name is required </div>';
          
          array_push($errors, "*First Name is required"); 
          
        }
      if (!preg_match("/^[a-zA-Z-']*$/",$firstname)) 
      {
        $fname_alpha_err = '<div class = "errors"> Only Alphabets are allowed for FirstName </div>';  
        array_push($errors, "*Only Alphabets are allowed for FirstName ");
      }
      
      
      if (empty($lastname))
      { 
          $lname_empt_err = '<div class = "errors"> Last Name is required </div>';
          array_push($errors, "*Last Name is required"); 
          
        }
      if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname))
      {
          $lname_alpha_err = '<div class = "errors"> Only Alphabets are allowed for FirstName </div>';  
        array_push($errors, "*Only Alphabets are allowed for LastName ");
      }
      
      
      
      if (empty($emailId)) 
      {
          $email_empt_err = '<div class = "errors"> Email is required </div>';  
          array_push($errors, "*Email is required");
        }
          
          
      elseif (!filter_var($emailId, FILTER_VALIDATE_EMAIL)) 
      {
        $email_invalid_err = '<div class = "errors"> Invalid email format </div>';  
        array_push($errors, "*Invalid email format"); 
      }
      
      
      if (empty($password))
      { 
          $pass_req_err = '<div class = "errors"> Password is required </div>';
          array_push($errors, "*Password is required");
    }
          
          
      elseif (strlen($password) <= 8 || strlen($password) >= 11)
      {
          $pass_len_err = '<div class = "errors"> Your Password Must between 8 to 10 Characters! </div>';
        array_push($errors, "*Your Password Must between 8 to 10 Characters!"); 
        }
    elseif(!preg_match("#[0-9]+#",$password)) {
        $pass_num_err = '<div class = "errors"> Your Password Must Contain At Least 1 Number!</div>';
        array_push($errors, "*Your Password Must Contain At Least 1 Number!");
        }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        $pass_capslet_err = '<div class = "errors"> Your Password Must Contain At Least 1 Capital Letter!</div>';
        array_push($errors, "*Your Password Must Contain At Least 1 Capital Letter!");
        }
    elseif(!preg_match("#[a-z]+#",$password)) {
         $pass_lowerlet_err = '<div class = "errors"> Your Password Must Contain At Least 1 Lowercase Letter!</div>';
        array_push($errors, "*Your Password Must Contain At Least 1 Lowercase Letter!");
        }
      elseif ($password != $retype_password) {
          $pass_dont_match_err = '<div class = "errors"> The two passwords do not match</div>';
        array_push($errors, "*The two passwords do not match");
      }
      
      
      
      
      if (empty($phone_number)) { 
           $phone_req_err = '<div class = "errors"> Phone number is required</div>';
          array_push($errors, "*Phone number is required");
          }
      elseif(!preg_match("/^[0-9]{10}$/", $phone_number)) 
      {
          $phone_inv_err = '<div class = "errors"> Phone number is invalid</div>';
        array_push($errors, "*Phone number is invalid");
      }
      
      
      
      
       if (empty($addressline1)) 
       { 
           $address1_req_err = '<div class = "errors"> Address line1 is required</div>';
        array_push($errors, "*Address line1 is required"); 
          
       }
      if (empty($addressline2)) 
      { 
          $address2_req_err = '<div class = "errors"> Address line2 is required</div>';
        array_push($errors, "*Address line2 is required"); 
          
      }
      if (empty($zip_code)) 
      { 
          $zipcode_req_err = '<div class = "errors"> Zip code is required</div>';
        array_push($errors, "*Zip code is required"); 
          
      }
      elseif(!preg_match("/^[0-9]{5}$/", $zip_code)) 
      {
          $zipcode_invalid_err = '<div class = "errors"> Zip code is invalid</div>';
        array_push($errors, "*Zip code is invalid");
      }
      
      if (empty($res_fname))
      { 
          $res_fname_empt_err = '<div class = "errors"> Responsible contact First Name is required </div>';
          array_push($errors, "*Responsible contact First Name is required"); 
          
        }
      if (!preg_match("/^[a-zA-Z-' ]*$/",$res_fname)) 
      {
          $res_fname_alpha_err = '<div class = "errors"> Only Alphabets are allowed for FirstName </div>';
        array_push($errors, "*Only Alphabets are allowed for FirstName ");
      }
      
      
      if (empty($res_lname))
      { 
          $res_lname_empt_err = '<div class = "errors"> Responsible contact Last Name is required </div>';
          array_push($errors, "*Responsible contact Last Name is required"); 
          
        }
      if (!preg_match("/^[a-zA-Z-' ]*$/",$res_lname))
      {
          $res_lname_alpha_err = '<div class = "errors"> Only Alphabets are allowed for LastName </div>';
        array_push($errors, "*Only Alphabets are allowed for LastName ");
      }
      
      
      if (empty($res_address_line1)) 
       { 
           $res_address1_req_err = '<div class = "errors">Responsible contact Address line1 is required</div>';
        array_push($errors, "*Responsible contact Address line1 is required"); 
          
       }
      if (empty($res_address_line2)) 
      { 
          $res_address2_req_err = '<div class = "errors">Responsible contact Address line2 is required</div>';
        array_push($errors, "*Responsible contact Address line2 is required"); 
          
      }
      if (empty($res_zip_code)) 
      { 
          $res_zipcode_req_err = '<div class = "errors"> Zip code is required</div>';
        array_push($errors, "*Zip code is required"); 
          
      }
      elseif(!preg_match("/^[0-9]{5}$/", $res_zip_code)) 
      {
          $res_zipcode_invalid_err = '<div class = "errors"> Zip code is invalid</div>';
        array_push($errors, "*Zip code is invalid");
      }
      
      if (empty($res_phone_number)) { 
        $res_phone_req_err = '<div class = "errors"> Responsible contact Phone number is required</div>';
          array_push($errors, "*Responsible contact Phone number is required");
          }
      elseif(!preg_match("/^[0-9]{10}$/", $res_phone_number)) 
      {
        $res_phone_inv_err = '<div class = "errors"> Responsible contact Phone number is invalid</div>';
        array_push($errors, "*Responsible contact Phone number is invalid");
      }
      
      if (empty($Role))
      { 
          $role_req_err = '<div class = "errors"> Role is required</div>';
          array_push($errors, "*Role is required"); 
          
      }
      if (empty($apartments))
      { 
          $apartment_req_err = '<div class = "errors"> Apartment Number is required</div>';
          array_push($errors, "*Apartment Number is required"); 
          
      }
      if (empty($buildings))
      { 
          $building_req_err = '<div class = "errors"> Building Name is required</div>';
          array_push($errors, "*Building Name is required"); 
          
      }
      if (empty($Subdivisions))
      { 
          $subdiv_req_err = '<div class = "errors"> Subdivision Name is required</div>';
          array_push($errors, "*Subdivision Name is required"); 
          
      }
      if (empty($Services))
      { 
          $services_req_err = '<div class = "errors"> Service Type is required</div>';
          array_push($errors, "*Service Type is required"); 
          
      }
      
      
    
        
        $error_count = count($errors);

        

      if ($error_count == 0) 
      {
        $Name = $firstname.' '. $lastname;
        $Res_name = $res_fname.' '.$res_lname;
          
          DB::insert("INSERT INTO users_info_table (Name, EmailId,Password,Role,Service,MobileNo,SubDivName,BuildName,ApartNo,Resp_contact_name,Resp_contact_mobile_no) VALUES (?,?,?,?,?,?,?,?,?,?,?)",[$Name,$emailId,$password,$Role,$Services,$phone_number,$Subdivisions,$buildings,$apartments,$Res_name,$res_phone_number]);

         


          return redirect()->route('MailController',[$emailId]);   
        
    }
    else
    {
      return view('pages.signup', ['errormessage'=> $errors]);

    }
     }



    }

     

    
    public function login(request $request){
        return view('pages.login');
    }

    public function logininsert(request $request){
      $errors_login = [];
            $Email_Id=$request->input('Username');
            $Password=$request->input('Password');
            $Role=$request->input('roles');

            if (empty($Email_Id))
            { 
              $fname_empt_err = '<div class = "errors"> First Name is required </div>';
              array_push($errors_login, "*Username Name is required"); 
            }

            if (empty($Password))
            { 
              $fname_empt_err = '<div class = "errors"> First Name is required </div>';
              array_push($errors_login, "*Password is required"); 
            }

            if (empty($Role))
            { 
              $fname_empt_err = '<div class = "errors"> First Name is required </div>';
              array_push($errors_login, "*Role is required"); 
            }
            
            $error_count = count($errors_login);

        

            if ($error_count == 0) 
            {

            $fetchedEmail = DB::select('SELECT EmailId from users_info_table where EmailId=?',[$Email_Id]);
            $fetchedRole = DB::select('SELECT Role from users_info_table where Role=?',[$Role]);
            $fetchedPswd = DB::select('SELECT Password from users_info_table where Password=?',[$Password]);

            $fetcem = $fetchedEmail[0]->EmailId;
            $fetcrol = $fetchedRole[0]->Role;
            $fetcpss = $fetchedPswd[0]->Password;

            $request->session()->put('email', $Email_Id);

            
            if($fetcem==$Email_Id AND $fetcpss==$Password AND $fetcrol==$Role)
            {
              if($Role=='Admin')
              {
                return redirect('/adminhome');
              }
              else if($Role=='Subdivision')
              {

                return redirect('/subdivisionhome');
              }
              else if($Role=='Building')
              {
                return redirect('/buildinghome');
              }
              else if($Role=='Apartment')
              {
                return redirect('/apartmenthome');
              }
            }
          }
            else
            {
              
              return view('pages.login',['errors_login'=>$errors_login]);
            }
      
          }


    

    

    public function adminhome(request $request){
        return view('pages.adminhome');
    }

    public function admindashboard(request $request){
        $user_id = $request->session()->get('email');
       
        
        $internet_result = DB::select(DB::raw('SELECT SUM(Internet_Usage) AS Internet_sum FROM created_reports')); 

        $water_result = DB::select(DB::raw('SELECT SUM(Water_Usage) AS Water_sum FROM created_reports'));

        $Electricity_result = DB::select(DB::raw('SELECT SUM(Electricity_Usage) AS Electricity_sum FROM created_reports'));

        $Gas_result = DB::select(DB::raw('SELECT SUM(Gas_Usage) AS Gas_sum FROM created_reports'));
        

        return view('pages.admindashboard', ['my_Internet_sum'=> ($internet_result[0]->Internet_sum)*0.1,'my_Water_sum'=> ($water_result[0]->Water_sum)*0.1,'my_Electricity_sum'=> ($Electricity_result[0]->Electricity_sum)*0.1,'my_Gas_sum'=> ($Gas_result[0]->Gas_sum)*0.1]);
    }



    //Displays All the Owner Details in Admin Home
    public function ownerdetails(request $request)
    {
      $records = DB::select(DB::raw("SELECT * from users_info_table where Role in ('Apartment' , 'Building', 'Subdivision') "));
      
      return view('pages.ownerdetails', ['records'=> $records]);
    }


    // Deletes all the selected users in OwnerDetails page of Admin Portal
    public function Delete(request $request)
    {
      $number_ofCheckboxes=count($request->input('records'));
    $i=0;
    while($i < $number_ofCheckboxes){
        
        $keytoDelete=$request->input('records')[$i];
 
      
        DB::delete("DELETE from users_info_table where EmailId='$keytoDelete'");
        $i++;        
    }

    $records = DB::select(DB::raw("SELECT * from users_info_table where Role in ('Apartment' , 'Building', 'Subdivision') "));
        
    return view('pages.ownerdetails', ['records'=> $records]);
    
    }


    
    public function messages(request $request){
      
      $records = DB::select(DB::raw("SELECT * from contactus"));
        return view('pages.messages',['records'=>$records]);
        
    }

    public function sendresponse(request $request)
    {
      $emailId = $request->records[0];
      $reply = $request->Reply;
      DB::delete('DELETE from contactus where email=?',[$emailId]);
      return redirect()->route('ResponseController',[$emailId,$reply]);
    }
    

    public function subdivisionhome(){
        return view('pages.subdivisionhome');
    }

    public function subdivisiondashboard()
    {
      $internet_result = DB::select(DB::raw('SELECT SUM(Internet_Usage) AS Internet_sum FROM created_reports')); 

      $water_result = DB::select(DB::raw('SELECT SUM(Water_Usage) AS Water_sum FROM created_reports'));

      $Electricity_result = DB::select(DB::raw('SELECT SUM(Electricity_Usage) AS Electricity_sum FROM created_reports'));

      $Gas_result = DB::select(DB::raw('SELECT SUM(Gas_Usage) AS Gas_sum FROM created_reports'));
        

      return view('pages.subdivisiondashboard', ['my_Internet_sum'=> ($internet_result[0]->Internet_sum)*0.1,'my_Water_sum'=> ($water_result[0]->Water_sum)*0.1,'my_Electricity_sum'=> ($Electricity_result[0]->Electricity_sum)*0.1,'my_Gas_sum'=> ($Gas_result[0]->Gas_sum)*0.1]);


    }

    public function residentdetails()
    {

      $records = DB::select(DB::raw("SELECT * from users_info_table where Role in ('Apartment' , 'Building') "));
      
      return view('pages.subdivision_resident_details', ['records'=> $records]);

    }

    public function createreports(request $request)
    {
      $reports = [];
      if(!empty($request->input('Building_name'))){
        $Buildname=$request->input('Building_name');
      
        $InternetUsage=$request->input('Internet_use');
        $WaterUsage=$request->input('Water_use');
        $ElectricityUsage=$request->input('Electricity_use');
        $GasUsage=$request->input('Gas_use');

        $totalExpend =   $InternetUsage*5 +  $WaterUsage*5 + $ElectricityUsage*10 + $GasUsage*5;
        $request->input('Building_name');
        DB::insert("INSERT INTO created_reports (Building_Name, Internet_Usage,Water_Usage,Electricity_Usage,Gas_Usage,Total_Expenditure) VALUES (?,?,?,?,?,?)",[$Buildname,$InternetUsage,$WaterUsage,$ElectricityUsage,$GasUsage,$totalExpend]);

        
      }
     
      $reports = DB::select(DB::raw("SELECT * from created_reports"));
      return view('pages.subdivision_create_reports', ['reports'=> $reports]);

    }

    public function deletereports(request $request)
    {
      $number_ofCheckboxes=count($request->input('new_records'));
      $i=0;
      while($i < $number_ofCheckboxes){
        
        $keytoDelete=$request->input('new_records')[$i];
 
      
        DB::delete("DELETE from created_reports where Building_name='$keytoDelete'");
        $i++;        
    }

     $reports = DB::select(DB::raw("SELECT * from created_reports"));
     return view('pages.subdivision_create_reports', ['reports'=> $reports]);    
    }

    public function subdivcontactsuperuser(request $request)
    {
      $message = "";
      if(!empty($request->input('firstname'))){
      $fname=$request->input('firstname');
      $lname=$request->input('lastname');
      $emailId=$request->input('email');
      $phoneNo=$request->input('phone');
      $roles=$request->input('Roles');
      $comment=$request->input('comment');

      DB::insert("INSERT INTO contactus (firstname, lastname,email,phone,comment,Role) VALUES (?,?,?,?,?,?)",[$fname,$lname,$emailId,$phoneNo,$comment,$roles]);
      $message = "We will get back to you soon. Thank you!";
    }
      return view('pages.Subdivision_contact_superuser',['message'=>$message ]);
    }

    public function buildinghome()
    {
      return view('pages.buildinghome');
    }

    public function buildingcontactus(request $request)
    {
      $message = '';
      if(!empty($request->input('firstname'))){
      $fname=$request->input('firstname');
      $lname=$request->input('lastname');
      $emailId=$request->input('email');
      $phoneNo=$request->input('phone');
      $roles=$request->input('Roles');
      $comment=$request->input('comment');

      DB::insert("INSERT INTO contactus (firstname, lastname,email,phone,comment,Role) VALUES (?,?,?,?,?,?)",[$fname,$lname,$emailId,$phoneNo,$comment,$roles]);
      $message = "We will get back to you soon. Thak you!";
    }
      return view('pages.buildingcontactus',['message'=>$message ]);
    }

    public function buildingdashboard(request $request)
    {
      $email_id = $request->session()->get('email');

      $buildname_object = DB::select('SELECT BuildName FROM users_info_table WHERE EmailId=:email_id', ['email_id' => $email_id]);

      $buildName = $buildname_object[0]->BuildName;

      $InternetUsage = DB::select('SELECT Internet_Usage AS Internet_sum FROM created_reports WHERE Building_Name =:buildname',['buildname'=>$buildName]);

      $WaterUsage = DB::select('SELECT Water_Usage AS Water_sum FROM created_reports WHERE Building_Name =:buildname',['buildname'=>$buildName]);

      $ElectrictyUsage = DB::select('SELECT Electricity_Usage AS Electricity_sum FROM created_reports WHERE Building_Name =:buildname',['buildname'=>$buildName]);

      $GasUsage = DB::select('SELECT Gas_Usage AS Gas_sum FROM created_reports WHERE Building_Name =:buildname',['buildname'=>$buildName]);

      return view('pages.buildingdashboard', ['buildname'=> $buildName,'my_Internet_sum'=> ($InternetUsage[0]->Internet_sum)*0.1,'my_Water_sum'=> ($WaterUsage[0]->Water_sum)*0.1,'my_Electricity_sum'=> ($ElectrictyUsage[0]->Electricity_sum)*0.1,'my_Gas_sum'=> ($GasUsage[0]->Gas_sum)*0.1]);
    }

    public function Building_owner_apartmentdetails(request $request)
    {
      $email_id = $request->session()->get('email');

      $buildname_object = DB::select('SELECT BuildName FROM users_info_table WHERE EmailId=:email_id', ['email_id' => $email_id]);

      $buildName = $buildname_object[0]->BuildName;

      $apartment = 'Apartment';

      $aptrecords = DB::select('SELECT * FROM users_info_table WHERE Role="Apartment" and BuildName = ?', [$buildName]);

    
      return view('pages.Building_owner_apartmentdetails', ['aptrecords'=> $aptrecords]);

    }

    public function buildingviewcomplaints(request $request)
    {

      $email_id = $request->session()->get('email');
      
      $buildname_object = DB::select('SELECT BuildName FROM users_info_table WHERE EmailId=:email_id', ['email_id' => $email_id]);
      
      $buildName = $buildname_object[0]->BuildName;

      $complaints = DB::select('SELECT * from filecomp where Building_Name=:buildname',['buildname'=>$buildName]);
      return view('pages.buildingviewcomplaints',['complaints'=>$complaints]);
    }

    public function viewcomplaintsresponse(request $request)
    {

      $emailId = $request->complaints[0];
      $reply = $request->Reply;
      DB::delete('DELETE from filecomp where email=?',[$emailId]);
      return redirect()->route('ComplainResponseController',[$emailId,$reply]);

    }

    public function apartmenthome()
    {
      return view('pages.apartmenthome');

    }

    public function apartmentdashboard(request $request)
    {
      $email_id = $request->session()->get('email');

      $comb_object = DB::select('SELECT BuildName, ApartNo FROM users_info_table WHERE EmailId=:email_id', ['email_id' => $email_id]);

      $buildName = $comb_object[0]->BuildName;
      $apartNo = $comb_object[0]->ApartNo;

      $service_obj = DB::select('SELECT Service FROM users_info_table WHERE EmailId= ?',[$email_id]);

      $serviceName = $service_obj[0]->Service;

      $count_obj = DB::select('SELECT count(*) as COUNT from users_info_table where Service=? ',[$serviceName]);

      $service_count = $count_obj[0]->COUNT;

      $usage_obj = DB::select('SELECT Internet_usage,Water_Usage, Electricity_Usage, Gas_Usage  FROM created_reports WHERE Building_Name=?', [$buildName]);

      $Internet_usage = $usage_obj[0]->Internet_usage;

      $Water_Usage = $usage_obj[0]->Water_Usage;

      $Electricity_Usage = $usage_obj[0]->Electricity_Usage;

      $Gas_Usage = $usage_obj[0]->Gas_Usage;

      if ($serviceName == "Building's services"){
        $SumBuildServices = $Water_Usage*5 + $Electricity_Usage*10+ $Gas_Usage*5;
        $buildTotWater = round(($service_count/$Water_Usage)*100,0);
        $buildTotElec = round(($service_count/$Electricity_Usage)*100,0);
        $buildTotGas = round(($service_count/$Gas_Usage)*100,0);
        $buildTotInt = 0;
    }
    else{
        $SumBuildServices = $Internet_usage*5 + $Water_Usage*5 + $Electricity_Usage*10+ $Gas_Usage*5;
        $buildTotWater = round(($service_count/$Water_Usage)*100,0);
        $buildTotElec = round(($service_count/$Electricity_Usage)*100,0);
        $buildTotGas = round(($service_count/$Gas_Usage)*100,0);
        $buildTotInt = round(($service_count/$Internet_usage)*100,0);
    }
    $resultantShare = $SumBuildServices / $service_count;


      return view('pages.apartmentdashboard',['buildTotWater'=>$buildTotWater,'buildTotElec'=>$buildTotElec,'buildTotGas'=>$buildTotGas,'buildTotInt'=>$buildTotInt,'resultantShare'=>$resultantShare,'buildName'=>$buildName, 'apartNo'=>$apartNo]);
    }

    public function Apartment_owner_file_complaint(request $request)
    {
      $message = "";
      if(!empty($request->input('firstname'))){
      $fname=$request->input('firstname');
      $lname=$request->input('lastname');
      $emailId=$request->input('email');
      $phoneNo=$request->input('phone');
      $Buildname=$request->input('Buildings');
      $Apartment=$request->input('Apartments');
      $comment=$request->input('comment');

      DB::insert("INSERT INTO filecomp (firstname, lastname,email,Issue, Phone_Number, Building_Name, Apartment_Number) VALUES (?,?,?,?,?,?,?)",[$fname,$lname,$emailId,$comment,$phoneNo,$Buildname,$Apartment]);
      $message = "We will get back to you soon. Thank you!";
    }
      return view('pages.Apartment_owner_file_complaint',['message'=>$message]);

    }


    }