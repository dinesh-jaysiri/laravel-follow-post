<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function search(Request $request)
    {
        $incomingField = $request->validate([
            'search' => ['max:300']
        ]);

        $posts=[];

        if($incomingField['search']){
            $posts = Post::search($incomingField['search'])->paginate(2);
        }else{
             $user = User::find(auth()->user()->id);
             $posts = $user->feedPosts()->latest()->paginate(2);
        }

        return view('home-feed', ["feedPosts" => $posts, 'search' => $incomingField['search']]);
    }

    public function getSearch(Request $request){

        $posts = Post::search($request->query('query'))->paginate(2);
        return view('home-feed', ["feedPosts" => $posts, 'search' => $request->query('query')]);
    }

    public function deletePost(Request $request, Post $post)
    {

        // if ($request->user()->cannot('update', $post)) {
        //     abort(403);
        // }
        $post->delete();

        return redirect('/profile/' . auth()->user()->username)->with('success', 'Successfully Deleted Post.');

    }
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

    public function showCreatePostPage()
    {
        return view('create-post');
    }

    public function showEditPostPage(Post $post)
    {
        return view('edit-post', ['post' => $post]);
    }

    public function updatePost(Post $post, Request $request)
    {
        $incomingField = $request->validate([
            'body' => 'required',
            'title' => 'required',
        ]);

        $incomingField['body'] = strip_tags($incomingField['body']);
        $incomingField['title'] = strip_tags($incomingField['title']);


        $post->update($incomingField);

        return redirect("/post/{$post->id}")->with('success', 'Successfully Update post.');
    }
}