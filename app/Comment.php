<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content',
        'posts_id'
    ];

    public function post()
    {
        return $this->belongsTo('App\Posts');
    }
}
