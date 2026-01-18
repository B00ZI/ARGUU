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

        'jobs' => Job::with('employer')->latest()->simplePaginate(7)
    ]);
});



//to get the form to creaat  a job
Route::get('/jobs/create', function () {

    return view('jobs.create');
});

// action of creating a job 

Route::post('/jobs', function () {
     
    request()->validate([
         'title'=>['required' , 'min:4' ],
         'salary'=>['required' , 'min:3',   'integer']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});


Route::get('/jobs/{id}/edit', function ($id) {


    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});


Route::patch('/jobs/{id}', function ($id) {

    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')

    ]);


    return redirect("/jobs/{$id}");
});


Route::delete('/jobs/{id}', function ($id) {
    
   
    $job = Job::findOrFail($id);
    $job->delete();


    return redirect("/jobs");
});

//to show 1 job
Route::get('/jobs/{id}', function ($id) {



    $job = Job::find($id);

    return view("jobs.show", ['job' => $job]);
});
