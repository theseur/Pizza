<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Front page</title>
</head>
<body>
    @if(Auth::user()->admin == 1)

    <script>window.location = "/adminfrontpage";</script>
  @endif
  <form action="/logout" method="get">
    <input class="btn btn-success" type="submit" value="LogOut">
  </form>
    
    <a href="{{route('comments')}}">Comments</a><br>
    
</body>
</html>