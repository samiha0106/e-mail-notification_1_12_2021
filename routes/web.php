<?php

use App\Http\Controllers\NetworkController;
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

// Route::get('/', function () {
  
//   // \Illuminate\Support\Facades\Mail::send(new \App\Mail\Notify());

//     return view('welcome');
// });

    Route::get('/','NetworkController@Network');
       
  // \Illuminate\Support\Facades\Mail::send(new \App\Mail\Notify());
    
      
    

   
