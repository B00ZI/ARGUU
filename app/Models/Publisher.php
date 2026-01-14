<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $fillable = ['name' , 'country'] ;

    public function Book(){
        $this->hasMany(Book::class);
    }
}
