@if ($flash = session('message'))
    <div class="alert-success">
        {{ $flash }}
    </div>
@endif
