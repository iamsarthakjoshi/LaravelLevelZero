@extends('layouts.singlePost')

@section('content')
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    <p class="blog-post-meta">{{ $post->created_at }} <a href="#">Joshi</a></p>
    <hr>
    <p>{{ $post->body }}</p>
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="/posts">Back</a>
    </nav>
@endsection