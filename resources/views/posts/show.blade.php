@extends('layouts.layout-aside', [ 'title' => $post->title ])

@section('content')
    @include('posts.article')

    <hr>
    <h3 class="comments-heading">Comments</h3>

    @include('layouts.errors')

    @if (Auth::check())
        <form class="comment-form" action="/posts/{{ $post->id }}/comments" method="post">
            {{ csrf_field() }}
            <p><textarea name="body" rows="8" cols="80" maxlength="255" placeholder="Post a comment"></textarea></p>
            <p><button type="submit" class="btn-default">Post</button></p>
        </form>
    @endif

    @if ($post->comments)
        <div class="comments">
            @foreach ($post->comments as $comment)
                <article class="comment">
                    <div class="comment-meta">
                        <span>Posted</span>
                        <span class="comment-posted-on">{{ $comment->created_at->diffForHumans() }}</span>
                        <span>by</span>
                        <span class="comment-author">{{ $comment->user->name }}</span>
                    </div>
                    <div class="comment-body">{{ $comment->body }}</div>
                </article>
            @endforeach
        </div>
    @endif
@endsection

@section('aside')
    @include('posts.monthly-archive')
@endsection
