@extends('layout', [ 'title' => $post->title ])

@section('content')
    <h2 class="page-title">{{ $post->title }}</h2>
@endsection
