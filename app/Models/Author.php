<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = [];

    public function book() 
    {
        return $this->hasMany(Book::class);
    }
}
