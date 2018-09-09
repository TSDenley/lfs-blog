<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller {
    public function index () {
        $posts = Post::latest()->get();
        return view('posts.index', [ 'posts' => $posts ]);
    }

    public function show (Post $post) {
        return view('posts.show', [ 'post' => $post ]);
    }

    public function create () {
        return view('posts.create');
    }

    public function store () {
        $this->validate(request(), [
            'title' => 'required|min:2',
            'body' => 'required|min:2',
        ]);

        Post::create([
            'title' => request()->title,
            'body' => request()->body,
        ]);

        return redirect('/posts');
    }
}
