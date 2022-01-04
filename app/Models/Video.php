<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    //2021.12.29 Relationships
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
