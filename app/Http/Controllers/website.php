<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class website extends Controller
{
    // 
    protected $primaryKey = 'club_id';
    
    function index(Request $request){
    	return view('index');
    }
    
    function contact(Request $request){
        return view('contact');
    }
    
    function submit(Request $request){
        //get name fields
        $name = $request->input('fullname');
        $email = $request->input('email');

        // error messages, when omitted
        $msg =['fullname.required'=> 'Pls enter Fullname',
        'email.required'=>'Kindly enter email address'];
        
        //create validation rules for required  fields
        $valid = $request->validate(['fullname'=>'required|min:5',
        'email'=>'required|email'],$msg);
        session(['msg'=>"Thanks <b>$name</b> for subscribing to my newsletter"]);
        //$request->session()->flash('feedback','Thanks $name for subscribing to my newsletter');
        return redirect(url('/contact'));
    }
  
}
