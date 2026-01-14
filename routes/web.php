<?php

use Illuminate\Support\Facades\Route;
use App\Models\jobs;




Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view("about");
});

Route::get('/contact', function () {
    return view("contact");
});

Route::get('/jobs', function () {


    return view("jobs", [

        'jobs' => jobs::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {


    $job = jobs::find($id);

    return view("job", ['job' => $job]);
});
