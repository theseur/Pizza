<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/header_comment_page.css" rel="stylesheet" type="text/css">
    <link href="/css/comment.css" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment Page</title>
</head>
<body>
    @include('header_comment')
    <div class="comment">
    <form action="" class="created_comment_form">
    <table class="table">
        <thead class="table_head">
            <th>Id</th>
            <th>Comment</th>
            <th>User name</th>
            <th>Created</th>
            <th>Action</th>

        </thead>
        <tbody class="table_rows">
            <tr>
                <td>1</td>
                <td>Comment</td>
                <td>User name</td>
                <td>Created</td>
                <td>
                <a href="">Read</a>
                <a href="">Update</a>
                <a href="">Delete</a>
            </td>
            </tr>
        </tbody>
    </form>

    <form action="" method="POST" class="create_comment_form">
        <div class="create_comment_field">
            <div class="create_comment_box">
                <table class="create_comment_table">
                    <thead>
                        <th>Comment</th>
                        <th>Action</th>
                    </thead>
                    <tbody class="">
                        <tr>
                        <td><input type="text" name="" id=""></td>
                        <td><a href="">Create</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
    </div>

    </table>
</body>
</html>