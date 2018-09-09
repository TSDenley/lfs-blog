@extends('layout', [ 'title' => 'Posts' ])

@section('content')
    <h2 class="page-title heading-actions">
        Latest Posts
        <a href="/posts/create" class="create-new-btn" title="Create new post">
            <span>+</span>
        </a>
    </h2>

    @foreach ($posts as $post)
        @include('posts.article')
    @endforeach
@endsection
