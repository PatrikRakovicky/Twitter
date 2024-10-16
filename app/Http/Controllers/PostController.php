<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store() {
        request() -> validate([
            'content' => 'required|min:1|max:255'
        ]);

        Post::create([
            'content' => request() -> get('content', ''),
            'likes' => 0, 
        ]);

        return redirect() -> route('dashboard.index') -> with('success', 'Post created successfully');
    }

    public function destroy(Post $post) {
        $post -> delete();

        return redirect() -> route('dashboard.index') -> with('success', 'Post deleted successfully');
    }

    public function show(Post $post) {
        return view('viewed-post', ['post' => $post]);
    }
}