<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/header_registration.css" rel="stylesheet" type="text/css">
    <link href="/css/main.css" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizza restaurant Registration</title>
</head>
<body>
    @include('header_registration')
    <form action="{{route('createuser')}}"  method="post">
        @csrf
        <label for="">User name</label><br>
        <input type="text" name="name"><br>
        <label for="">Password</label><br>
        <input type="text" name="password"><br>
        <label for="">Email</label><br>
        <input type="email" name="email"><br>
        <input type="submit" value="Registration">
    </form>
</body>
</html>