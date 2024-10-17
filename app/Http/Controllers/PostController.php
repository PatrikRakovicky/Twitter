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
        return view('post.show', ['post' => $post]);
    }

    public function edit(Post $post) {
        $editing = true;
        return view('post.show', compact('post', 'editing'));
    }

    public function update(Post $post) {

        request() -> validate([
            'content' => 'required|min:1|max:255'
        ]);

        $post -> content = request() -> get('content', '');
        $post -> save();

        return redirect() -> route('post.show', $post -> id)->with('success', "Idea updated successfully!");
    }
}