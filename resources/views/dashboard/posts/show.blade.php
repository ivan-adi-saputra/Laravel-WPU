@extends('dashboard.layouts.main')

@section('container')
        <div class="container">
            <div class="row my-3">
                <div class="col-lg-8">
                    <h3 class="mb-3">{{ $post->title }}</h3>
                   
                    <a href="/dashboard/posts" class="btn btn-info"><span data-feather="arrow-left"></span>Back to all my posts</a>
                    <a href="/dasboard/posts" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
                    <a href="/dasboard/posts" class="btn btn-danger"><span data-feather="x-circle"></span>Delete</a>
                    
                    <img src="/img/unsplash.jpg" alt="{{ $post->category->name }}" width="700" height="400" class="img-fluid mt-3">
                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>
                </div>
            </div>
        </div>
@endsection