@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
  </div>
  <div class="card col-md-6" >
    <div class="card-body">
      <h5 class="card-title">{{ auth()->user()->name }}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{ auth()->user()->username }}</h6>
      <p class="card-text">{{ auth()->user()->email }}</p>
    </div>
  </div>
@endsection