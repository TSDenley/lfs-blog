@extends('layout', [ 'title' => $post->title ])

@section('content')
    @include('posts.article')

    <hr>
    <h3 class="comments-heading">Comments</h3>

    @include('layouts.errors')

    <form class="comment-form" action="/posts/{{ $post->id }}/comments" method="post">
        {{ csrf_field() }}
        <p><textarea name="body" rows="8" cols="80" placeholder="Post a comment"></textarea></p>
        <p><button type="submit" class="btn-default">Post</button></p>
    </form>

    @if ($post->comments)
        <div class="comments">
            @foreach ($post->comments as $comment)
                <article class="comment">
                    <div class="comment-meta">
                        Posted <i>{{ $comment->created_at->diffForHumans() }}</i>
                    </div>
                    <div class="comment-body">{{ $comment->body }}</div>
                </article>
            @endforeach
        </div>
    @endif
@endsection
