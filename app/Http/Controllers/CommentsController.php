<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use App\Posts;

class CommentsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Posts $post)
    {
        $this->validate(request(), [
                    'content' => 'required'
            ]);

        $post->addComment(request(
                [
                    'content',
                    'user_id'
                ]
            ));

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comments  $comments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comments $comment)
    {
        Comments::destroy($comment->id);

        return back();
    }
}
