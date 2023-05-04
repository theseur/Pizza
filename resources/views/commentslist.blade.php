<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="/css/header_comment_page.css" rel="stylesheet" type="text/css">
    <title>Pizza comments</title>
    
</head>
<style>
    body { background-image: url('/image/pizza_backg.jpg');}
</style>
<body>
    @include('header_comment')
    <form action="{{route('createcomments')}}">
        <input class="btn btn-success" type="submit" value="Create a new comment">
    </form>
    <br>
    <form action="{{route('adminfrontpager')}}">
        <input class="btn btn-success" type="submit" value="Back to the user main page">
    </form>
    
    
    <!--<a href="{{route('createcomments')}}">új komment</a><br>
    <a href="{{route('adminfrontpager')}}">Vissza a főoldalra</a> -->
<table>
    <tr style="color: red; font-size:30px;">
        <th style="padding-right: 15px; padding-bottom:20px; padding-left: 20px">User</th>
        <th style="padding-bottom:20px;">Comment</th>
        <th style="padding-bottom:20px;">Date of comment</th>
    </tr>
@if(count($datas) > 0)
@foreach($datas as $data)

<tr style="color: white; font-size:20px;">
<td style="padding-bottom: 10px; padding-left: 20px">User</td>
<td style="max-width: 800px; word-wrap: break-word; padding-bottom: 10px;"> {{$data->comment}} </td>
<td style="padding-bottom: 10px;"> {{$data->dateofwriting}} </td>
</form>
</td>
<td><a href="{{route('editcomments', [$data->id])}}" class="btn btn-success"> Edit </a>
</td>
<td><form action= "{{route('deletecomments',[$data->id])}}" method="POST">
    @csrf <!-- {{ csrf_field() }} -->
    <button class="btn btn-danger"> Delete </button>
    </form>
</td>
</tr>
@endforeach
@endif
</table>

</body>
</html>