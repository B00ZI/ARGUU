<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobListing as Job;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("jobs.index", [

            'jobs' => Job::with('employer')->latest()->simplePaginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:4'],
            'salary' => ['required', 'min:3']
        ]);

        Job::create([
            'title' => $request->title,
            'salary' => $request->salary,
            'employer_id' => 1,
        ]);

        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {

        Gate::define('edit-post', function (User $user, Job $job) {

           return  $job->employer->user->is($user);
            
        });


        if (Auth::guest()) {
            return redirect('/login');
        }
          

        Gate::authorize('edit-post' , $job );


        return view('jobs.edit', ['job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'title' => ['required', 'min:4'],
            'salary' => ['required', 'min:3']
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary')

        ]);

        return redirect("/jobs/{$job->id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect("/jobs");
    }
}
