@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Post Categories, {{ auth()->user()->name }}</h1>
  </div>
  @if(session()->has('success'))
  <div class="alert col-lg-8 alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif
  <div class="table-responsive col-lg-6">
      <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new category</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

        @foreach($categories as $category)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>
              <a href="/categories" class="badge bg-info"><span data-feather="eye"></span></a>
              <form action="/dashboard/categories/{{ $category->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure want to delete this category?')"><span data-feather="x-circle"></span></button>
                
              </form>
          </td>
          
        </tr>
       @endforeach
      </tbody>
    </table>
  </div>

@endsection