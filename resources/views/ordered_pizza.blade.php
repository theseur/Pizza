<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/header_registered.css" rel="stylesheet" type="text/css">
    <link href="/css/main.css" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ordered Pizza</title>
</head>
<body>
    @include('header_ordered_pizza')
    <h2>You ordered the following! <br>{{$pizza_name}} Pizza, {{$pizza_amount}}piece/s</h2>
</body>
</html>