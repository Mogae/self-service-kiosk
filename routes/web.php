<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//This route opens the main page of our application
Route::get('/', ['as' => 'home', 'uses' => 'App\Http\Controllers\HomeController@index']);

//Route::get('/', function () {
   // return view('home');


//Driver licence routes

Route::get('/dl-renewal', ['as' => 'dl.renewal', 'uses' => 'App\Http\Controllers\DriverLicenceController@index']);
Route::get('/dl-duplicate', ['as' => 'dl.duplicate', 'uses' => 'App\Http\Controllers\DriverLicenceController@dup']);
  
Route::get('/driver-check', ['as' => 'driver.check', 'uses' => 'App\Http\Controllers\DriverLicenceController@check_individual']);


//Test bookings routes, routing  to TestBookingController

Route::get('/theory-booking', ['as' => 'theory.booking', 'uses' => 'App\Http\Controllers\TestBookingController@index']);
Route::get('/practical-booking', ['as' => 'practical.booking', 'uses' => 'App\Http\Controllers\TestBookingController@prac']);




//Vehicle Licence renewal routes
Route::get('/vehicle-licence', ['as' => 'vehicleL.renew', 'uses' => 'App\Http\Controllers\VehicleLicenceController@index']);



//Flagging status routes
Route::get('/flagging-status', ['as' => 'flagging.status', 'uses' => 'App\Http\Controllers\FlaggingController@index']);


//Roadworthy routes
Route::get('/book-test', ['as'=> 'book.test', 'uses'=> 'App\Http\Controllers\RoadworthyController@index']);
Route::get('/print-certificate', ['as'=>'print.certificate', 'uses'=> 'App\Http\Controllers\RoadworthyController@cert']);


Route::get('/data', ['as'=> 'data.test', 'uses'=> 'App\Http\Controllers\TestController@getcustomername']);