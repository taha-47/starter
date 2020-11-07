
@extends('layouts.app')
@section('content')

  <div class="container">
    <h2 class="text-center">Categories</h2>
    @if (Session::has('success'))
    <div class="alert alert-success">
      {{session::get('success')}}
    </div>
     @endif
     @if (Session::has('error'))
    <div class="alert alert-warning">
      {{session::get('error')}}
    </div>
     @endif

    <a href="{{ URL('categories/create') }}" class="btn btn-info" >Add new category</a>
    <table class="table table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        {{$i = 0}}
        @foreach ($cats as $category)
        
        <tr>
          <td>{{$i++}}</td>
          <td>{{$category->name}}</td>
          <td>{{$category->description}}</td>
          <td>
            <a href="{{ URL('categories/edit/' . $category->id) }}" class="btn btn-info">Edit</a>
            <a href="{{ URL('categories/delete/' . $category->id) }}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@stop
@section('script')
    <script>
      $(function(){
       

      });
    </script>
@endsection