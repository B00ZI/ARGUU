<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');



Route::resource('jobs', JobsController::class)->only(['index' , 'show' , 'create']);
Route::resource('jobs', JobsController::class)->except(['index' , 'show' , 'create'])->middleware('auth');



Route::get('/login' , [LoginController::class , 'create'])->name('login');
Route::post('/login' , [LoginController::class , 'store']);
Route::post('/logout' , [LoginController::class , 'destroy']);


Route::get('/register' , [RegisterController::class , 'create']);
Route::post('/register' , [RegisterController::class , 'store']);



