@extends('layouts.main')

@section('container')
<h1>Halaman {{ $title }}</h1>
<h3 class="mt-3">{{$name}}</h3>
<h1>{{$email}}</h1>
<img src="img/{{$image}}" alt="About" class="img-thumbnail rounded-circle">
<p class="mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias ipsam totam dolorum explicabo obcaecati numquam, eaque reprehenderit. Iste quidem, laudantium labore odio vitae facilis suscipit exercitationem doloribus ut fugiat omnis!lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum repellat consectetur esse aliquam veritatis velit temporibus inventore nobis accusantium id hic at aliquid, tempore sequi molestias? Necessitatibus cupiditate eos saepe?</p>
@endsection