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
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
         @foreach ($categories as $category)
             <th>{{$category->id}}</th>
             <th>{{$category->name}}</th>
             <th>{{$category->Description}}</th>
         @endforeach
        </tr>
      </tbody>
    </table>
  </div>
  
</body>
</html>