<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Mail;
// use App\Http\Controllers\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function basic_email(request $request) {
   	
   		$arr = $request->keys();
   		$x = str_replace('_', '.', $arr[0]);
   		session(["mail"=>$x]);
 
   	
      $data = array('name'=>"Admin");
   
      Mail::send('mail', $data, function($message ) {

         $message->to(session("mail"), 'Sign Up')->subject
            ('Welcome to Wisteria Housing');
         $message->from('wisteriahosuing@gmail.com','Admin');
      });
      
      return redirect('login');
   }
   
}