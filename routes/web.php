<?php

use Illuminate\Support\Facades\Route;
use App\Models\JobListing as Job;




Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view("about");
});

Route::get('/contact', function () {
    return view("contact");
});




//to get all jobs
Route::get('/jobs', function () {

    return view("jobs.index", [

        'jobs' => Job::with('employer')->simplePaginate(7)
    ]);
});



//to get the form to creaat  a job
Route::get('/jobs/create', function () {

    return view('jobs.create');
});

// action of creating a job 

Route::post('/jobs', function(){

dd($_REQUEST);

} );


//to show 1 job
Route::get('/jobs/{id}', function ($id) {



    $job = Job::find($id);


    return view("jobs.show", ['job' => $job]);
});
