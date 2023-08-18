@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/post" class="btn btn-success"><i class="fa-solid fa-arrow-left"></i> Back to all my post</a>
                <a href="/dashboard/post/{{ $post->slug }}/edit" class="btn btn-warning"><i class="fa-regular fa-edit"></i> Edit</a>
                <form action="/dashboard/post/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf

                    <button class="btn btn-danger" onclick="return confirm('Are You Sure?')"><i class="fa-regular fa-circle-xmark"></i>Delete</button>
                </form>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

                <a href="/posts" class="d-block mt-3">Back to posts</a>
            </div>
        </div>
    </div>
@endsection
