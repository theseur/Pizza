<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <table>
@if(count($datas) > 0)
@foreach($datas as $data)
<tr>
<td> {{$data->pname}} </td>
<td> {{$data->categoryname}} </td>
<td> {{$data->vegetarian}} </td>
<td><a href="{{route('editpizza', [$data->pname])}}" class="btn btn-success"> Edit </a>
</td>
<td><a href="{{route('pizzas')}}" class="btn btn-danger"> Delete </a>
</td>

</tr>
@endforeach
@endif
</table>

</body>
</html>