<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;



class JobListing extends Model
{
    use HasFactory;

    protected $table = "job_listing";
    protected $primaryKey = 'job_id';
    protected $fillable = ['title', 'salary'];
}
