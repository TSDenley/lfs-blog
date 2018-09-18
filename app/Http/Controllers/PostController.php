<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller {
    public function __construct () {
        $this->middleware('auth')->except([ 'index', 'show' ]);
    }

    public function index () {
        // All post, filtered by archive filters if present
        $posts = Post::latest()
            ->filter(request([ 'month', 'year' ]))
            ->get();

        // Monthly post archives for aside
        $archives = Post::archives();

        return view('posts.index', [
            'posts' => $posts,
            'archives' => $archives,
            'month' => request('month'),
            'year' => request('year'),
        ]);
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
            'user_id' => auth()->id(),
        ]);

        return redirect('/posts');
    }
}
