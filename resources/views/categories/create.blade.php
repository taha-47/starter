<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel = "stylesheet" href= "{{ URL::asset('css/app.css')}}">
  <title>create</title>
</head>
<body>
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
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Category description</label>
        <textarea name="description" class="form-control"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
</body>
</html>