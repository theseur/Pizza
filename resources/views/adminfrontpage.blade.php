<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="/css/admin_sites.css" rel="stylesheet" type="text/css">
    <title>Admin Front page</title>
</head>
<body>
    @if(Auth::user()->admin == 0)

    <script>window.location = "/userfrontpage";</script>
  @endif
  
  <form action="/logout" method="get">
    <input class="btn btn-success" type="submit" value="LogOut">
    
  </form>
  <br>

    <form action="{{route('users')}}">
      <input class="btn btn-success" type="submit" value="Users">
      
    </form>
    <br>

    <form action="{{route('categories')}}">
      <input class="btn btn-success" type="submit" value="Categories">
    </form>
    <br>

    <form action="{{route('pizzas')}}">
      <input class="btn btn-success" type="submit" value="Pizzas">
    </form>
    <br>

    <form action="{{route('comments')}}">
      <input class="btn btn-success" type="submit" value="Comments">
    </form>
    <br>

    <form action="{{route('orders')}}">
      <input class="btn btn-success" type="submit" value="Orders">
    </form>
    <!--
    <a href="{{route('users')}}">Users</a><br>
    <a href="{{route('categories')}}">Categories</a><br>
    <a href="{{route('pizzas')}}">Pizzas</a><br>
    <a href="{{route('comments')}}">Comments</a><br>
    <a href="{{route('orders')}}">Orders</a><br> -->
</body>
</html>