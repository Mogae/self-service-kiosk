<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverLicenceController extends Controller
{
    //
    public function index()
    {
        
        return view('backend.dl.renewal');
    }
}
