<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;
use App\Models\JobListing as Job;





Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');





//index
Route::get('/jobs',[JobsController::class , 'index']);
Route::get('/jobs/create',[JobsController::class , 'create']);
Route::post('/jobs',[JobsController::class , 'store']);
Route::get('/jobs/{job}',[JobsController::class , 'show']);
Route::get('/jobs/{job}/edit',[JobsController::class , 'edit']);
Route::patch('/jobs/{job}',[JobsController::class , 'update']);
Route::delete('/jobs/{job}',[JobsController::class , 'destroy']);


