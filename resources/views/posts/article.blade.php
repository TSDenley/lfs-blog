<article class="post">
    <header class="post-header">
        <h1 class="post-title">{{ $post->title }}</h1>
        <p class="post-meta">{{ $post->created_at }}</p>
    </header>

    <div class="post-body">
        {{ $post->body }}
    </div>
</article>
