<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Post extends Model
{
    //
    protected $fillable = [
        'post_id', 'user_id'
    ];
}
