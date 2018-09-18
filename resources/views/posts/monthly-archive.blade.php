@if (isset($archives))
    <h3 class="aside-title">Post Archive</h3>
    <ul>
        @foreach ($archives as $archive)
            <li>
                <a href="/posts?month={{ $archive->month }}&year={{ $archive->year }}">
                    {{ $archive->month }} {{ $archive->year }}
                </a>
            </li>
        @endforeach
    </ul>
@endif
