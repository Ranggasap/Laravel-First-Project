@extends('layouts.main')

@section('container')

<div class="container text-center mt-4">
<h1>{{ $title }}</h1>
</div>

@if ($categories->count())
 
<div class="container">
    <div class="row">
        @foreach ($categories as $category)
      
        <div class="col-md-4 my-3">
            <a href="/galery?category={{ $category->slug }}">
            <div class="card bg-dark text-white">
              @if($category->image)                        
                        <img src="http://127.0.0.1:8000/storage/{{ $category->image }}" class="card-img-top img-fluid" alt="{{ $category->name }}">
                        @else
                        <img src="img/{{ $category->name }}.jpg" class="card-img-top" alt="{{ $category->name }}">
                @endif
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                </div>
                <p class="card-text text-center text-decoration-none">{{ $category->created_at->diffForHumans() }}</p>
              </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@else

<p class="text-center fs-4">Sorry, No Categories Found!</p>
   
@endif

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


