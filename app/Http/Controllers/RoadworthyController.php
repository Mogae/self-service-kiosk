<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoadworthyController extends Controller
{
    //
    Public function index(){

    	return view('backend.roadworthy.book_test');
    }
    
    Public function cert(){
    	return view ('backend.roadworthy.print_certificate');
    }
}
