<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User exists</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="alert alert-danger" role="alert">
        Ilyen felhasználó már van!
      </div>
      <a href="{{route('users')}}">Kattints ide a felhasználó listához!</a>
      <a href="{{route('createrealuser')}}">Kattints ide egy új felhasználó létrehozásához!</a>
    
</body>
</html>