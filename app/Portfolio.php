<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Portfolio extends Model
{
    //
    public function insert_details($fullname,$email){
        $details = DB::table('portfolios')->insert(['cust_id'=>'1', 'fullname'=>'$fullname',
        'email'=>'$email', 'created_at'=> '2021-03-03','updated_at'=> '2021-03-03' ]);

        session()->flash('status','Done');
        //return redirect('/index');
       // return view('');
    }
}
