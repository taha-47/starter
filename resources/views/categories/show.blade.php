<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel = "stylesheet" href= "{{ URL::asset('css/app.css')}}">
  <title>Categories</title>
</head>
<body>

  <div class="container">
    <h2 class="text-center">Categories</h2>
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
  
</body>
</html>