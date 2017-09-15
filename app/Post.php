<?php

namespace App;

use Carbon\Carbon;


class Post extends Model
{

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
}
