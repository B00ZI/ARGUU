<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [ 'title', 'author', 'pages', 'published_year' , 'publisher_id'];

    public function Publisher(){

        return $this->belongsTo(Publisher::class);
    }
}

