<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class ResponseController extends Controller
{
	public function response(request $request) {
   		$arr = $request->keys();
   		$email = str_replace('_', '.', $arr[0]);
   		$response = str_replace('_',' ',$arr[1]);
   		session(["email"=>$email]);
   		session(["response"=>$response]);

   		$data = array('name'=>"Admin");
   
      Mail::send('response', $data, function($message ) {

         $message->to(session("email"), 'Sign Up')->subject
            ('Response for your Query');
         $message->from('wisteriahosuing@gmail.com','Admin');
      });

      return redirect('messages');
   		
   }
    //
}
