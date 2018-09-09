@extends('layout', [ 'title' => $post->title ])

@section('content')
    @include('posts.article')

    @if ($post->comments)
        <hr>
        <div class="comments">
            <h3 class="comments-heading">Comments</h3>

            @foreach ($post->comments as $comment)
                @include('posts.comment')
            @endforeach
        </div>
    @endif
@endsection
