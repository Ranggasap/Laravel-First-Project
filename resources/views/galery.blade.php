@extends('layouts.main')
@section('container')
<h1 class="mb-3 text-center mt-4">Halaman {{ $title }}</h1>

<div class="row justify-content-center">
  <div class="col-md-6">
    <form action="/galery">  

      @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
      @endif

      @if (request('user'))
        <input type="hidden" name="user" value="{{ request('user') }}">
      @endif

      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
        <button class="btn btn-primary" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

@if ($posts->count())
<div class="container">
<div class="card mb-3">
    <div class="position-absolute px-3 py-2 text-white" style="background-color:rgba(0, 0, 0, 0.7)"><a href="/galery?category={{ $posts[0]->category->slug }}" class="text-white text-decoration-none">{{ $posts[0]->category->name }}</a></div>
    @if($posts[0]->image)
            <div style="max-height: 500px; overflow:hidden;">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top img-fluid" alt="{{ $posts[0]->category->name }}">
            </div>
            @else
            <img src="img/{{ $posts[0]->category->name }}.jpg" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    @endif
    <div class="card-body text-center">
      <h3 class="card-title"><a href="/galery/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
      <h5><small> Author : <a href="/galery?user={{ $posts[0]->user->username }}" class="text-decoration-none">{{$posts[0]->user->name}}</a> in <a class="text-decoration-none" href="/galery?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }} </small></h5>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a href="/galery/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
    </div>
  </div>
</div>



<div class="container">
    <div class="row">
        @foreach($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute bg-dark text-white px-3 py-2"><a href="/galery?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                @if($post->image)                        
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid" alt="{{ $post->category->name }}">
                        @else
                        <img src="img/{{ $post->category->name }}.jpg" class="card-img-top" alt="{{ $post->category->name }}">
                @endif
                
                <div class="card-body">
                  <h5 class="card-title"><a href="/galery/{{$post->slug}}" class="text-decoration-none text-dark">{{$post->title}}</a></h5>
                  <h5><small> Author : <a href="/galery?user={{ $post->user->username }}" class="text-decoration-none">{{$post->user->name}}</a>  {{ $post->created_at->diffForHumans() }} </small></h5>
                  <p class="card-text">{{$post->excerpt}}</p>
                  <a href="/galery/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

@else
    <p class="text-center fs-4">Sorry, No Post Found!</p>
@endif

<div class="d-flex justify-content-center">
  {{ $posts->links() }}
</div>


<footer>
  <div class="container-fluid bg-primary text-center">
    <div class="row">
      <div class="col-sm-12 pt-3">
        <p class="footer-text">&copy; copyright 2020 | built by <a class="text-decoration-none footer-text" href="https://instagram.com/karasoki">Rangga Saputra</a></p>
      </div>
    </div>
  </div>
</footer>

@endsection