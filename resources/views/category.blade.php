@extends('layouts.main')

@section('container')
<h1>Halaman Category : {{ $category }}</h1>

@foreach ($posts as $post)
<article class="mb-4">
    <h2><a class="text-decoration-none" href="/galery/{{$post->slug}}">{{$post->title}}</a></h2>
    <h5>by : {{$post->user->name}}</h5>
    <p>{{$post->excerpt}}</p>
</article>
@endforeach
<a class="text-decoration-none" href="/categories">Look all Categories</a>
@endsection