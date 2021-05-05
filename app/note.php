<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['title', 'user_id', 'description'];

    
    // public function getRouteKeyName()
    // {
    //     return 'title';
    // }
}
