<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
</head>
<style>
    body { background-image: url('/image/pizza_backg.jpg');}
</style>
<body>
    <h2>You can write your experience about the {{$choosed_pizza_detail}} pizza!</h2>
    <form action="save_experience" method="get">
        <textarea name="text_box" id="" cols="80" rows="10" maxlength="250" placeholder="Here you can write max 250 caracters" required></textarea><br>
        <input type="submit" value="Send" formaction='save_experience'>
    </form>
</body>
</html>