<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');



Route::resource('jobs', JobsController::class);



Route::get('/login' , [loginController::class , 'create']);
Route::post('/login' , [loginController::class , 'store']);
Route::post('/logout' , [loginController::class , 'destroy']);


Route::get('/register' , [RegisterController::class , 'create']);
Route::post('/register' , [RegisterController::class , 'store']);



