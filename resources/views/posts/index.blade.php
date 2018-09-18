@extends('layouts.layout-aside', [ 'title' => 'Posts' ])

@section('content')
    <h2 class="page-title heading-actions">
        @if (isset($month) && isset($year))
            Posts from {{ $month }} {{ $year }}
        @else
            Latest Posts
        @endif

        @if (Auth::check())
            <a href="/posts/create" class="create-new-btn" title="Create new post">
                <span>+</span>
            </a>
        @endif
    </h2>

    @if (count($posts))
        @foreach ($posts as $post)
            @include('posts.article')
        @endforeach
    @else
        <p><i>No posts</i></p>
    @endif
@endsection

@section('aside')
    @include('posts.monthly-archive')
@endsection
