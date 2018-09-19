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

            <footer class="post-footer">
                <a href="/posts/{{ $post->id }}#comments">
                    @if ($commentsCount = count($post->comments))
                        {{ $commentsCount }} comments |
                    @endif
                    {{ Auth::check() ? 'Leave a comment' : 'View comments' }}
                </a>
            </footer>
        @endforeach
    @else
        <p><i>No posts</i></p>
    @endif
@endsection

@section('aside')
    @include('posts.monthly-archive')
@endsection
