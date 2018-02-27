<?php

namespace App;

use App\User;
use App\Comments;

class Posts extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }


    public function addComment($content)
    {
        $this->comments()->create(
                [
                    'content' => request('content'),
                    'user_id' => auth()->id()
                ]
            );
    }
}
