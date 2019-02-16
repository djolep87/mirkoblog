<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;


class CommentsController extends Controller
{
    public function store(Post $post)
    {
        $this->validate(request(), ['name' => 'required', 'body' => 'required|min:2']);

        
        

        $data = request()->only('post_id','name', 'body');
        $comment = \App\Comment::create([
            'post_id' => $post->id,
            'name' => $data['name'],
            'body' => $data['body'],
        ]);

        $comment->save();

        
        // $post->addName(request('name'));    
        // $post->addComment(request('body'));

        return back();
        
    }
}
