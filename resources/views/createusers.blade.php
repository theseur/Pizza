<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Users</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="/css/admin_sites.css" rel="stylesheet" type="text/css">
</head>
<body>
  <h1>New user creating</h1>
    <form action= "{{route('insertusers')}}" method="POST" >
      @csrf <!-- {{ csrf_field() }} -->
    <label for="name">User name:</label><br>
  <input type="text" id="name" name="name" ><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" ><br>
  <label for="password">Password:</label><br>
  <input type="password" id="assword" name="password" ><br>
  <label for="admin">Admin</label>
  <input type="checkbox" name="admin" ><br>
  <label for="hidden">Hidden</label>
  <input type="checkbox" name="hidden" ><br>
  <div class="gombok_2">
  <input class="btn btn-success" type="submit" value="Submit">
</div>

</form>
</body>
</html>
    
</body>
</html>