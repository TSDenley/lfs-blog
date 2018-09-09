@extends('layout', [ 'title' => 'Create New Post' ])

@section('content')
    <h2 class="page-title">Create New Post</h2>

    @include('layouts.errors')

    <form action="/posts" method="POST" class="create-post-form">
        {{ csrf_field() }}

        <p><input type="text" name="title" placeholder="Post Title"></p>

        <p><textarea name="body" rows="8" cols="80"></textarea></p>

        <p><button type="submit" class="btn-default">Publish post</button></p>
    </form>
@endsection
