<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/header_login.css" rel="stylesheet" type="text/css">
    <link href="/css/main.css" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizza Restaurant Log In</title>
</head>
<body>
    @include('header_login')
    <form action="{{route('userlogin')}}" method="post">
        @csrf
        <label for="">Email</label><br>
        <input type="text" name="name" required><br>
        <label for="">Password</label><br>
        <input type="text" name="password" required><br>
        <label for=""></label><input type="submit" value="LogIn">
        
    </form>
    <form action="registration" method="get">
        <label for=""></label><input type="submit" value="User Registration">
    </form>
</body>
</html>