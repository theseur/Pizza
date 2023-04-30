<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Front page</title>
</head>
<body>
    @if(Auth::user()->admin == 0)

    <script>window.location = "/userfrontpage";</script>
  @endif
    Logout<br>
    <a href="{{route('users')}}">Users</a><br>
    <a href="{{route('categories')}}">Categories</a><br>
    <a href="{{route('pizzas')}}">Pizzas</a><br>
    <a href="{{route('comments')}}">Comments</a><br>
    <a href="{{route('orders')}}">Orders</a><br>
</body>
</html>