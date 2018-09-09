<article class="comment">
    <div class="comment-meta">Posted <i>{{ $comment->created_at->diffForHumans() }}</i></div>
    <div class="comment-body">{{ $comment->body }}</div>
</article>
