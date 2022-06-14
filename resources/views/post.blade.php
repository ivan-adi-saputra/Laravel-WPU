@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h3 class="mb-3">{{ $post->title }}</h3>
                <p>By <a href="/post?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> on <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                <img src="/img/unsplash.jpg" alt="{{ $post->category->name }}" width="700" height="400" class="img-fluid">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/posts" class="text-decoration-none">back to posts</a>
            </div>
        </div>
    </div>
@endsection