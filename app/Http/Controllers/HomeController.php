<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    //this is done after query has been written in the model, the query function gets called here
    public function create(Request $request, Portfolio $details){ //Club $club is typehinting $club->insert
        if($request->isMethod('get')){
            echo('kindly fill newsletter');
        }else{
            //echo'form was submitted';
            $fullname= $request->input('fullname');
            $email = $request->input('email');
            //$all = $request->input(); similar to $_POST
            $details->insert_details($fullname,$email);
        }
        // return view('newclub');
    }
}
