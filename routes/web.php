<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

class jobs {
 
   public static function all(){
    return [
        
         
            ['id' => 1, 'title' => 'Director', 'salary' => 50000],
            ['id' => 2, 'title' => 'Programmer', 'salary' => 10000],
            ['id' => 3, 'title' => 'Teacher', 'salary' => 40000],
        
    ]   ; 
   }

}


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
     

    $job = Arr::first(jobs::all() , fn($job)=>$job['id']==$id)  ;
    
    return view("job", ['job' => $job] );


});