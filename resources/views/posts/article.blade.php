<article class="post">
    <header class="post-header">
        <h1 class="post-title">
            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
        </h1>

        <p class="post-meta">{{ $post->created_at->format('l, jS F Y \a\t H:i') }}</p>
    </header>

    <div class="post-body">{{ $post->body }}</div>
</article>
