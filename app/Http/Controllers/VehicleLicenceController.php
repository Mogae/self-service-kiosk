<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleLicenceController extends Controller
{
    //
    Public function index(){
    	return view('backend.vehicle_licence.pay_vlicence');
    }
}
