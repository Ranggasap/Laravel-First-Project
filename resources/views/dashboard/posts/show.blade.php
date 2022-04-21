@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2>{{$post->title}}</h2>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to My Posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure want to delete this post?')"><span data-feather="x-circle"></span> Delete</button>
                
              </form>

            @if($post->image)
            <div class="mt-3" style="max-height: 500px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
            </div>
            @else
            <img src="img/{{ $post->category->name }}.jpg" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
            @endif

            <article class="my-3 fs-5">
                {!!$post->body!!}
            </article>
            <a class="text-decoration-none d-block mt-3" href="/dashboard/posts">Back</a>
        </div>
    </div>
</div>

@endsection