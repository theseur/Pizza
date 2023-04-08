<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit pizza</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <form action= "{{route('modifypizza',[$pizza->pname])}}" method="POST">
    <label for="pname">Pizza name:</label><br>
  <input type="text" id="pname" name="pname" value="{{$pizza->pname}}"><br>
  <label for="categoryname">category name:</label><br>
  <input type="text" id="categoryname" name="categoryname" value="{{$pizza->categoryname}}"><br>
  <label for="	vegetarian">	vegetarian</label><br>
  <input type="checkbox" name="vegetarian" value="1" {{  ($pizza->vegetarian== 1 ? ' checked' : '') }}><br>
  <input type="submit" value="Submit">

</form>
</body>
</html>