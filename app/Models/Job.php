<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;





class Job extends Model
{

protected $table = "job_listing";
protected $primaryKey = 'job_id';
protected $fillable = ['title' , 'salary'];



}
