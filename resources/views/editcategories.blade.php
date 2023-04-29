<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit categories</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <form action= "{{route('modifycategories',[$pizza->pname])}}" method="POST" >
      @csrf <!-- {{ csrf_field() }} -->
    <label for="pname">Category name:</label><br>
  <input type="text" id="pname" name="pname" value="{{$pizza->pname}}"><br>
  <label for="price">Price:</label><br>
  <input type="number" id="price" name="price" value="{{$pizza->price}}"><br>
  
  <input type="submit" value="Submit">

</form>
</body>
</html>