<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caterory</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="/css/admin_sites.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Categories in the datebase</h1>
    <form action="{{route('createcategory')}}">
        <input class="btn btn-success" type="submit" value="Create a new Categorie">
    </form>
    <br>
    <form action="{{route('adminfrontpager')}}">
        <input class="btn btn-success" type="submit" value="Back to the user main page">
    </form> 
    
    <!--
    <a href="{{route('createcategory')}}">új kategória</a><br>
    <a href="{{route('adminfrontpager')}}">Vissza a főoldalra</a>
    -->
    <table>
@if(count($datas) > 0)
<div class="tablazat">
@foreach($datas as $data)
<tr>
<td> {{$data->pname}} </td>
<td> {{$data->price}} </td>
<td><a href="{{route('editcategories', [$data->pname])}}" class="btn btn-success"> Edit </a>
</td>
<td><form action= "{{route('deletecategories',[$data->pname])}}" method="POST">
    @csrf <!-- {{ csrf_field() }} -->
    <button class="btn btn-danger"> Delete </button>
    </form>
</td>

</tr>
@endforeach
</div>
@endif
</table>

</body>
</html>