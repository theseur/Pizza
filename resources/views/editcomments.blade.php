<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Comments</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <form action= "{{route('modifycategories',[$pizza->id])}}" method="POST" >
      @csrf <!-- {{ csrf_field() }} -->
    <label for="pname">Comment:</label><br>
  <input type="text" id="comment" name="comment" value="{{$pizza->comment}}"><br>
 
  
  <input type="submit" value="Submit">

</form>
</body>
</html>