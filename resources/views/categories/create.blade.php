{{--
  
  * Category page create
  *
  *

--}}

@extends('layouts.app')

@section('content')
    
  <div class="container">
    <h2 class="text-center">Create category</h2>
    @if (Session::has('success'))
      <div class="alert alert-success">
        {{session::get('success')}}
      </div>
    @endif
    
    <form action="{{ URL('categories/store')}}" method="POST">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Category name</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Category description</label>
        <textarea name="description" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
@stop