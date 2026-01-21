<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('/jobs', [JobsController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobsController::class, 'create'])->name('jobs.create');

Route::post('/jobs', [JobsController::class, 'store'])
->middleware('auth')
->name('jobs.store');

Route::get('/jobs/{job}', [JobsController::class, 'show'])->name('jobs.show');

Route::get('/jobs/{job}/edit', [JobsController::class, 'edit'])
->middleware('auth')
->can('edit', 'job')
->name('jobs.edit');

Route::put('/jobs/{job}', [JobsController::class, 'update'])
->middleware('auth')
->can('edit', 'job')
->name('jobs.update');

Route::delete('/jobs/{job}', [JobsController::class, 'destroy'])
->middleware('auth')
->can('edit', 'job')
->name('jobs.destroy');


Route::get('/login' , [LoginController::class , 'create'])->name('login');
Route::post('/login' , [LoginController::class , 'store']);
Route::post('/logout' , [LoginController::class , 'destroy']);


Route::get('/register' , [RegisterController::class , 'create']);
Route::post('/register' , [RegisterController::class , 'store']);



