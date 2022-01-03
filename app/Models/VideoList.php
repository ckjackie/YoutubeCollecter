<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoList extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'count',
        'user_id',
    ];

    //2021.12.29 Relationships
    public function videos()
    {
        return $this->hasMany('App\Video');
    }

    
    public function videolists()
    {
        return $this->belongsTo('App\User');
    }
    
}

