<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class ComplainResponseController extends Controller
{
    public function complainresponse(request $request) {
   		$arr = $request->keys();
   		$email = str_replace('_', '.', $arr[0]);
   		$response = str_replace('_',' ',$arr[1]);
   		session(["email"=>$email]);
   		session(["response"=>$response]);

   		$data = array('name'=>"Building Admin");
   
      Mail::send('complainresponse', $data, function($message ) {

         $message->to(session("email"), 'Sign Up')->subject
            ('Response for your Query');
         $message->from('wisteriahosuing@gmail.com','Building Admin');
      });

      return redirect('buildingviewcomplaints')->with('request',session("email"));
}
}
