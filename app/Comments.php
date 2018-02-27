<?php

namespace App;

use App\Posts;
use App\User;

class Comments extends Model
{
    public function post()
    {
        return $this->belongsTo(Posts::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
