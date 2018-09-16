<article class="post">
    <header class="post-header">
        <h1 class="post-title">
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
        </h1>

        <p class="post-meta">
            <span>Posted on</span>
            <span class="post-date">{{ $post->created_at->format('jS F Y \a\t H:i') }}</span>
            <span>, by</span>
            <span class="post-author">{{ $post->user->name }}</span>
        </p>
    </header>

    <div class="post-body">{{ $post->body }}</div>
</article>
