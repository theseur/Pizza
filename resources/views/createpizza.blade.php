<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Pizzqa</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create pizza</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="/css/admin_sites.css" rel="stylesheet" type="text/css">
</head>
<body>
  <h1>Create a new pizza</h1>
    <form action= "{{route('insertpizza')}}" method="POST" >
      @csrf <!-- {{ csrf_field() }} -->
    <label for="pname">Pizza name:</label><br>
  <input type="text" id="pname" name="pname" ><br>
  <label for="categoryname">category name:</label><br>
  <input type="text" id="categoryname" name="categoryname" ><br>
  <label for="	vegetarian">	vegetarian</label>
  <input type="checkbox" name="vegetarian" ><br>
  <div class="gombok_2">
  <input class="btn btn-success" type="submit" value="Submit">
  </div>

</form>
</body>
</html>
    
</body>
</html>