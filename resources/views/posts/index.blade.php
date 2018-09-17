@extends('layouts.layout-aside', [ 'title' => 'Posts' ])

@section('content')
    <h2 class="page-title heading-actions">
        Latest Posts
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
    @if ($archives)
        <h3 class="aside-title">Post Archive</h3>
        <ul>
            @foreach ($archives as $archive)
                <li>{{ $archive->month }} {{ $archive->year }}</li>
            @endforeach
        </ul>
    @endif
@endsection
