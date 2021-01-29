<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestBookingController extends Controller
{
    //
     public function index()
    {
        
        return view('backend.test_bookings.theory_bookings');
}
     public function prac()
    {
        
        return view('backend.test_bookings.practical_test');
}
}