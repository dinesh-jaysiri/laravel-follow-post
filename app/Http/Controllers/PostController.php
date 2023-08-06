<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showSinglePost(Post $post)
    {
        return view('single-post', ['post' => $post]);
    }

    public function createPost(Request $request)
    {
        $incomingField = $request->validate([
            'body' => 'required',
            'title' => 'required',
        ]);

        $incomingField['body'] = strip_tags($incomingField['body']);
        $incomingField['title'] = strip_tags($incomingField['title']);
        $incomingField['user_id'] = auth()->id();

        $post = Post::create($incomingField);

        return redirect("/post/{$post->id}")->with('success', 'Successfully created New post.');

    }

    public function showCreatePostPage(){
        return view('create-post');
    }
}