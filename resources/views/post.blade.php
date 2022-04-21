
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2>{{$post->title}}</h2>
            <h5 class="text-decoration-none">Author : <a href="/galery?user={{$post->user->username}}"> {{$post->user->name}} </a> in <a class="text-decoration-none" href="/galery?category={{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
            @if($post->image)
            <div style="max-height: 500px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
            </div>
            @else
            <img src="/img/{{ $post->category->name }}.jpg" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
            @endif
            <article class="my-3 fs-5">
                {!!$post->body!!}
            </article>
            <a class="text-decoration-none d-block mt-3" href="/galery">Back</a>
        </div>
    </div>
</div>



@endsection

