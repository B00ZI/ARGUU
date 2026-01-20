<?php

use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');



Route::resource('jobs', JobsController::class);

Route::get('/login' , function(){
   return view('auth.login') ;
});


Route::get('/register' , function(){
   return view('auth.register') ;
});

