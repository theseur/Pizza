<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
    <a href="{{route('adminfrontpager')}}">Vissza a főoldalra</a>
    <table>
@if(count($datas) > 0)
@foreach($datas as $data)
<tr>
<td> {{$data->pizzaname}} </td>
<td> {{$data->amount}} </td>
<td> {{$data->taken}} </td>
<td> {{$data->dispatched}} </td>

</td>

</tr>
@endforeach
@endif
</table>

</body>
</html>