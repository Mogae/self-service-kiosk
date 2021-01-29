<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\test;
class TestController extends Controller
{
    //
     public function getcustomername()
    {
        
       $users=DB::Select('select CUST_NAM from LICENCE');
       var_dump($users);
       return view('test',compact('users'));
}
 
}