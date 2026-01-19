<?php

use Illuminate\Support\Facades\Route;
use App\Models\JobListing as Job;





Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');





//index
Route::get('/jobs', function () {

    return view("jobs.index", [

        'jobs' => Job::with('employer')->latest()->simplePaginate(7)
    ]);
});



//create
Route::get('/jobs/create', function () {

    return view('jobs.create');
});

// store

Route::post('/jobs', function () {

    request()->validate([
        'title' => ['required', 'min:4'],
        'salary' => ['required', 'min:3']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});


Route::get('/jobs/{job}/edit', function (Job $job) {


    
    return view('jobs.edit', ['job' => $job]);
});


Route::patch('/jobs/{job}', function (Job $job) {

    request()->validate([
        'title' => ['required', 'min:4'],
        'salary' => ['required', 'min:3']
    ]);
    
    

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')

    ]);


    return redirect("/jobs/{$job->id}");
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
