<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 
        'summary',
        'content',
        'user_id',
        'tag_id'
    ];

}
