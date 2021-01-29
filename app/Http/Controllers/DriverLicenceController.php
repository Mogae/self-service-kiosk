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


 public function dup()
    {
        
        return view('backend.dl.duplicate');
    }

 public function check_individual(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'surname' => 'required',
        ]);
        if (Auth::attempt(['id' => $request->id, 'surname' => $request->surname])) {
            
            Auth::user()->save();
            return redirect()->route('individual.')->with('success_message', 'You are success fully loged In');
        } else {
            return redirect()->route('individual.')->with('error_message', 'Invalid ID or SURNAME');
        }
    }



















}
