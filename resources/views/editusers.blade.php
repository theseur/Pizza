<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <form action= "{{route('modifyusers',[$pizza->name])}}" method="POST" >
      @csrf <!-- {{ csrf_field() }} -->
    <label for="pname">User name:</label><br>
  <input type="text" id="name" name="name" value="{{$pizza->name}}"><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value="{{$pizza->email}}"><br>
  <label for="password">Email:</label><br>
  <input type="text" id="password" name="password	" value="{{$pizza->password	}}"><br>
  <label for="admin">Admin</label><br>
  <input type="checkbox" name="admin" value="1" {{  ($pizza->admin== 1 ? ' checked' : '') }}><br>
  <label for="hidden">Hidden</label><br>
  <input type="checkbox" name="hidden" value="1" {{  ($pizza->hidden== 1 ? ' checked' : '') }}><br>
  <input type="submit" value="Submit">

</form>
</body>
</html>