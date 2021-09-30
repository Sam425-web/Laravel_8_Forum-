<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        $posts = Post::latest()->paginate(5);
        return view('dashboard', compact('posts'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Post $post,Request $request)
    {
        $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $post->create([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'user_id' => $request->user()->id
        ]);

        return redirect(route('dashboard'));
    }

    public function show(Post $post, Comment $comment)
    {
        return view('show', compact('post', 'comment'));
    }

    public function PostComment(Post $post,Request $request)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        $post->comments()->create([
            'user_id' => auth()->id(),
            'comment' => $request->comment
        ]);

        return redirect()->back(); 
    }
}
