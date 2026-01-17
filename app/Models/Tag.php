<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JobListing;


class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    public function joblisting(){
        return $this->belongsToMany(JobListing::class ,'job_listing_tag' ,  'tag_id'  , 'job_listing_id') ;
    }
}
