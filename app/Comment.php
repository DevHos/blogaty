<?php

namespace App;

use Carbon\Carbon;


class Comment extends Model
{

    public function posts()
    {
    	return $this->belongsTo(Post::class);
    }
}
